<?php

namespace Amine\Arcmd\Resources;

use Illuminate\Database\Connection;
use Monolog\Logger;
use PDO;
use TerminalProgress\Bar;

class EntityGenerator
{
    private Logger $log;
    private PDO $pdo;
    private Connection $connection;
    private array $tables;

    public function __construct(
        PDO $pdo,
        Connection $connection,
        Logger $log
    )
    {
        $this->log = $log;
        $this->pdo = $pdo;
        $this->connection = $connection;
        $this->tables = $this->pdo->query('SHOW FULL TABLES WHERE TABLE_TYPE = \'BASE TABLE\'')->fetchAll();
    }

    public function generateEntities(): void
    {
        $f = "[ENTITIES] Progress: [:bar] - :current/:total - :percent% - Elapsed::elapseds - ETA::etas - Rate::rate/s";
        $progressBar = new Bar(count($this->tables), $f);
        $progressBar->symbolComplete = "█";

        $this->removeOldFiles();

        foreach ($this->tables as $key => $table) {
            $tableName = $table[0];
            if (
                !str_contains($tableName, "-test") &&
                !str_contains($tableName, "interval")
            ) {
                $query = "
                    SELECT DISTINCT (c.COLUMN_NAME) AS column_name,
                                    c.COLUMN_TYPE AS column_type,
                                    c.IS_NULLABLE AS is_nullable,
                                    c.COLUMN_DEFAULT AS column_default,
                                    c.EXTRA AS extra,
                                    c.COLUMN_KEY AS column_key,
                                    c.ORDINAL_POSITION AS ordinal_position,
                                    k.REFERENCED_TABLE_NAME AS referenced_table_name,
                                    k.REFERENCED_COLUMN_NAME AS referenced_column_name
                    FROM information_schema.COLUMNS c
                    LEFT JOIN information_schema.KEY_COLUMN_USAGE k ON c.TABLE_NAME = k.TABLE_NAME AND c.COLUMN_NAME = k.COLUMN_NAME
                    WHERE c.TABLE_NAME = '$tableName'
                    AND c.TABLE_SCHEMA = 'ftth_v3'
                    GROUP BY c.COLUMN_NAME;
                ";
                $pdoStatement = $this->pdo->query($query);
                $properties = $pdoStatement->fetchAll(PDO::FETCH_OBJ);

                list($tableName, $class_name) = $this->tableNameToCamelCase($tableName);
                $path = $this->prepareDirectory($tableName);

                $prepareDir = explode('_', $tableName)[0];
                $dirName = (!empty($prepareDir)) ? "\\$prepareDir" : "";

                $file = "<?php";
                $file .= "\n\n";
                $file .= "namespace Amine\\Arcmd\\Resources\\Entities$dirName;\n\n";
                $file .= "use DateTime;\n";
                $file .= "use Amine\\Arcmd\\Resources\\Entities\\Abstractions\\EntityAbstraction;\n";
                $file .= "use Amine\\Arcmd\\Resources\\Entities\\Interfaces\\EntityInterface;\n";
                $file .= "use Amine\\Arcmd\\Resources\\Entities\\Exceptions\\InvalidArgument;\n";
                $file .= "use TypeError;\n\n";
                $file .= "class %s extends EntityAbstraction implements EntityInterface {\n";
                $file .= "    const TABLE_NAME   = '$table[0]';\n";

                foreach ($properties as $property) {
                     if ($property->column_key == 'PRI') {
                        $file .= "    const PRIMARY_KEY  = '$property->column_name';\n";
                     }
                }

                $file .= "    const FOREIGN_KEYS = [\n";
                foreach ($properties as $property) {
                    if ($property->column_key == 'MUL' && !empty($property->referenced_table_name)) {
                        $file .= "        [\n";
                        $file .= "            self::REFERENCED_TABLE_NAME => '$property->referenced_table_name',\n";
                        $file .= "            self::COLUMN_NAME => '$property->column_name',\n";
                        $file .= "        ],\n";
                     }
                }
                $file .= "    ];\n\n";

                foreach ($properties as $property) {
                    $file .= "    const LABEL_" . strtoupper($property->column_name) . " = '$property->column_name';\n";
                }
                $file .= "\n";

                foreach ($properties as $property) {
                    $phpType = $this->getPhpType($property->column_type);
                    $propertyName = $this->propertyNameToCamelCase($property->column_name);

                    $file .= "    /** @var $phpType $$propertyName */\n";
                    $file .= "    private $phpType $$propertyName;\n\n";
                }

                foreach ($properties as $property) {
                    $phpType = $this->getPhpType($property->column_type);
                    $propertyName = $this->propertyNameToCamelCase($property->column_name);
                    $functionName = "set" . ucfirst($propertyName);

                    $file .= "\n";
                    $file .= "    /**\n";
                    $file .= "     * @param $phpType $$propertyName\n";
                    $file .= "     * @return $class_name\n";
                    $file .= "     * @throws InvalidArgument\n";
                    $file .= "     * @throws TypeError\n";
                    $file .= "     */\n";
                    $file .= "    public function $functionName($phpType $$propertyName): $class_name\n";
                    $file .= "    {\n";
                    $file .= "        \$this->" . $propertyName . " = $$propertyName;\n";
                    $file .= "        return \$this;\n";
                    $file .= "    }\n";

                    $functionName = "get" . ucfirst($propertyName);

                    $file .= "\n";
                    $file .= "    /** @return $phpType */\n";
                    $file .= "    public function $functionName(): $phpType\n";
                    $file .= "    {\n";
                    $file .= "        return \$this->$propertyName;\n";
                    $file .= "    }\n";
                }
                $file .= "}\n";

                file_put_contents(
                    "$path/$class_name.php",
                    sprintf($file, $class_name)
                );
            }
            $progressBar->update($key);
        }
        $progressBar->end();
    }

    private function tableNameToCamelCase(string $tableName): array
    {
        $tableName = mb_convert_case($tableName, MB_CASE_TITLE);
        $className = str_replace("_", "", $tableName);
        return array($tableName, $className);
    }

    private function propertyNameToCamelCase(string $propertyName): string
    {
        $propertyName = mb_convert_case($propertyName, MB_CASE_TITLE);
        $propertyName = str_replace("_", "", $propertyName);
        return lcfirst($propertyName);
    }

    private function prepareDirectory(string $tableName): string
    {
        $directoryName = explode("_", $tableName);
        $path = __DIR__ . "/Entities";

        if (!empty($directoryName[0])) {
            $path .= "/$directoryName[0]";
        }

        if (!is_dir($path)) {
            mkdir($path, 0777);
        }
        return $path;
    }

    private function removeOldFiles(): void
    {
        $fullPath = __DIR__ . "/Entities";
        array_map('unlink', glob("$fullPath*.php"));
    }

    private function getPhpType(string $type): string
    {
        switch ($type) {
            case str_contains($type, "datetime"):
            case str_contains($type, "timestamp"):
                $type = "DateTime";
                break;
            case str_contains($type, "boolean"):
            case str_contains($type, "bool"):
                $type = "boolean";
                break;
            case str_contains($type, "tinyint"):
            case str_contains($type, "int"):
            case str_contains($type, "integer"):
            case str_contains($type, "bigint"):
            case str_contains($type, "mediumint"):
                $type = "int";
                break;
            default:
                $type = "string";
                break;
        }

        return $type;
    }
}

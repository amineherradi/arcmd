<?php

include_once 'bootstrap.php';

global $connexion;
global $pdo;

$filePath = __DIR__ . "/FANTOIR1022.txt";
$lines = count(file($filePath));
$resources = fopen($filePath, "r");

$isCtrProd = false;
$isDepartement = false;
$isCommune = false;
$isVoie = false;
$isLineType = [];
$lineConstruct = [];
$index = 0;

while ($line = fgets($resources)) {
    $line = str_replace('\00', " ", $line);
    $columnValue = trim(substr($line, 0, 10));
    $isLineType = identifyLineType($columnValue);

    if ($isLineType['isCtrProd']) {
        $filler1           = substr($line, 0, 10);
        $libelle_ctre_prod = substr($line, 11, 25);
        $date_situation    = substr($line, 36, 8);
        $date_production   = substr($line, 44, 8);
        $filler2           = substr($line, 51, null);
        $lineConstruct = [
            'type' => 'CENTRE DE PRODUCTION',
            'column_1' => trim($filler1),
            'column_2' => trim($libelle_ctre_prod),
            'column_3' => trim($date_situation),
            'column_4' => trim($date_production),
            'column_5' => trim($filler2),
        ];
    }

    if ($isLineType['isDepartement']) {
        $code_departement  = substr($line, 0, 2);
        $code_direction    = substr($line, 2, 1);
        $filler1           = substr($line, 3, 8);
        $libelle_direction = substr($line, 11, 30);
        $filler2           = substr($line, 41, null);

        $lineConstruct = [
            'type' => 'DEPARTEMENT',
            'column_1' => trim($code_departement),
            'column_2' => trim($code_direction),
            'column_3' => trim($filler1),
            'column_4' => trim($libelle_direction),
            'column_5' => trim($filler2),
        ];
    }

    if ($isLineType['isCommune']) {
        $code_departement      = substr($line, 0, 2);
        $code_direction        = substr($line, 2, 1);
        $code_commune          = substr($line, 3, 3);
        $filler1               = substr($line, 6, 4);
        $cle_rivoli            = substr($line, 10, 1);
        $libelle_commune       = substr($line, 11, 30);
        $filler2               = substr($line, 41, 1);
        $type_commune          = substr($line, 42, 1);
        $filler3               = substr($line, 43, 2);
        $caractere_rur         = substr($line, 45, 1);
        $filler4               = substr($line, 46, 3);
        $caractere_population  = substr($line, 49, 1);
        $filler5               = substr($line, 50, 2);
        $population_reelle     = substr($line, 52, 7);
        $population_a_part     = substr($line, 59, 7);
        $population_fictive    = substr($line, 66, 7);
        $caractere_annulation  = substr($line, 73, 1);
        $date_annulation       = substr($line, 74, 7);
        $date_creation_article = substr($line, 81, 7);
        $filler6               = substr($line, 88, null);

        $lineConstruct = [
            'type'      => 'COMMUNE',
            'column_1'  => trim($code_departement),
            'column_2'  => trim($code_direction),
            'column_3'  => trim($code_commune),
            'column_4'  => trim($filler1),
            'column_5'  => trim($cle_rivoli),
            'column_6'  => trim($libelle_commune),
            'column_7'  => trim($filler2),
            'column_8'  => trim($type_commune),
            'column_9'  => trim($filler3),
            'column_10' => trim($caractere_rur),
            'column_11' => trim($filler4),
            'column_12' => trim($caractere_population),
            'column_13' => trim($filler5),
            'column_14' => trim($population_reelle),
            'column_15' => trim($population_a_part),
            'column_16' => trim($population_fictive),
            'column_17' => trim($caractere_annulation),
            'column_18' => trim($date_annulation),
            'column_19' => trim($date_creation_article),
            'column_20' => trim($filler6),
        ];
    }

    if ($isLineType['isVoie']) {
        $code_departement            = substr($line, 0, 2);
        $code_direction              = substr($line, 2, 1);
        $code_commune                = substr($line, 3, 3);
        $identifiant_voie            = substr($line, 6, 4);
        $cle_rivoli                  = substr($line, 10, 1);
        $code_nature_voie            = substr($line, 11, 4);
        $libelle_voie                = substr($line, 15, 26);
        $filler1                     = substr($line, 41, 1);
        $type_commune                = substr($line, 42, 1);
        $filler2                     = substr($line, 43, 2);
        $caractere_rur               = substr($line, 45, 1);
        $filler3                     = substr($line, 46, 2);
        $caractere_voie              = substr($line, 48, 1);
        $caractere_population        = substr($line, 49, 1);
        $filler4                     = substr($line, 50, 9);
        $population_a_part           = substr($line, 59, 7);
        $population_fictive          = substr($line, 66, 7);
        $caractere_annulation        = substr($line, 73, 1);
        $date_annulation             = substr($line, 74, 7);
        $date_creation_article       = substr($line, 81, 7);
        $filler5                     = substr($line, 88, 15);
        $code_identifiant_majic_voie = substr($line, 103, 5);
        $type_voie                   = substr($line, 108, 1);
        $caractere_lieu_dit          = substr($line, 109, 1);
        $filler6                     = substr($line, 110, 2);
        $complement_voie             = substr($line, 112, 8);
        $filler7                     = substr($line, 120, 30);

        $lineConstruct = [
            'type'      => 'VOIE',
            'column_1'  => trim($code_departement),
            'column_2'  => trim($code_direction),
            'column_3'  => trim($code_commune),
            'column_4'  => trim($identifiant_voie),
            'column_5'  => trim($cle_rivoli),
            'column_6'  => trim($code_nature_voie),
            'column_7'  => trim($libelle_voie),
            'column_8'  => trim($filler1),
            'column_9'  => trim($type_commune),
            'column_10' => trim($filler2),
            'column_11' => trim($caractere_rur),
            'column_12' => trim($filler3),
            'column_13' => trim($caractere_voie),
            'column_14' => trim($caractere_population),
            'column_15' => trim($filler4),
            'column_16' => trim($population_a_part),
            'column_17' => trim($population_fictive),
            'column_18' => trim($caractere_annulation),
            'column_19' => trim($date_annulation),
            'column_20' => trim($date_creation_article),
            'column_21' => trim($filler5),
            'column_22' => trim($code_identifiant_majic_voie),
            'column_23' => trim($type_voie),
            'column_24' => trim($caractere_lieu_dit),
            'column_25' => trim($filler6),
            'column_26' => trim($complement_voie),
            'column_27' => trim($filler7),
        ];
        // echo "[VOIE LENGTH]: " . strlen(implode("", $line_construct)) . "\n";
        // echo "[VOIE LENGTH]LINE: " . strlen($line) . "\n";
        // var_dump($line_construct);
    }

    $connexion->table('fantoire_file')->insert($lineConstruct);
    $index++;
}

function identifyLineType($columnValue): array
{
    $isLineType = [
        'isCtrProd' => false,
        'isDepartement' => false,
        'isCommune' => false,
        'isVoie' => false,
    ];
    $dataLength = strlen($columnValue);

    switch ($dataLength) {
        case 0:
            $isLineType['isCtrProd'] = true;
            break;
        case 0 < $dataLength && $dataLength <= 3:
            $isLineType['isDepartement'] = true;
            break;
        case 3 < $dataLength && $dataLength <= 6:
            $isLineType['isCommune'] = true;
            break;
        case 6 < $dataLength:
            $isLineType['isVoie'] = true;
            break;
        default:
            break;
    }

    return $isLineType;
}

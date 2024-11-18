<?php

namespace Amine\Arcmd\Resources\Entities\Abstractions;

use Amine\Arcmd\Resources\Entities\Exceptions\UndefinedProperty;
use Amine\Arcmd\Resources\Entities\Helpers\EntityHelper;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use DateTimeImmutable;
use ReflectionClass;
use TypeError;

abstract class EntityAbstraction
{
    protected const REFERENCED_TABLE_NAME = 'referenced_table_name';
    protected const COLUMN_NAME = 'column_name';

    private const LABEL_TYPE_BOOL = 'bool';
    private const LABEL_TYPE_STRING = 'string';
    private const LABEL_TYPE_ARRAY = 'array';
    private const LABEL_TYPE_INT = 'int';
    private const LABEL_TYPE_FLOAT = 'float';
    private const LABEL_TYPE_DATETIMEIMMUTABLE = 'DateTimeImmutable';

    /**
     * Entity constructor.
     * @param array $entityData
     */
    public function __construct(array $entityData = [])
    {
        if (!empty($entityData)) {
            $this->initEntity($entityData);
        }
    }

    /**
     * Entity setter. Used in PDO fetch modes to map properties with their values in the right type.
     * @param $name
     * @param $value
     * @throws UndefinedProperty
     */
    public function __set($name, $value)
    {
        $reflection = new ReflectionClass($this);

        $methodName = EntityHelper::snakeToCamelCase($name, true);
        $getMethod = 'get' . $methodName;
        $isMethod = 'is' . $methodName;
        $setMethod = 'set' . $methodName;

        if ($reflection->hasMethod($getMethod)) {
            $methodType = $reflection->getMethod($getMethod)->getReturnType()->getName();
        } elseif ($reflection->hasMethod($isMethod)) {
            $methodType = $reflection->getMethod($isMethod)->getReturnType()->getName();
        } else {
            $name = EntityHelper::snakeToCamelCase($name, false);
            $message = sprintf(UndefinedProperty::DEFAULT_MESSAGE, $name);
            throw new UndefinedProperty(__METHOD__, $message);
        }

        if ($reflection->hasMethod($setMethod)) {
            $value = $this->automatedValueCastAndSet($methodType, $value);
            $this->setMethod($setMethod, $value);
        }
    }

    /**
     * Used when we have the entity constructor is called manually
     * @param array $entityData
     */
    public function initEntity(array $entityData): void
    {
        foreach ($entityData as $key => $value) {
            $setMethod = 'set' . EntityHelper::snakeToCamelCase($key, true);
            $this->setMethod($setMethod, $value);
        }
    }

    /**
     * @param string $methodType
     * @param mixed  $value
     * @return array|bool|DateTimeImmutable|false|float|int|string|null
     */
    private function automatedValueCastAndSet(
        string $methodType,
        mixed  $value
    ): float|DateTimeImmutable|int|bool|array|string|null
    {
        return match ($methodType) {
            self::LABEL_TYPE_BOOL => ($value) ? (bool)$value : null,
            self::LABEL_TYPE_ARRAY => ($value) ? (array)$value : null,
            self::LABEL_TYPE_INT => ($value) ? (int)$value : null,
            self::LABEL_TYPE_FLOAT => ($value) ? (float)$value : null,
            self::LABEL_TYPE_DATETIMEIMMUTABLE => (
            $value
            ) ? DateTimeImmutable::createFromFormat(
                DATE_W3C,
                date(DATE_W3C, strtotime($value))
            ) : null,
            default => ($value) ? (string)$value : null,
        };
    }

    /**
     * Applies a set method after its existence check and cast of its value to the right type.
     * @param string $setMethod
     * @param mixed  $value
     */
    private function setMethod(string $setMethod, mixed $value): void
    {
        try {
            $this->{$setMethod}($value);
        } catch (TypeError $error) {
            echo TypeError::class . ' : ' . $error->getMessage();
        } catch (InvalidArgument $exception) {
            echo InvalidArgument::class . ' : ' . $exception->getMessage();
        }
    }

}

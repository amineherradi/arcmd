<?php

namespace Amine\Arcmd\Resources\Entities;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class SfpPackage extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = '_sfp_package';
    const PRIMARY_KEY  = 'id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_BUNDLE = 'bundle';
    const LABEL_ID = 'id';
    const LABEL_PACKAGE = 'package';

    /** @var string $bundle */
    private string $bundle;

    /** @var int $id */
    private int $id;

    /** @var string $package */
    private string $package;


    /**
     * @param string $bundle
     * @return SfpPackage
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setBundle(string $bundle): SfpPackage
    {
        $this->bundle = $bundle;
        return $this;
    }

    /** @return string */
    public function getBundle(): string
    {
        return $this->bundle;
    }

    /**
     * @param int $id
     * @return SfpPackage
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setId(int $id): SfpPackage
    {
        $this->id = $id;
        return $this;
    }

    /** @return int */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param string $package
     * @return SfpPackage
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setPackage(string $package): SfpPackage
    {
        $this->package = $package;
        return $this;
    }

    /** @return string */
    public function getPackage(): string
    {
        return $this->package;
    }
}

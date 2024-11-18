<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoImei extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_imei';
    const PRIMARY_KEY  = 'aboracco_imei_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_ABORACCO_IMEI_ID = 'aboracco_imei_id';
    const LABEL_DATE_CREATION = 'date_creation';
    const LABEL_IMEI1 = 'imei1';
    const LABEL_IMEI2 = 'imei2';

    /** @var int $aboraccoImeiId */
    private int $aboraccoImeiId;

    /** @var DateTime $dateCreation */
    private DateTime $dateCreation;

    /** @var string $imei1 */
    private string $imei1;

    /** @var string $imei2 */
    private string $imei2;


    /**
     * @param int $aboraccoImeiId
     * @return AboraccoImei
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoImeiId(int $aboraccoImeiId): AboraccoImei
    {
        $this->aboraccoImeiId = $aboraccoImeiId;
        return $this;
    }

    /** @return int */
    public function getAboraccoImeiId(): int
    {
        return $this->aboraccoImeiId;
    }

    /**
     * @param DateTime $dateCreation
     * @return AboraccoImei
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDateCreation(DateTime $dateCreation): AboraccoImei
    {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /** @return DateTime */
    public function getDateCreation(): DateTime
    {
        return $this->dateCreation;
    }

    /**
     * @param string $imei1
     * @return AboraccoImei
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setImei1(string $imei1): AboraccoImei
    {
        $this->imei1 = $imei1;
        return $this;
    }

    /** @return string */
    public function getImei1(): string
    {
        return $this->imei1;
    }

    /**
     * @param string $imei2
     * @return AboraccoImei
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setImei2(string $imei2): AboraccoImei
    {
        $this->imei2 = $imei2;
        return $this;
    }

    /** @return string */
    public function getImei2(): string
    {
        return $this->imei2;
    }
}

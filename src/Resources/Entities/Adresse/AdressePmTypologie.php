<?php

namespace Amine\Arcmd\Resources\Entities\Adresse;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AdressePmTypologie extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'adresse_pm_typologie';
    const PRIMARY_KEY  = 'adresse_pm_typologie_id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'pm',
            self::COLUMN_NAME => 'pm_id',
        ],
    ];

    const LABEL_ADRESSE_ID = 'adresse_id';
    const LABEL_ADRESSE_PM_TYPOLOGIE_ID = 'adresse_pm_typologie_id';
    const LABEL_PM_ID = 'pm_id';

    /** @var int $adresseId */
    private int $adresseId;

    /** @var int $adressePmTypologieId */
    private int $adressePmTypologieId;

    /** @var int $pmId */
    private int $pmId;


    /**
     * @param int $adresseId
     * @return AdressePmTypologie
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseId(int $adresseId): AdressePmTypologie
    {
        $this->adresseId = $adresseId;
        return $this;
    }

    /** @return int */
    public function getAdresseId(): int
    {
        return $this->adresseId;
    }

    /**
     * @param int $adressePmTypologieId
     * @return AdressePmTypologie
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdressePmTypologieId(int $adressePmTypologieId): AdressePmTypologie
    {
        $this->adressePmTypologieId = $adressePmTypologieId;
        return $this;
    }

    /** @return int */
    public function getAdressePmTypologieId(): int
    {
        return $this->adressePmTypologieId;
    }

    /**
     * @param int $pmId
     * @return AdressePmTypologie
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setPmId(int $pmId): AdressePmTypologie
    {
        $this->pmId = $pmId;
        return $this;
    }

    /** @return int */
    public function getPmId(): int
    {
        return $this->pmId;
    }
}

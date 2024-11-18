<?php

namespace Amine\Arcmd\Resources\Entities\Adresse;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AdresseTypologie extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'adresse_typologie';
    const PRIMARY_KEY  = 'adresse_typologie_id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'typologie',
            self::COLUMN_NAME => 'typologie_id',
        ],
    ];

    const LABEL_ADRESSE_ID = 'adresse_id';
    const LABEL_ADRESSE_TYPOLOGIE_ID = 'adresse_typologie_id';
    const LABEL_DATE_CALCUL = 'date_calcul';
    const LABEL_NUM_LR = 'num_lr';
    const LABEL_TYPOLOGIE_ID = 'typologie_id';

    /** @var int $adresseId */
    private int $adresseId;

    /** @var int $adresseTypologieId */
    private int $adresseTypologieId;

    /** @var DateTime $dateCalcul */
    private DateTime $dateCalcul;

    /** @var int $numLr */
    private int $numLr;

    /** @var int $typologieId */
    private int $typologieId;


    /**
     * @param int $adresseId
     * @return AdresseTypologie
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseId(int $adresseId): AdresseTypologie
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
     * @param int $adresseTypologieId
     * @return AdresseTypologie
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseTypologieId(int $adresseTypologieId): AdresseTypologie
    {
        $this->adresseTypologieId = $adresseTypologieId;
        return $this;
    }

    /** @return int */
    public function getAdresseTypologieId(): int
    {
        return $this->adresseTypologieId;
    }

    /**
     * @param DateTime $dateCalcul
     * @return AdresseTypologie
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDateCalcul(DateTime $dateCalcul): AdresseTypologie
    {
        $this->dateCalcul = $dateCalcul;
        return $this;
    }

    /** @return DateTime */
    public function getDateCalcul(): DateTime
    {
        return $this->dateCalcul;
    }

    /**
     * @param int $numLr
     * @return AdresseTypologie
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNumLr(int $numLr): AdresseTypologie
    {
        $this->numLr = $numLr;
        return $this;
    }

    /** @return int */
    public function getNumLr(): int
    {
        return $this->numLr;
    }

    /**
     * @param int $typologieId
     * @return AdresseTypologie
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setTypologieId(int $typologieId): AdresseTypologie
    {
        $this->typologieId = $typologieId;
        return $this;
    }

    /** @return int */
    public function getTypologieId(): int
    {
        return $this->typologieId;
    }
}

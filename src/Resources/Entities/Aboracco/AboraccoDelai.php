<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoDelai extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_delai';
    const PRIMARY_KEY  = 'id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'aboracco_recap',
            self::COLUMN_NAME => 'reponse_id',
        ],
    ];

    const LABEL_C_DATE = 'c_date';
    const LABEL_DELAI_MOYEN = 'delai_moyen';
    const LABEL_ID = 'id';
    const LABEL_NB_CAS_RESOLU = 'nb_cas_resolu';
    const LABEL_NB_CAS_TOTAL = 'nb_cas_total';
    const LABEL_POURCENTAGE_RESOLUTION = 'pourcentage_resolution';
    const LABEL_REPONSE_ID = 'reponse_id';

    /** @var DateTime $cDate */
    private DateTime $cDate;

    /** @var string $delaiMoyen */
    private string $delaiMoyen;

    /** @var int $id */
    private int $id;

    /** @var int $nbCasResolu */
    private int $nbCasResolu;

    /** @var int $nbCasTotal */
    private int $nbCasTotal;

    /** @var string $pourcentageResolution */
    private string $pourcentageResolution;

    /** @var int $reponseId */
    private int $reponseId;


    /**
     * @param DateTime $cDate
     * @return AboraccoDelai
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCDate(DateTime $cDate): AboraccoDelai
    {
        $this->cDate = $cDate;
        return $this;
    }

    /** @return DateTime */
    public function getCDate(): DateTime
    {
        return $this->cDate;
    }

    /**
     * @param string $delaiMoyen
     * @return AboraccoDelai
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDelaiMoyen(string $delaiMoyen): AboraccoDelai
    {
        $this->delaiMoyen = $delaiMoyen;
        return $this;
    }

    /** @return string */
    public function getDelaiMoyen(): string
    {
        return $this->delaiMoyen;
    }

    /**
     * @param int $id
     * @return AboraccoDelai
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setId(int $id): AboraccoDelai
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
     * @param int $nbCasResolu
     * @return AboraccoDelai
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNbCasResolu(int $nbCasResolu): AboraccoDelai
    {
        $this->nbCasResolu = $nbCasResolu;
        return $this;
    }

    /** @return int */
    public function getNbCasResolu(): int
    {
        return $this->nbCasResolu;
    }

    /**
     * @param int $nbCasTotal
     * @return AboraccoDelai
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNbCasTotal(int $nbCasTotal): AboraccoDelai
    {
        $this->nbCasTotal = $nbCasTotal;
        return $this;
    }

    /** @return int */
    public function getNbCasTotal(): int
    {
        return $this->nbCasTotal;
    }

    /**
     * @param string $pourcentageResolution
     * @return AboraccoDelai
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setPourcentageResolution(string $pourcentageResolution): AboraccoDelai
    {
        $this->pourcentageResolution = $pourcentageResolution;
        return $this;
    }

    /** @return string */
    public function getPourcentageResolution(): string
    {
        return $this->pourcentageResolution;
    }

    /**
     * @param int $reponseId
     * @return AboraccoDelai
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setReponseId(int $reponseId): AboraccoDelai
    {
        $this->reponseId = $reponseId;
        return $this;
    }

    /** @return int */
    public function getReponseId(): int
    {
        return $this->reponseId;
    }
}

<?php

namespace Amine\Arcmd\Resources\Entities\Adresse;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AdresseLignesFt extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'adresse_lignes_ft';
    const FOREIGN_KEYS = [
    ];

    const LABEL_ADRESSE_ID = 'adresse_id';
    const LABEL_ADRESSE_NUMSUFF = 'adresse_numsuff';
    const LABEL_CODE_FANTOIR = 'code_fantoir';
    const LABEL_CODE_INSEE = 'code_insee';
    const LABEL_DATE_INFO = 'date_info';
    const LABEL_HEXACLE = 'hexacle';
    const LABEL_NBL_ACTIVES = 'nbl_actives';
    const LABEL_NBL_INACTIVES = 'nbl_inactives';
    const LABEL_NB_PRECAB = 'nb_precab';
    const LABEL_TMP_DATE_INFO = 'tmp_date_info';

    /** @var int $adresseId */
    private int $adresseId;

    /** @var string $adresseNumsuff */
    private string $adresseNumsuff;

    /** @var string $codeFantoir */
    private string $codeFantoir;

    /** @var string $codeInsee */
    private string $codeInsee;

    /** @var string $dateInfo */
    private string $dateInfo;

    /** @var string $hexacle */
    private string $hexacle;

    /** @var int $nblActives */
    private int $nblActives;

    /** @var int $nblInactives */
    private int $nblInactives;

    /** @var int $nbPrecab */
    private int $nbPrecab;

    /** @var int $tmpDateInfo */
    private int $tmpDateInfo;


    /**
     * @param int $adresseId
     * @return AdresseLignesFt
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseId(int $adresseId): AdresseLignesFt
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
     * @param string $adresseNumsuff
     * @return AdresseLignesFt
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseNumsuff(string $adresseNumsuff): AdresseLignesFt
    {
        $this->adresseNumsuff = $adresseNumsuff;
        return $this;
    }

    /** @return string */
    public function getAdresseNumsuff(): string
    {
        return $this->adresseNumsuff;
    }

    /**
     * @param string $codeFantoir
     * @return AdresseLignesFt
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCodeFantoir(string $codeFantoir): AdresseLignesFt
    {
        $this->codeFantoir = $codeFantoir;
        return $this;
    }

    /** @return string */
    public function getCodeFantoir(): string
    {
        return $this->codeFantoir;
    }

    /**
     * @param string $codeInsee
     * @return AdresseLignesFt
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCodeInsee(string $codeInsee): AdresseLignesFt
    {
        $this->codeInsee = $codeInsee;
        return $this;
    }

    /** @return string */
    public function getCodeInsee(): string
    {
        return $this->codeInsee;
    }

    /**
     * @param string $dateInfo
     * @return AdresseLignesFt
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDateInfo(string $dateInfo): AdresseLignesFt
    {
        $this->dateInfo = $dateInfo;
        return $this;
    }

    /** @return string */
    public function getDateInfo(): string
    {
        return $this->dateInfo;
    }

    /**
     * @param string $hexacle
     * @return AdresseLignesFt
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setHexacle(string $hexacle): AdresseLignesFt
    {
        $this->hexacle = $hexacle;
        return $this;
    }

    /** @return string */
    public function getHexacle(): string
    {
        return $this->hexacle;
    }

    /**
     * @param int $nblActives
     * @return AdresseLignesFt
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNblActives(int $nblActives): AdresseLignesFt
    {
        $this->nblActives = $nblActives;
        return $this;
    }

    /** @return int */
    public function getNblActives(): int
    {
        return $this->nblActives;
    }

    /**
     * @param int $nblInactives
     * @return AdresseLignesFt
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNblInactives(int $nblInactives): AdresseLignesFt
    {
        $this->nblInactives = $nblInactives;
        return $this;
    }

    /** @return int */
    public function getNblInactives(): int
    {
        return $this->nblInactives;
    }

    /**
     * @param int $nbPrecab
     * @return AdresseLignesFt
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNbPrecab(int $nbPrecab): AdresseLignesFt
    {
        $this->nbPrecab = $nbPrecab;
        return $this;
    }

    /** @return int */
    public function getNbPrecab(): int
    {
        return $this->nbPrecab;
    }

    /**
     * @param int $tmpDateInfo
     * @return AdresseLignesFt
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setTmpDateInfo(int $tmpDateInfo): AdresseLignesFt
    {
        $this->tmpDateInfo = $tmpDateInfo;
        return $this;
    }

    /** @return int */
    public function getTmpDateInfo(): int
    {
        return $this->tmpDateInfo;
    }
}

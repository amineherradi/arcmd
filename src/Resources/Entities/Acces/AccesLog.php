<?php

namespace Amine\Arcmd\Resources\Entities\Acces;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AccesLog extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'acces_log';
    const PRIMARY_KEY  = 'log_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_ACCES_ID = 'acces_id';
    const LABEL_ADRESSE_ID_SOURCE = 'adresse_id_source';
    const LABEL_DATE_CREATION = 'date_creation';
    const LABEL_DATE_MODIFICATION = 'date_modification';
    const LABEL_LOG_ID = 'log_id';
    const LABEL_TYPE_ID = 'type_id';
    const LABEL_USERS_ID = 'users_id';
    const LABEL_VALEUR = 'valeur';

    /** @var int $accesId */
    private int $accesId;

    /** @var int $adresseIdSource */
    private int $adresseIdSource;

    /** @var DateTime $dateCreation */
    private DateTime $dateCreation;

    /** @var DateTime $dateModification */
    private DateTime $dateModification;

    /** @var int $logId */
    private int $logId;

    /** @var int $typeId */
    private int $typeId;

    /** @var int $usersId */
    private int $usersId;

    /** @var string $valeur */
    private string $valeur;


    /**
     * @param int $accesId
     * @return AccesLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAccesId(int $accesId): AccesLog
    {
        $this->accesId = $accesId;
        return $this;
    }

    /** @return int */
    public function getAccesId(): int
    {
        return $this->accesId;
    }

    /**
     * @param int $adresseIdSource
     * @return AccesLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseIdSource(int $adresseIdSource): AccesLog
    {
        $this->adresseIdSource = $adresseIdSource;
        return $this;
    }

    /** @return int */
    public function getAdresseIdSource(): int
    {
        return $this->adresseIdSource;
    }

    /**
     * @param DateTime $dateCreation
     * @return AccesLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDateCreation(DateTime $dateCreation): AccesLog
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
     * @param DateTime $dateModification
     * @return AccesLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDateModification(DateTime $dateModification): AccesLog
    {
        $this->dateModification = $dateModification;
        return $this;
    }

    /** @return DateTime */
    public function getDateModification(): DateTime
    {
        return $this->dateModification;
    }

    /**
     * @param int $logId
     * @return AccesLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setLogId(int $logId): AccesLog
    {
        $this->logId = $logId;
        return $this;
    }

    /** @return int */
    public function getLogId(): int
    {
        return $this->logId;
    }

    /**
     * @param int $typeId
     * @return AccesLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setTypeId(int $typeId): AccesLog
    {
        $this->typeId = $typeId;
        return $this;
    }

    /** @return int */
    public function getTypeId(): int
    {
        return $this->typeId;
    }

    /**
     * @param int $usersId
     * @return AccesLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setUsersId(int $usersId): AccesLog
    {
        $this->usersId = $usersId;
        return $this;
    }

    /** @return int */
    public function getUsersId(): int
    {
        return $this->usersId;
    }

    /**
     * @param string $valeur
     * @return AccesLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setValeur(string $valeur): AccesLog
    {
        $this->valeur = $valeur;
        return $this;
    }

    /** @return string */
    public function getValeur(): string
    {
        return $this->valeur;
    }
}

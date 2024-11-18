<?php

namespace Amine\Arcmd\Resources\Entities\Adresse;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AdresseOperateurLog extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'adresse_operateur_log';
    const PRIMARY_KEY  = 'log_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_ADRESSE_ID = 'adresse_id';
    const LABEL_ADRESSE_OPERATEUR_ID = 'adresse_operateur_id';
    const LABEL_DATE_CREATION = 'date_creation';
    const LABEL_DATE_MODIFICATION = 'date_modification';
    const LABEL_LOG_ID = 'log_id';
    const LABEL_OPERATEUR_ID = 'operateur_id';
    const LABEL_PTO_POSITION = 'pto_position';
    const LABEL_USERS_ID = 'users_id';

    /** @var int $adresseId */
    private int $adresseId;

    /** @var int $adresseOperateurId */
    private int $adresseOperateurId;

    /** @var DateTime $dateCreation */
    private DateTime $dateCreation;

    /** @var DateTime $dateModification */
    private DateTime $dateModification;

    /** @var int $logId */
    private int $logId;

    /** @var int $operateurId */
    private int $operateurId;

    /** @var int $ptoPosition */
    private int $ptoPosition;

    /** @var int $usersId */
    private int $usersId;


    /**
     * @param int $adresseId
     * @return AdresseOperateurLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseId(int $adresseId): AdresseOperateurLog
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
     * @param int $adresseOperateurId
     * @return AdresseOperateurLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseOperateurId(int $adresseOperateurId): AdresseOperateurLog
    {
        $this->adresseOperateurId = $adresseOperateurId;
        return $this;
    }

    /** @return int */
    public function getAdresseOperateurId(): int
    {
        return $this->adresseOperateurId;
    }

    /**
     * @param DateTime $dateCreation
     * @return AdresseOperateurLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDateCreation(DateTime $dateCreation): AdresseOperateurLog
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
     * @return AdresseOperateurLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDateModification(DateTime $dateModification): AdresseOperateurLog
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
     * @return AdresseOperateurLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setLogId(int $logId): AdresseOperateurLog
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
     * @param int $operateurId
     * @return AdresseOperateurLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setOperateurId(int $operateurId): AdresseOperateurLog
    {
        $this->operateurId = $operateurId;
        return $this;
    }

    /** @return int */
    public function getOperateurId(): int
    {
        return $this->operateurId;
    }

    /**
     * @param int $ptoPosition
     * @return AdresseOperateurLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setPtoPosition(int $ptoPosition): AdresseOperateurLog
    {
        $this->ptoPosition = $ptoPosition;
        return $this;
    }

    /** @return int */
    public function getPtoPosition(): int
    {
        return $this->ptoPosition;
    }

    /**
     * @param int $usersId
     * @return AdresseOperateurLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setUsersId(int $usersId): AdresseOperateurLog
    {
        $this->usersId = $usersId;
        return $this;
    }

    /** @return int */
    public function getUsersId(): int
    {
        return $this->usersId;
    }
}

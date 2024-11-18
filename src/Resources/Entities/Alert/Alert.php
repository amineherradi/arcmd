<?php

namespace Amine\Arcmd\Resources\Entities\Alert;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class Alert extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'alert';
    const PRIMARY_KEY  = 'alert_id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'alertparam',
            self::COLUMN_NAME => 'alert_param_id',
        ],
    ];

    const LABEL_ALERT_ID = 'alert_id';
    const LABEL_ALERT_PARAM_ID = 'alert_param_id';
    const LABEL_CMD_ID = 'cmd_id';
    const LABEL_DATE_CREATION = 'date_creation';
    const LABEL_ETAT_ID = 'etat_id';
    const LABEL_JSON_DATA = 'json_data';
    const LABEL_NB_RELANCES = 'nb_relances';
    const LABEL_OBJECT_ID = 'object_id';
    const LABEL_OBJECT_NAME = 'object_name';
    const LABEL_RESOLVED = 'resolved';
    const LABEL_RESOLVED_DATE = 'resolved_date';
    const LABEL_SEND_MAIL = 'send_mail';

    /** @var int $alertId */
    private int $alertId;

    /** @var int $alertParamId */
    private int $alertParamId;

    /** @var string $cmdId */
    private string $cmdId;

    /** @var DateTime $dateCreation */
    private DateTime $dateCreation;

    /** @var int $etatId */
    private int $etatId;

    /** @var string $jsonData */
    private string $jsonData;

    /** @var int $nbRelances */
    private int $nbRelances;

    /** @var int $objectId */
    private int $objectId;

    /** @var string $objectName */
    private string $objectName;

    /** @var int $resolved */
    private int $resolved;

    /** @var DateTime $resolvedDate */
    private DateTime $resolvedDate;

    /** @var int $sendMail */
    private int $sendMail;


    /**
     * @param int $alertId
     * @return Alert
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAlertId(int $alertId): Alert
    {
        $this->alertId = $alertId;
        return $this;
    }

    /** @return int */
    public function getAlertId(): int
    {
        return $this->alertId;
    }

    /**
     * @param int $alertParamId
     * @return Alert
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAlertParamId(int $alertParamId): Alert
    {
        $this->alertParamId = $alertParamId;
        return $this;
    }

    /** @return int */
    public function getAlertParamId(): int
    {
        return $this->alertParamId;
    }

    /**
     * @param string $cmdId
     * @return Alert
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCmdId(string $cmdId): Alert
    {
        $this->cmdId = $cmdId;
        return $this;
    }

    /** @return string */
    public function getCmdId(): string
    {
        return $this->cmdId;
    }

    /**
     * @param DateTime $dateCreation
     * @return Alert
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDateCreation(DateTime $dateCreation): Alert
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
     * @param int $etatId
     * @return Alert
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setEtatId(int $etatId): Alert
    {
        $this->etatId = $etatId;
        return $this;
    }

    /** @return int */
    public function getEtatId(): int
    {
        return $this->etatId;
    }

    /**
     * @param string $jsonData
     * @return Alert
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setJsonData(string $jsonData): Alert
    {
        $this->jsonData = $jsonData;
        return $this;
    }

    /** @return string */
    public function getJsonData(): string
    {
        return $this->jsonData;
    }

    /**
     * @param int $nbRelances
     * @return Alert
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNbRelances(int $nbRelances): Alert
    {
        $this->nbRelances = $nbRelances;
        return $this;
    }

    /** @return int */
    public function getNbRelances(): int
    {
        return $this->nbRelances;
    }

    /**
     * @param int $objectId
     * @return Alert
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setObjectId(int $objectId): Alert
    {
        $this->objectId = $objectId;
        return $this;
    }

    /** @return int */
    public function getObjectId(): int
    {
        return $this->objectId;
    }

    /**
     * @param string $objectName
     * @return Alert
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setObjectName(string $objectName): Alert
    {
        $this->objectName = $objectName;
        return $this;
    }

    /** @return string */
    public function getObjectName(): string
    {
        return $this->objectName;
    }

    /**
     * @param int $resolved
     * @return Alert
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setResolved(int $resolved): Alert
    {
        $this->resolved = $resolved;
        return $this;
    }

    /** @return int */
    public function getResolved(): int
    {
        return $this->resolved;
    }

    /**
     * @param DateTime $resolvedDate
     * @return Alert
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setResolvedDate(DateTime $resolvedDate): Alert
    {
        $this->resolvedDate = $resolvedDate;
        return $this;
    }

    /** @return DateTime */
    public function getResolvedDate(): DateTime
    {
        return $this->resolvedDate;
    }

    /**
     * @param int $sendMail
     * @return Alert
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setSendMail(int $sendMail): Alert
    {
        $this->sendMail = $sendMail;
        return $this;
    }

    /** @return int */
    public function getSendMail(): int
    {
        return $this->sendMail;
    }
}

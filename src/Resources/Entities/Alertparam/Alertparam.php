<?php

namespace Amine\Arcmd\Resources\Entities\Alertparam;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class Alertparam extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'alertparam';
    const PRIMARY_KEY  = 'alert_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_ACTIVATED = 'activated';
    const LABEL_ALERT_CODE = 'alert_code';
    const LABEL_ALERT_ID = 'alert_id';
    const LABEL_BODY = 'body';
    const LABEL_BUS_LOG = 'bus_log';
    const LABEL_DETECTION_ORDER = 'detection_order';
    const LABEL_FROM_ADDR = 'from_addr';
    const LABEL_GROUP_BODY = 'group_body';
    const LABEL_GROUP_CODE = 'group_code';
    const LABEL_GROUP_MASTER = 'group_master';
    const LABEL_GROUP_SUBJECT = 'group_subject';
    const LABEL_OBJECT_NAME = 'object_name';
    const LABEL_PROCESS = 'process';
    const LABEL_SUBJECT = 'subject';

    /** @var int $activated */
    private int $activated;

    /** @var string $alertCode */
    private string $alertCode;

    /** @var int $alertId */
    private int $alertId;

    /** @var string $body */
    private string $body;

    /** @var int $busLog */
    private int $busLog;

    /** @var int $detectionOrder */
    private int $detectionOrder;

    /** @var string $fromAddr */
    private string $fromAddr;

    /** @var string $groupBody */
    private string $groupBody;

    /** @var string $groupCode */
    private string $groupCode;

    /** @var int $groupMaster */
    private int $groupMaster;

    /** @var string $groupSubject */
    private string $groupSubject;

    /** @var string $objectName */
    private string $objectName;

    /** @var string $process */
    private string $process;

    /** @var string $subject */
    private string $subject;


    /**
     * @param int $activated
     * @return Alertparam
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setActivated(int $activated): Alertparam
    {
        $this->activated = $activated;
        return $this;
    }

    /** @return int */
    public function getActivated(): int
    {
        return $this->activated;
    }

    /**
     * @param string $alertCode
     * @return Alertparam
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAlertCode(string $alertCode): Alertparam
    {
        $this->alertCode = $alertCode;
        return $this;
    }

    /** @return string */
    public function getAlertCode(): string
    {
        return $this->alertCode;
    }

    /**
     * @param int $alertId
     * @return Alertparam
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAlertId(int $alertId): Alertparam
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
     * @param string $body
     * @return Alertparam
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setBody(string $body): Alertparam
    {
        $this->body = $body;
        return $this;
    }

    /** @return string */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @param int $busLog
     * @return Alertparam
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setBusLog(int $busLog): Alertparam
    {
        $this->busLog = $busLog;
        return $this;
    }

    /** @return int */
    public function getBusLog(): int
    {
        return $this->busLog;
    }

    /**
     * @param int $detectionOrder
     * @return Alertparam
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDetectionOrder(int $detectionOrder): Alertparam
    {
        $this->detectionOrder = $detectionOrder;
        return $this;
    }

    /** @return int */
    public function getDetectionOrder(): int
    {
        return $this->detectionOrder;
    }

    /**
     * @param string $fromAddr
     * @return Alertparam
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setFromAddr(string $fromAddr): Alertparam
    {
        $this->fromAddr = $fromAddr;
        return $this;
    }

    /** @return string */
    public function getFromAddr(): string
    {
        return $this->fromAddr;
    }

    /**
     * @param string $groupBody
     * @return Alertparam
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setGroupBody(string $groupBody): Alertparam
    {
        $this->groupBody = $groupBody;
        return $this;
    }

    /** @return string */
    public function getGroupBody(): string
    {
        return $this->groupBody;
    }

    /**
     * @param string $groupCode
     * @return Alertparam
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setGroupCode(string $groupCode): Alertparam
    {
        $this->groupCode = $groupCode;
        return $this;
    }

    /** @return string */
    public function getGroupCode(): string
    {
        return $this->groupCode;
    }

    /**
     * @param int $groupMaster
     * @return Alertparam
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setGroupMaster(int $groupMaster): Alertparam
    {
        $this->groupMaster = $groupMaster;
        return $this;
    }

    /** @return int */
    public function getGroupMaster(): int
    {
        return $this->groupMaster;
    }

    /**
     * @param string $groupSubject
     * @return Alertparam
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setGroupSubject(string $groupSubject): Alertparam
    {
        $this->groupSubject = $groupSubject;
        return $this;
    }

    /** @return string */
    public function getGroupSubject(): string
    {
        return $this->groupSubject;
    }

    /**
     * @param string $objectName
     * @return Alertparam
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setObjectName(string $objectName): Alertparam
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
     * @param string $process
     * @return Alertparam
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setProcess(string $process): Alertparam
    {
        $this->process = $process;
        return $this;
    }

    /** @return string */
    public function getProcess(): string
    {
        return $this->process;
    }

    /**
     * @param string $subject
     * @return Alertparam
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setSubject(string $subject): Alertparam
    {
        $this->subject = $subject;
        return $this;
    }

    /** @return string */
    public function getSubject(): string
    {
        return $this->subject;
    }
}

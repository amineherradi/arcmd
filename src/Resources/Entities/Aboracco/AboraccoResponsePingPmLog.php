<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoResponsePingPmLog extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_response_ping_pm_log';
    const PRIMARY_KEY  = 'id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'intervention',
            self::COLUMN_NAME => 'intervention_id',
        ],
        [
            self::REFERENCED_TABLE_NAME => 'pm',
            self::COLUMN_NAME => 'pm_id',
        ],
    ];

    const LABEL_CREATED_AT = 'created_at';
    const LABEL_ID = 'id';
    const LABEL_INTERVENTION_ID = 'intervention_id';
    const LABEL_LOG_PING_AFTER = 'log_ping_after';
    const LABEL_LOG_PING_BEFORE = 'log_ping_before';
    const LABEL_PM_ID = 'pm_id';
    const LABEL_STATUS_CODE_AFTER = 'status_code_after';
    const LABEL_STATUS_CODE_BEFORE = 'status_code_before';

    /** @var DateTime $createdAt */
    private DateTime $createdAt;

    /** @var int $id */
    private int $id;

    /** @var int $interventionId */
    private int $interventionId;

    /** @var string $logPingAfter */
    private string $logPingAfter;

    /** @var string $logPingBefore */
    private string $logPingBefore;

    /** @var int $pmId */
    private int $pmId;

    /** @var int $statusCodeAfter */
    private int $statusCodeAfter;

    /** @var int $statusCodeBefore */
    private int $statusCodeBefore;


    /**
     * @param DateTime $createdAt
     * @return AboraccoResponsePingPmLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCreatedAt(DateTime $createdAt): AboraccoResponsePingPmLog
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /** @return DateTime */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param int $id
     * @return AboraccoResponsePingPmLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setId(int $id): AboraccoResponsePingPmLog
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
     * @param int $interventionId
     * @return AboraccoResponsePingPmLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setInterventionId(int $interventionId): AboraccoResponsePingPmLog
    {
        $this->interventionId = $interventionId;
        return $this;
    }

    /** @return int */
    public function getInterventionId(): int
    {
        return $this->interventionId;
    }

    /**
     * @param string $logPingAfter
     * @return AboraccoResponsePingPmLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setLogPingAfter(string $logPingAfter): AboraccoResponsePingPmLog
    {
        $this->logPingAfter = $logPingAfter;
        return $this;
    }

    /** @return string */
    public function getLogPingAfter(): string
    {
        return $this->logPingAfter;
    }

    /**
     * @param string $logPingBefore
     * @return AboraccoResponsePingPmLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setLogPingBefore(string $logPingBefore): AboraccoResponsePingPmLog
    {
        $this->logPingBefore = $logPingBefore;
        return $this;
    }

    /** @return string */
    public function getLogPingBefore(): string
    {
        return $this->logPingBefore;
    }

    /**
     * @param int $pmId
     * @return AboraccoResponsePingPmLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setPmId(int $pmId): AboraccoResponsePingPmLog
    {
        $this->pmId = $pmId;
        return $this;
    }

    /** @return int */
    public function getPmId(): int
    {
        return $this->pmId;
    }

    /**
     * @param int $statusCodeAfter
     * @return AboraccoResponsePingPmLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setStatusCodeAfter(int $statusCodeAfter): AboraccoResponsePingPmLog
    {
        $this->statusCodeAfter = $statusCodeAfter;
        return $this;
    }

    /** @return int */
    public function getStatusCodeAfter(): int
    {
        return $this->statusCodeAfter;
    }

    /**
     * @param int $statusCodeBefore
     * @return AboraccoResponsePingPmLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setStatusCodeBefore(int $statusCodeBefore): AboraccoResponsePingPmLog
    {
        $this->statusCodeBefore = $statusCodeBefore;
        return $this;
    }

    /** @return int */
    public function getStatusCodeBefore(): int
    {
        return $this->statusCodeBefore;
    }
}

<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoResponsePingPm extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_response_ping_pm';
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
    const LABEL_DIFF_DETAIL = 'diff_detail';
    const LABEL_ERROR_AFTER = 'error_after';
    const LABEL_ERROR_AFTER_MESSAGE = 'error_after_message';
    const LABEL_ERROR_BEFORE = 'error_before';
    const LABEL_ERROR_BEFORE_MESSAGE = 'error_before_message';
    const LABEL_HAS_DIFF = 'has_diff';
    const LABEL_ID = 'id';
    const LABEL_INTERVENTION_ID = 'intervention_id';
    const LABEL_NB_DIFF = 'nb_diff';
    const LABEL_PING_AFTER = 'ping_after';
    const LABEL_PING_BEFORE = 'ping_before';
    const LABEL_PM = 'pm';
    const LABEL_PM_ID = 'pm_id';
    const LABEL_UPDATED_AT = 'updated_at';

    /** @var DateTime $createdAt */
    private DateTime $createdAt;

    /** @var string $diffDetail */
    private string $diffDetail;

    /** @var int $errorAfter */
    private int $errorAfter;

    /** @var string $errorAfterMessage */
    private string $errorAfterMessage;

    /** @var int $errorBefore */
    private int $errorBefore;

    /** @var string $errorBeforeMessage */
    private string $errorBeforeMessage;

    /** @var int $hasDiff */
    private int $hasDiff;

    /** @var int $id */
    private int $id;

    /** @var int $interventionId */
    private int $interventionId;

    /** @var int $nbDiff */
    private int $nbDiff;

    /** @var string $pingAfter */
    private string $pingAfter;

    /** @var string $pingBefore */
    private string $pingBefore;

    /** @var string $pm */
    private string $pm;

    /** @var int $pmId */
    private int $pmId;

    /** @var DateTime $updatedAt */
    private DateTime $updatedAt;


    /**
     * @param DateTime $createdAt
     * @return AboraccoResponsePingPm
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCreatedAt(DateTime $createdAt): AboraccoResponsePingPm
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
     * @param string $diffDetail
     * @return AboraccoResponsePingPm
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDiffDetail(string $diffDetail): AboraccoResponsePingPm
    {
        $this->diffDetail = $diffDetail;
        return $this;
    }

    /** @return string */
    public function getDiffDetail(): string
    {
        return $this->diffDetail;
    }

    /**
     * @param int $errorAfter
     * @return AboraccoResponsePingPm
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setErrorAfter(int $errorAfter): AboraccoResponsePingPm
    {
        $this->errorAfter = $errorAfter;
        return $this;
    }

    /** @return int */
    public function getErrorAfter(): int
    {
        return $this->errorAfter;
    }

    /**
     * @param string $errorAfterMessage
     * @return AboraccoResponsePingPm
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setErrorAfterMessage(string $errorAfterMessage): AboraccoResponsePingPm
    {
        $this->errorAfterMessage = $errorAfterMessage;
        return $this;
    }

    /** @return string */
    public function getErrorAfterMessage(): string
    {
        return $this->errorAfterMessage;
    }

    /**
     * @param int $errorBefore
     * @return AboraccoResponsePingPm
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setErrorBefore(int $errorBefore): AboraccoResponsePingPm
    {
        $this->errorBefore = $errorBefore;
        return $this;
    }

    /** @return int */
    public function getErrorBefore(): int
    {
        return $this->errorBefore;
    }

    /**
     * @param string $errorBeforeMessage
     * @return AboraccoResponsePingPm
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setErrorBeforeMessage(string $errorBeforeMessage): AboraccoResponsePingPm
    {
        $this->errorBeforeMessage = $errorBeforeMessage;
        return $this;
    }

    /** @return string */
    public function getErrorBeforeMessage(): string
    {
        return $this->errorBeforeMessage;
    }

    /**
     * @param int $hasDiff
     * @return AboraccoResponsePingPm
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setHasDiff(int $hasDiff): AboraccoResponsePingPm
    {
        $this->hasDiff = $hasDiff;
        return $this;
    }

    /** @return int */
    public function getHasDiff(): int
    {
        return $this->hasDiff;
    }

    /**
     * @param int $id
     * @return AboraccoResponsePingPm
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setId(int $id): AboraccoResponsePingPm
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
     * @return AboraccoResponsePingPm
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setInterventionId(int $interventionId): AboraccoResponsePingPm
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
     * @param int $nbDiff
     * @return AboraccoResponsePingPm
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNbDiff(int $nbDiff): AboraccoResponsePingPm
    {
        $this->nbDiff = $nbDiff;
        return $this;
    }

    /** @return int */
    public function getNbDiff(): int
    {
        return $this->nbDiff;
    }

    /**
     * @param string $pingAfter
     * @return AboraccoResponsePingPm
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setPingAfter(string $pingAfter): AboraccoResponsePingPm
    {
        $this->pingAfter = $pingAfter;
        return $this;
    }

    /** @return string */
    public function getPingAfter(): string
    {
        return $this->pingAfter;
    }

    /**
     * @param string $pingBefore
     * @return AboraccoResponsePingPm
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setPingBefore(string $pingBefore): AboraccoResponsePingPm
    {
        $this->pingBefore = $pingBefore;
        return $this;
    }

    /** @return string */
    public function getPingBefore(): string
    {
        return $this->pingBefore;
    }

    /**
     * @param string $pm
     * @return AboraccoResponsePingPm
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setPm(string $pm): AboraccoResponsePingPm
    {
        $this->pm = $pm;
        return $this;
    }

    /** @return string */
    public function getPm(): string
    {
        return $this->pm;
    }

    /**
     * @param int $pmId
     * @return AboraccoResponsePingPm
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setPmId(int $pmId): AboraccoResponsePingPm
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
     * @param DateTime $updatedAt
     * @return AboraccoResponsePingPm
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setUpdatedAt(DateTime $updatedAt): AboraccoResponsePingPm
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /** @return DateTime */
    public function getUpdatedAt(): DateTime
    {
        return $this->updatedAt;
    }
}

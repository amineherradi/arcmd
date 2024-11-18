<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoResponseAudit extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_response_audit';
    const PRIMARY_KEY  = 'aboracco_response_audit_id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'aboracco_response',
            self::COLUMN_NAME => 'aboracco_response_id',
        ],
    ];

    const LABEL_ABORACCO_RESPONSE_AUDIT_ID = 'aboracco_response_audit_id';
    const LABEL_ABORACCO_RESPONSE_ID = 'aboracco_response_id';
    const LABEL_CURRENT_WEIGHT = 'current_weight';
    const LABEL_FACTURABLE = 'facturable';
    const LABEL_LAST_WEIGHT = 'last_weight';

    /** @var int $aboraccoResponseAuditId */
    private int $aboraccoResponseAuditId;

    /** @var int $aboraccoResponseId */
    private int $aboraccoResponseId;

    /** @var string $currentWeight */
    private string $currentWeight;

    /** @var int $facturable */
    private int $facturable;

    /** @var string $lastWeight */
    private string $lastWeight;


    /**
     * @param int $aboraccoResponseAuditId
     * @return AboraccoResponseAudit
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoResponseAuditId(int $aboraccoResponseAuditId): AboraccoResponseAudit
    {
        $this->aboraccoResponseAuditId = $aboraccoResponseAuditId;
        return $this;
    }

    /** @return int */
    public function getAboraccoResponseAuditId(): int
    {
        return $this->aboraccoResponseAuditId;
    }

    /**
     * @param int $aboraccoResponseId
     * @return AboraccoResponseAudit
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoResponseId(int $aboraccoResponseId): AboraccoResponseAudit
    {
        $this->aboraccoResponseId = $aboraccoResponseId;
        return $this;
    }

    /** @return int */
    public function getAboraccoResponseId(): int
    {
        return $this->aboraccoResponseId;
    }

    /**
     * @param string $currentWeight
     * @return AboraccoResponseAudit
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCurrentWeight(string $currentWeight): AboraccoResponseAudit
    {
        $this->currentWeight = $currentWeight;
        return $this;
    }

    /** @return string */
    public function getCurrentWeight(): string
    {
        return $this->currentWeight;
    }

    /**
     * @param int $facturable
     * @return AboraccoResponseAudit
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setFacturable(int $facturable): AboraccoResponseAudit
    {
        $this->facturable = $facturable;
        return $this;
    }

    /** @return int */
    public function getFacturable(): int
    {
        return $this->facturable;
    }

    /**
     * @param string $lastWeight
     * @return AboraccoResponseAudit
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setLastWeight(string $lastWeight): AboraccoResponseAudit
    {
        $this->lastWeight = $lastWeight;
        return $this;
    }

    /** @return string */
    public function getLastWeight(): string
    {
        return $this->lastWeight;
    }
}

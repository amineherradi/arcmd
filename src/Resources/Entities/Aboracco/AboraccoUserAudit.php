<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoUserAudit extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_user_audit';
    const PRIMARY_KEY  = 'aboracco_user_audit_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_ABORACCO_USER_AUDIT_ID = 'aboracco_user_audit_id';
    const LABEL_KILLI_USER_ID = 'killi_user_id';
    const LABEL_TOTAL_INTER_DEBRIEF = 'total_inter_debrief';
    const LABEL_WEIGHT = 'weight';
    const LABEL_WEIGHT_CURRENT = 'weight_current';
    const LABEL_WEIGHT_LAST = 'weight_last';
    const LABEL_WEIGHT_PING = 'weight_ping';

    /** @var int $aboraccoUserAuditId */
    private int $aboraccoUserAuditId;

    /** @var int $killiUserId */
    private int $killiUserId;

    /** @var int $totalInterDebrief */
    private int $totalInterDebrief;

    /** @var string $weight */
    private string $weight;

    /** @var string $weightCurrent */
    private string $weightCurrent;

    /** @var string $weightLast */
    private string $weightLast;

    /** @var string $weightPing */
    private string $weightPing;


    /**
     * @param int $aboraccoUserAuditId
     * @return AboraccoUserAudit
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoUserAuditId(int $aboraccoUserAuditId): AboraccoUserAudit
    {
        $this->aboraccoUserAuditId = $aboraccoUserAuditId;
        return $this;
    }

    /** @return int */
    public function getAboraccoUserAuditId(): int
    {
        return $this->aboraccoUserAuditId;
    }

    /**
     * @param int $killiUserId
     * @return AboraccoUserAudit
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setKilliUserId(int $killiUserId): AboraccoUserAudit
    {
        $this->killiUserId = $killiUserId;
        return $this;
    }

    /** @return int */
    public function getKilliUserId(): int
    {
        return $this->killiUserId;
    }

    /**
     * @param int $totalInterDebrief
     * @return AboraccoUserAudit
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setTotalInterDebrief(int $totalInterDebrief): AboraccoUserAudit
    {
        $this->totalInterDebrief = $totalInterDebrief;
        return $this;
    }

    /** @return int */
    public function getTotalInterDebrief(): int
    {
        return $this->totalInterDebrief;
    }

    /**
     * @param string $weight
     * @return AboraccoUserAudit
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setWeight(string $weight): AboraccoUserAudit
    {
        $this->weight = $weight;
        return $this;
    }

    /** @return string */
    public function getWeight(): string
    {
        return $this->weight;
    }

    /**
     * @param string $weightCurrent
     * @return AboraccoUserAudit
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setWeightCurrent(string $weightCurrent): AboraccoUserAudit
    {
        $this->weightCurrent = $weightCurrent;
        return $this;
    }

    /** @return string */
    public function getWeightCurrent(): string
    {
        return $this->weightCurrent;
    }

    /**
     * @param string $weightLast
     * @return AboraccoUserAudit
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setWeightLast(string $weightLast): AboraccoUserAudit
    {
        $this->weightLast = $weightLast;
        return $this;
    }

    /** @return string */
    public function getWeightLast(): string
    {
        return $this->weightLast;
    }

    /**
     * @param string $weightPing
     * @return AboraccoUserAudit
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setWeightPing(string $weightPing): AboraccoUserAudit
    {
        $this->weightPing = $weightPing;
        return $this;
    }

    /** @return string */
    public function getWeightPing(): string
    {
        return $this->weightPing;
    }
}

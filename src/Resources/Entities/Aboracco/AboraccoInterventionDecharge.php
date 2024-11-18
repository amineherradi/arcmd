<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoInterventionDecharge extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_intervention_decharge';
    const PRIMARY_KEY  = 'aboracco_intervention_decharge_id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'killi_user',
            self::COLUMN_NAME => 'c_user',
        ],
        [
            self::REFERENCED_TABLE_NAME => 'intervention',
            self::COLUMN_NAME => 'intervention_id',
        ],
    ];

    const LABEL_ABORACCO_INTERVENTION_DECHARGE_ID = 'aboracco_intervention_decharge_id';
    const LABEL_CODE_DECHARGE = 'code_decharge';
    const LABEL_C_DATE = 'c_date';
    const LABEL_C_USER = 'c_user';
    const LABEL_INTERVENTION_ID = 'intervention_id';

    /** @var int $aboraccoInterventionDechargeId */
    private int $aboraccoInterventionDechargeId;

    /** @var string $codeDecharge */
    private string $codeDecharge;

    /** @var DateTime $cDate */
    private DateTime $cDate;

    /** @var int $cUser */
    private int $cUser;

    /** @var int $interventionId */
    private int $interventionId;


    /**
     * @param int $aboraccoInterventionDechargeId
     * @return AboraccoInterventionDecharge
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoInterventionDechargeId(int $aboraccoInterventionDechargeId): AboraccoInterventionDecharge
    {
        $this->aboraccoInterventionDechargeId = $aboraccoInterventionDechargeId;
        return $this;
    }

    /** @return int */
    public function getAboraccoInterventionDechargeId(): int
    {
        return $this->aboraccoInterventionDechargeId;
    }

    /**
     * @param string $codeDecharge
     * @return AboraccoInterventionDecharge
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCodeDecharge(string $codeDecharge): AboraccoInterventionDecharge
    {
        $this->codeDecharge = $codeDecharge;
        return $this;
    }

    /** @return string */
    public function getCodeDecharge(): string
    {
        return $this->codeDecharge;
    }

    /**
     * @param DateTime $cDate
     * @return AboraccoInterventionDecharge
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCDate(DateTime $cDate): AboraccoInterventionDecharge
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
     * @param int $cUser
     * @return AboraccoInterventionDecharge
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCUser(int $cUser): AboraccoInterventionDecharge
    {
        $this->cUser = $cUser;
        return $this;
    }

    /** @return int */
    public function getCUser(): int
    {
        return $this->cUser;
    }

    /**
     * @param int $interventionId
     * @return AboraccoInterventionDecharge
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setInterventionId(int $interventionId): AboraccoInterventionDecharge
    {
        $this->interventionId = $interventionId;
        return $this;
    }

    /** @return int */
    public function getInterventionId(): int
    {
        return $this->interventionId;
    }
}

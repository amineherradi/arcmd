<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoForceDebrief extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_force_debrief';
    const PRIMARY_KEY  = 'id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'killi_user',
            self::COLUMN_NAME => 'c_user_id',
        ],
        [
            self::REFERENCED_TABLE_NAME => 'intervention',
            self::COLUMN_NAME => 'intervention_id',
        ],
    ];

    const LABEL_C_USER_ID = 'c_user_id';
    const LABEL_DATE_CREATION = 'date_creation';
    const LABEL_ID = 'id';
    const LABEL_INTERVENTION_ID = 'intervention_id';

    /** @var int $cUserId */
    private int $cUserId;

    /** @var DateTime $dateCreation */
    private DateTime $dateCreation;

    /** @var int $id */
    private int $id;

    /** @var int $interventionId */
    private int $interventionId;


    /**
     * @param int $cUserId
     * @return AboraccoForceDebrief
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCUserId(int $cUserId): AboraccoForceDebrief
    {
        $this->cUserId = $cUserId;
        return $this;
    }

    /** @return int */
    public function getCUserId(): int
    {
        return $this->cUserId;
    }

    /**
     * @param DateTime $dateCreation
     * @return AboraccoForceDebrief
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDateCreation(DateTime $dateCreation): AboraccoForceDebrief
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
     * @param int $id
     * @return AboraccoForceDebrief
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setId(int $id): AboraccoForceDebrief
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
     * @return AboraccoForceDebrief
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setInterventionId(int $interventionId): AboraccoForceDebrief
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

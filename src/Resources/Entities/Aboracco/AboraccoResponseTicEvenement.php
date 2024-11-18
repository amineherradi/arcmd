<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoResponseTicEvenement extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_response_tic_evenement';
    const PRIMARY_KEY  = 'id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'aboracco_response',
            self::COLUMN_NAME => 'aboracco_response_id',
        ],
        [
            self::REFERENCED_TABLE_NAME => 'tic_evenement',
            self::COLUMN_NAME => 'tic_evenement_id',
        ],
        [
            self::REFERENCED_TABLE_NAME => 'killi_user',
            self::COLUMN_NAME => 'user_id',
        ],
    ];

    const LABEL_ABORACCO_RESPONSE_ID = 'aboracco_response_id';
    const LABEL_C_TIME = 'c_time';
    const LABEL_ID = 'id';
    const LABEL_OBSOLETE = 'obsolete';
    const LABEL_TIC_EVENEMENT_ID = 'tic_evenement_id';
    const LABEL_USER_ID = 'user_id';

    /** @var int $aboraccoResponseId */
    private int $aboraccoResponseId;

    /** @var DateTime $cTime */
    private DateTime $cTime;

    /** @var int $id */
    private int $id;

    /** @var int $obsolete */
    private int $obsolete;

    /** @var int $ticEvenementId */
    private int $ticEvenementId;

    /** @var int $userId */
    private int $userId;


    /**
     * @param int $aboraccoResponseId
     * @return AboraccoResponseTicEvenement
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoResponseId(int $aboraccoResponseId): AboraccoResponseTicEvenement
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
     * @param DateTime $cTime
     * @return AboraccoResponseTicEvenement
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCTime(DateTime $cTime): AboraccoResponseTicEvenement
    {
        $this->cTime = $cTime;
        return $this;
    }

    /** @return DateTime */
    public function getCTime(): DateTime
    {
        return $this->cTime;
    }

    /**
     * @param int $id
     * @return AboraccoResponseTicEvenement
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setId(int $id): AboraccoResponseTicEvenement
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
     * @param int $obsolete
     * @return AboraccoResponseTicEvenement
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setObsolete(int $obsolete): AboraccoResponseTicEvenement
    {
        $this->obsolete = $obsolete;
        return $this;
    }

    /** @return int */
    public function getObsolete(): int
    {
        return $this->obsolete;
    }

    /**
     * @param int $ticEvenementId
     * @return AboraccoResponseTicEvenement
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setTicEvenementId(int $ticEvenementId): AboraccoResponseTicEvenement
    {
        $this->ticEvenementId = $ticEvenementId;
        return $this;
    }

    /** @return int */
    public function getTicEvenementId(): int
    {
        return $this->ticEvenementId;
    }

    /**
     * @param int $userId
     * @return AboraccoResponseTicEvenement
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setUserId(int $userId): AboraccoResponseTicEvenement
    {
        $this->userId = $userId;
        return $this;
    }

    /** @return int */
    public function getUserId(): int
    {
        return $this->userId;
    }
}

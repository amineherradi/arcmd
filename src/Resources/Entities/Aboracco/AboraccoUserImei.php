<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoUserImei extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_user_imei';
    const PRIMARY_KEY  = 'aboracco_user_imei_id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'aboracco_imei',
            self::COLUMN_NAME => 'aboracco_imei_id',
        ],
        [
            self::REFERENCED_TABLE_NAME => 'killi_user',
            self::COLUMN_NAME => 'user_id',
        ],
    ];

    const LABEL_ABORACCO_IMEI_ID = 'aboracco_imei_id';
    const LABEL_ABORACCO_USER_IMEI_ID = 'aboracco_user_imei_id';
    const LABEL_DATE_CREATION = 'date_creation';
    const LABEL_USER_ID = 'user_id';

    /** @var int $aboraccoImeiId */
    private int $aboraccoImeiId;

    /** @var int $aboraccoUserImeiId */
    private int $aboraccoUserImeiId;

    /** @var DateTime $dateCreation */
    private DateTime $dateCreation;

    /** @var int $userId */
    private int $userId;


    /**
     * @param int $aboraccoImeiId
     * @return AboraccoUserImei
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoImeiId(int $aboraccoImeiId): AboraccoUserImei
    {
        $this->aboraccoImeiId = $aboraccoImeiId;
        return $this;
    }

    /** @return int */
    public function getAboraccoImeiId(): int
    {
        return $this->aboraccoImeiId;
    }

    /**
     * @param int $aboraccoUserImeiId
     * @return AboraccoUserImei
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoUserImeiId(int $aboraccoUserImeiId): AboraccoUserImei
    {
        $this->aboraccoUserImeiId = $aboraccoUserImeiId;
        return $this;
    }

    /** @return int */
    public function getAboraccoUserImeiId(): int
    {
        return $this->aboraccoUserImeiId;
    }

    /**
     * @param DateTime $dateCreation
     * @return AboraccoUserImei
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDateCreation(DateTime $dateCreation): AboraccoUserImei
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
     * @param int $userId
     * @return AboraccoUserImei
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setUserId(int $userId): AboraccoUserImei
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

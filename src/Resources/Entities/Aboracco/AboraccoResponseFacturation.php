<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoResponseFacturation extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_response_facturation';
    const PRIMARY_KEY  = 'response_facturation_id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'aboracco_response_facturation_categorie',
            self::COLUMN_NAME => 'response_facturation_categorie_id',
        ],
        [
            self::REFERENCED_TABLE_NAME => 'aboracco_response',
            self::COLUMN_NAME => 'response_id',
        ],
    ];

    const LABEL_C_TIME = 'c_time';
    const LABEL_C_USER = 'c_user';
    const LABEL_RESPONSE_FACTURATION_CATEGORIE_ID = 'response_facturation_categorie_id';
    const LABEL_RESPONSE_FACTURATION_ID = 'response_facturation_id';
    const LABEL_RESPONSE_ID = 'response_id';

    /** @var DateTime $cTime */
    private DateTime $cTime;

    /** @var int $cUser */
    private int $cUser;

    /** @var int $responseFacturationCategorieId */
    private int $responseFacturationCategorieId;

    /** @var int $responseFacturationId */
    private int $responseFacturationId;

    /** @var int $responseId */
    private int $responseId;


    /**
     * @param DateTime $cTime
     * @return AboraccoResponseFacturation
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCTime(DateTime $cTime): AboraccoResponseFacturation
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
     * @param int $cUser
     * @return AboraccoResponseFacturation
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCUser(int $cUser): AboraccoResponseFacturation
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
     * @param int $responseFacturationCategorieId
     * @return AboraccoResponseFacturation
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setResponseFacturationCategorieId(int $responseFacturationCategorieId): AboraccoResponseFacturation
    {
        $this->responseFacturationCategorieId = $responseFacturationCategorieId;
        return $this;
    }

    /** @return int */
    public function getResponseFacturationCategorieId(): int
    {
        return $this->responseFacturationCategorieId;
    }

    /**
     * @param int $responseFacturationId
     * @return AboraccoResponseFacturation
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setResponseFacturationId(int $responseFacturationId): AboraccoResponseFacturation
    {
        $this->responseFacturationId = $responseFacturationId;
        return $this;
    }

    /** @return int */
    public function getResponseFacturationId(): int
    {
        return $this->responseFacturationId;
    }

    /**
     * @param int $responseId
     * @return AboraccoResponseFacturation
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setResponseId(int $responseId): AboraccoResponseFacturation
    {
        $this->responseId = $responseId;
        return $this;
    }

    /** @return int */
    public function getResponseId(): int
    {
        return $this->responseId;
    }
}

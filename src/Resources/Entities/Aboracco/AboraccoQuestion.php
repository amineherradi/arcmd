<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoQuestion extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_question';
    const PRIMARY_KEY  = 'id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'aboracco_type_question',
            self::COLUMN_NAME => 'type_id',
        ],
    ];

    const LABEL_CUSTOM_RESPONSE = 'custom_response';
    const LABEL_C_TIME = 'c_time';
    const LABEL_C_USER = 'c_user';
    const LABEL_ID = 'id';
    const LABEL_LABEL = 'label';
    const LABEL_NEEDED = 'needed';
    const LABEL_OBSOLETE = 'obsolete';
    const LABEL_TYPE_ID = 'type_id';

    /** @var int $customResponse */
    private int $customResponse;

    /** @var DateTime $cTime */
    private DateTime $cTime;

    /** @var int $cUser */
    private int $cUser;

    /** @var int $id */
    private int $id;

    /** @var string $label */
    private string $label;

    /** @var int $needed */
    private int $needed;

    /** @var int $obsolete */
    private int $obsolete;

    /** @var int $typeId */
    private int $typeId;


    /**
     * @param int $customResponse
     * @return AboraccoQuestion
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCustomResponse(int $customResponse): AboraccoQuestion
    {
        $this->customResponse = $customResponse;
        return $this;
    }

    /** @return int */
    public function getCustomResponse(): int
    {
        return $this->customResponse;
    }

    /**
     * @param DateTime $cTime
     * @return AboraccoQuestion
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCTime(DateTime $cTime): AboraccoQuestion
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
     * @return AboraccoQuestion
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCUser(int $cUser): AboraccoQuestion
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
     * @param int $id
     * @return AboraccoQuestion
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setId(int $id): AboraccoQuestion
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
     * @param string $label
     * @return AboraccoQuestion
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setLabel(string $label): AboraccoQuestion
    {
        $this->label = $label;
        return $this;
    }

    /** @return string */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param int $needed
     * @return AboraccoQuestion
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNeeded(int $needed): AboraccoQuestion
    {
        $this->needed = $needed;
        return $this;
    }

    /** @return int */
    public function getNeeded(): int
    {
        return $this->needed;
    }

    /**
     * @param int $obsolete
     * @return AboraccoQuestion
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setObsolete(int $obsolete): AboraccoQuestion
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
     * @param int $typeId
     * @return AboraccoQuestion
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setTypeId(int $typeId): AboraccoQuestion
    {
        $this->typeId = $typeId;
        return $this;
    }

    /** @return int */
    public function getTypeId(): int
    {
        return $this->typeId;
    }
}

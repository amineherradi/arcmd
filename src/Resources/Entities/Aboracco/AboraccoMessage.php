<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoMessage extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_message';
    const PRIMARY_KEY  = 'id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'killi_user',
            self::COLUMN_NAME => 'author_id',
        ],
    ];

    const LABEL_AUTHOR_FULLNAME = 'author_fullname';
    const LABEL_AUTHOR_ID = 'author_id';
    const LABEL_DISPLAY_TIME = 'display_time';
    const LABEL_FINISH_AT = 'finish_at';
    const LABEL_ID = 'id';
    const LABEL_IS_ACTIVE = 'is_active';
    const LABEL_IS_OBSOLETE = 'is_obsolete';
    const LABEL_MESSAGE = 'message';
    const LABEL_START_AT = 'start_at';

    /** @var string $authorFullname */
    private string $authorFullname;

    /** @var int $authorId */
    private int $authorId;

    /** @var int $displayTime */
    private int $displayTime;

    /** @var DateTime $finishAt */
    private DateTime $finishAt;

    /** @var int $id */
    private int $id;

    /** @var int $isActive */
    private int $isActive;

    /** @var int $isObsolete */
    private int $isObsolete;

    /** @var string $message */
    private string $message;

    /** @var DateTime $startAt */
    private DateTime $startAt;


    /**
     * @param string $authorFullname
     * @return AboraccoMessage
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAuthorFullname(string $authorFullname): AboraccoMessage
    {
        $this->authorFullname = $authorFullname;
        return $this;
    }

    /** @return string */
    public function getAuthorFullname(): string
    {
        return $this->authorFullname;
    }

    /**
     * @param int $authorId
     * @return AboraccoMessage
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAuthorId(int $authorId): AboraccoMessage
    {
        $this->authorId = $authorId;
        return $this;
    }

    /** @return int */
    public function getAuthorId(): int
    {
        return $this->authorId;
    }

    /**
     * @param int $displayTime
     * @return AboraccoMessage
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDisplayTime(int $displayTime): AboraccoMessage
    {
        $this->displayTime = $displayTime;
        return $this;
    }

    /** @return int */
    public function getDisplayTime(): int
    {
        return $this->displayTime;
    }

    /**
     * @param DateTime $finishAt
     * @return AboraccoMessage
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setFinishAt(DateTime $finishAt): AboraccoMessage
    {
        $this->finishAt = $finishAt;
        return $this;
    }

    /** @return DateTime */
    public function getFinishAt(): DateTime
    {
        return $this->finishAt;
    }

    /**
     * @param int $id
     * @return AboraccoMessage
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setId(int $id): AboraccoMessage
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
     * @param int $isActive
     * @return AboraccoMessage
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setIsActive(int $isActive): AboraccoMessage
    {
        $this->isActive = $isActive;
        return $this;
    }

    /** @return int */
    public function getIsActive(): int
    {
        return $this->isActive;
    }

    /**
     * @param int $isObsolete
     * @return AboraccoMessage
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setIsObsolete(int $isObsolete): AboraccoMessage
    {
        $this->isObsolete = $isObsolete;
        return $this;
    }

    /** @return int */
    public function getIsObsolete(): int
    {
        return $this->isObsolete;
    }

    /**
     * @param string $message
     * @return AboraccoMessage
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setMessage(string $message): AboraccoMessage
    {
        $this->message = $message;
        return $this;
    }

    /** @return string */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param DateTime $startAt
     * @return AboraccoMessage
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setStartAt(DateTime $startAt): AboraccoMessage
    {
        $this->startAt = $startAt;
        return $this;
    }

    /** @return DateTime */
    public function getStartAt(): DateTime
    {
        return $this->startAt;
    }
}

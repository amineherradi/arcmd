<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoMessageReadConfirmation extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_message_read_confirmation';
    const PRIMARY_KEY  = 'id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'aboracco_message',
            self::COLUMN_NAME => 'aboracco_message_id',
        ],
        [
            self::REFERENCED_TABLE_NAME => 'killi_user',
            self::COLUMN_NAME => 'killi_user_id',
        ],
    ];

    const LABEL_ABORACCO_MESSAGE_ID = 'aboracco_message_id';
    const LABEL_ID = 'id';
    const LABEL_KILLI_USER_ID = 'killi_user_id';
    const LABEL_READ_AT = 'read_at';

    /** @var int $aboraccoMessageId */
    private int $aboraccoMessageId;

    /** @var int $id */
    private int $id;

    /** @var int $killiUserId */
    private int $killiUserId;

    /** @var DateTime $readAt */
    private DateTime $readAt;


    /**
     * @param int $aboraccoMessageId
     * @return AboraccoMessageReadConfirmation
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoMessageId(int $aboraccoMessageId): AboraccoMessageReadConfirmation
    {
        $this->aboraccoMessageId = $aboraccoMessageId;
        return $this;
    }

    /** @return int */
    public function getAboraccoMessageId(): int
    {
        return $this->aboraccoMessageId;
    }

    /**
     * @param int $id
     * @return AboraccoMessageReadConfirmation
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setId(int $id): AboraccoMessageReadConfirmation
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
     * @param int $killiUserId
     * @return AboraccoMessageReadConfirmation
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setKilliUserId(int $killiUserId): AboraccoMessageReadConfirmation
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
     * @param DateTime $readAt
     * @return AboraccoMessageReadConfirmation
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setReadAt(DateTime $readAt): AboraccoMessageReadConfirmation
    {
        $this->readAt = $readAt;
        return $this;
    }

    /** @return DateTime */
    public function getReadAt(): DateTime
    {
        return $this->readAt;
    }
}

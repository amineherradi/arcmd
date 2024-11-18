<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoResponseTag extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_response_tag';
    const PRIMARY_KEY  = 'aboracco_response_tag_id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'aboracco_response',
            self::COLUMN_NAME => 'aboracco_response_id',
        ],
        [
            self::REFERENCED_TABLE_NAME => 'aboracco_tag',
            self::COLUMN_NAME => 'aboracco_tag_id',
        ],
    ];

    const LABEL_ABORACCO_RESPONSE_ID = 'aboracco_response_id';
    const LABEL_ABORACCO_RESPONSE_TAG_ID = 'aboracco_response_tag_id';
    const LABEL_ABORACCO_TAG_ID = 'aboracco_tag_id';

    /** @var int $aboraccoResponseId */
    private int $aboraccoResponseId;

    /** @var int $aboraccoResponseTagId */
    private int $aboraccoResponseTagId;

    /** @var int $aboraccoTagId */
    private int $aboraccoTagId;


    /**
     * @param int $aboraccoResponseId
     * @return AboraccoResponseTag
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoResponseId(int $aboraccoResponseId): AboraccoResponseTag
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
     * @param int $aboraccoResponseTagId
     * @return AboraccoResponseTag
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoResponseTagId(int $aboraccoResponseTagId): AboraccoResponseTag
    {
        $this->aboraccoResponseTagId = $aboraccoResponseTagId;
        return $this;
    }

    /** @return int */
    public function getAboraccoResponseTagId(): int
    {
        return $this->aboraccoResponseTagId;
    }

    /**
     * @param int $aboraccoTagId
     * @return AboraccoResponseTag
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoTagId(int $aboraccoTagId): AboraccoResponseTag
    {
        $this->aboraccoTagId = $aboraccoTagId;
        return $this;
    }

    /** @return int */
    public function getAboraccoTagId(): int
    {
        return $this->aboraccoTagId;
    }
}

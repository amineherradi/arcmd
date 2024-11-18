<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoMessageNro extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_message_nro';
    const PRIMARY_KEY  = 'id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'aboracco_message',
            self::COLUMN_NAME => 'aboracco_message_id',
        ],
        [
            self::REFERENCED_TABLE_NAME => 'nro',
            self::COLUMN_NAME => 'nro_id',
        ],
    ];

    const LABEL_ABORACCO_MESSAGE_ID = 'aboracco_message_id';
    const LABEL_ID = 'id';
    const LABEL_NRO_ID = 'nro_id';

    /** @var int $aboraccoMessageId */
    private int $aboraccoMessageId;

    /** @var int $id */
    private int $id;

    /** @var int $nroId */
    private int $nroId;


    /**
     * @param int $aboraccoMessageId
     * @return AboraccoMessageNro
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoMessageId(int $aboraccoMessageId): AboraccoMessageNro
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
     * @return AboraccoMessageNro
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setId(int $id): AboraccoMessageNro
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
     * @param int $nroId
     * @return AboraccoMessageNro
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNroId(int $nroId): AboraccoMessageNro
    {
        $this->nroId = $nroId;
        return $this;
    }

    /** @return int */
    public function getNroId(): int
    {
        return $this->nroId;
    }
}

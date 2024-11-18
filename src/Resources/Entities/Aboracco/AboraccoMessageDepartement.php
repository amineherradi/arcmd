<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoMessageDepartement extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_message_departement';
    const PRIMARY_KEY  = 'id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'aboracco_message',
            self::COLUMN_NAME => 'aboracco_message_id',
        ],
        [
            self::REFERENCED_TABLE_NAME => 'departement',
            self::COLUMN_NAME => 'departement_id',
        ],
    ];

    const LABEL_ABORACCO_MESSAGE_ID = 'aboracco_message_id';
    const LABEL_DEPARTEMENT_ID = 'departement_id';
    const LABEL_ID = 'id';

    /** @var int $aboraccoMessageId */
    private int $aboraccoMessageId;

    /** @var int $departementId */
    private int $departementId;

    /** @var int $id */
    private int $id;


    /**
     * @param int $aboraccoMessageId
     * @return AboraccoMessageDepartement
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoMessageId(int $aboraccoMessageId): AboraccoMessageDepartement
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
     * @param int $departementId
     * @return AboraccoMessageDepartement
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDepartementId(int $departementId): AboraccoMessageDepartement
    {
        $this->departementId = $departementId;
        return $this;
    }

    /** @return int */
    public function getDepartementId(): int
    {
        return $this->departementId;
    }

    /**
     * @param int $id
     * @return AboraccoMessageDepartement
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setId(int $id): AboraccoMessageDepartement
    {
        $this->id = $id;
        return $this;
    }

    /** @return int */
    public function getId(): int
    {
        return $this->id;
    }
}

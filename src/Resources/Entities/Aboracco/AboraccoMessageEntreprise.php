<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoMessageEntreprise extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_message_entreprise';
    const PRIMARY_KEY  = 'id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'aboracco_message',
            self::COLUMN_NAME => 'aboracco_message_id',
        ],
        [
            self::REFERENCED_TABLE_NAME => 'entreprise',
            self::COLUMN_NAME => 'entreprise_id',
        ],
    ];

    const LABEL_ABORACCO_MESSAGE_ID = 'aboracco_message_id';
    const LABEL_ENTREPRISE_ID = 'entreprise_id';
    const LABEL_ID = 'id';

    /** @var int $aboraccoMessageId */
    private int $aboraccoMessageId;

    /** @var int $entrepriseId */
    private int $entrepriseId;

    /** @var int $id */
    private int $id;


    /**
     * @param int $aboraccoMessageId
     * @return AboraccoMessageEntreprise
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoMessageId(int $aboraccoMessageId): AboraccoMessageEntreprise
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
     * @param int $entrepriseId
     * @return AboraccoMessageEntreprise
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setEntrepriseId(int $entrepriseId): AboraccoMessageEntreprise
    {
        $this->entrepriseId = $entrepriseId;
        return $this;
    }

    /** @return int */
    public function getEntrepriseId(): int
    {
        return $this->entrepriseId;
    }

    /**
     * @param int $id
     * @return AboraccoMessageEntreprise
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setId(int $id): AboraccoMessageEntreprise
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

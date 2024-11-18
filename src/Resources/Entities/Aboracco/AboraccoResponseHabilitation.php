<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoResponseHabilitation extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_response_habilitation';
    const PRIMARY_KEY  = 'aboracco_response_habilitation_id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'aboracco_response',
            self::COLUMN_NAME => 'aboracco_response_id',
        ],
    ];

    const LABEL_ABORACCO_RESPONSE_HABILITATION_ID = 'aboracco_response_habilitation_id';
    const LABEL_ABORACCO_RESPONSE_ID = 'aboracco_response_id';
    const LABEL_CAPACITE = 'capacite';
    const LABEL_NIVEAU = 'niveau';

    /** @var int $aboraccoResponseHabilitationId */
    private int $aboraccoResponseHabilitationId;

    /** @var int $aboraccoResponseId */
    private int $aboraccoResponseId;

    /** @var string $capacite */
    private string $capacite;

    /** @var string $niveau */
    private string $niveau;


    /**
     * @param int $aboraccoResponseHabilitationId
     * @return AboraccoResponseHabilitation
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoResponseHabilitationId(int $aboraccoResponseHabilitationId): AboraccoResponseHabilitation
    {
        $this->aboraccoResponseHabilitationId = $aboraccoResponseHabilitationId;
        return $this;
    }

    /** @return int */
    public function getAboraccoResponseHabilitationId(): int
    {
        return $this->aboraccoResponseHabilitationId;
    }

    /**
     * @param int $aboraccoResponseId
     * @return AboraccoResponseHabilitation
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoResponseId(int $aboraccoResponseId): AboraccoResponseHabilitation
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
     * @param string $capacite
     * @return AboraccoResponseHabilitation
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCapacite(string $capacite): AboraccoResponseHabilitation
    {
        $this->capacite = $capacite;
        return $this;
    }

    /** @return string */
    public function getCapacite(): string
    {
        return $this->capacite;
    }

    /**
     * @param string $niveau
     * @return AboraccoResponseHabilitation
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNiveau(string $niveau): AboraccoResponseHabilitation
    {
        $this->niveau = $niveau;
        return $this;
    }

    /** @return string */
    public function getNiveau(): string
    {
        return $this->niveau;
    }
}

<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoFamille extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_famille';
    const PRIMARY_KEY  = 'aboracco_famille_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_ABORACCO_FAMILLE_ID = 'aboracco_famille_id';
    const LABEL_LABEL = 'label';

    /** @var int $aboraccoFamilleId */
    private int $aboraccoFamilleId;

    /** @var string $label */
    private string $label;


    /**
     * @param int $aboraccoFamilleId
     * @return AboraccoFamille
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoFamilleId(int $aboraccoFamilleId): AboraccoFamille
    {
        $this->aboraccoFamilleId = $aboraccoFamilleId;
        return $this;
    }

    /** @return int */
    public function getAboraccoFamilleId(): int
    {
        return $this->aboraccoFamilleId;
    }

    /**
     * @param string $label
     * @return AboraccoFamille
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setLabel(string $label): AboraccoFamille
    {
        $this->label = $label;
        return $this;
    }

    /** @return string */
    public function getLabel(): string
    {
        return $this->label;
    }
}

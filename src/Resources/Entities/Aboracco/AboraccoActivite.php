<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoActivite extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_activite';
    const PRIMARY_KEY  = 'aboracco_activite_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_ABORACCO_ACTIVITE_ID = 'aboracco_activite_id';
    const LABEL_LABEL = 'label';

    /** @var int $aboraccoActiviteId */
    private int $aboraccoActiviteId;

    /** @var string $label */
    private string $label;


    /**
     * @param int $aboraccoActiviteId
     * @return AboraccoActivite
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoActiviteId(int $aboraccoActiviteId): AboraccoActivite
    {
        $this->aboraccoActiviteId = $aboraccoActiviteId;
        return $this;
    }

    /** @return int */
    public function getAboraccoActiviteId(): int
    {
        return $this->aboraccoActiviteId;
    }

    /**
     * @param string $label
     * @return AboraccoActivite
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setLabel(string $label): AboraccoActivite
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

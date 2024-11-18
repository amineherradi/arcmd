<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoResponseCdtRappelCondition extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_response_cdt_rappel_condition';
    const PRIMARY_KEY  = 'id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_ID = 'id';
    const LABEL_LABEL = 'label';

    /** @var int $id */
    private int $id;

    /** @var string $label */
    private string $label;


    /**
     * @param int $id
     * @return AboraccoResponseCdtRappelCondition
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setId(int $id): AboraccoResponseCdtRappelCondition
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
     * @return AboraccoResponseCdtRappelCondition
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setLabel(string $label): AboraccoResponseCdtRappelCondition
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

<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoTag extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_tag';
    const PRIMARY_KEY  = 'aboracco_tag_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_ABORACCO_TAG_ID = 'aboracco_tag_id';
    const LABEL_LABEL = 'label';

    /** @var int $aboraccoTagId */
    private int $aboraccoTagId;

    /** @var string $label */
    private string $label;


    /**
     * @param int $aboraccoTagId
     * @return AboraccoTag
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoTagId(int $aboraccoTagId): AboraccoTag
    {
        $this->aboraccoTagId = $aboraccoTagId;
        return $this;
    }

    /** @return int */
    public function getAboraccoTagId(): int
    {
        return $this->aboraccoTagId;
    }

    /**
     * @param string $label
     * @return AboraccoTag
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setLabel(string $label): AboraccoTag
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

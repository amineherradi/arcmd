<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoFeature extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_feature';
    const PRIMARY_KEY  = 'aboracco_feature_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_ABORACCO_FEATURE_ID = 'aboracco_feature_id';
    const LABEL_DESCRIPTION = 'description';
    const LABEL_LABEL = 'label';
    const LABEL_TEXT_ID = 'text_id';

    /** @var int $aboraccoFeatureId */
    private int $aboraccoFeatureId;

    /** @var string $description */
    private string $description;

    /** @var string $label */
    private string $label;

    /** @var string $textId */
    private string $textId;


    /**
     * @param int $aboraccoFeatureId
     * @return AboraccoFeature
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoFeatureId(int $aboraccoFeatureId): AboraccoFeature
    {
        $this->aboraccoFeatureId = $aboraccoFeatureId;
        return $this;
    }

    /** @return int */
    public function getAboraccoFeatureId(): int
    {
        return $this->aboraccoFeatureId;
    }

    /**
     * @param string $description
     * @return AboraccoFeature
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDescription(string $description): AboraccoFeature
    {
        $this->description = $description;
        return $this;
    }

    /** @return string */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $label
     * @return AboraccoFeature
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setLabel(string $label): AboraccoFeature
    {
        $this->label = $label;
        return $this;
    }

    /** @return string */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $textId
     * @return AboraccoFeature
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setTextId(string $textId): AboraccoFeature
    {
        $this->textId = $textId;
        return $this;
    }

    /** @return string */
    public function getTextId(): string
    {
        return $this->textId;
    }
}

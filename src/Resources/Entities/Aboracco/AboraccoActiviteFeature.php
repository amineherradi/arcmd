<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoActiviteFeature extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_activite_feature';
    const PRIMARY_KEY  = 'aboracco_activite_feature_id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'aboracco_activite',
            self::COLUMN_NAME => 'aboracco_activite_id',
        ],
        [
            self::REFERENCED_TABLE_NAME => 'aboracco_feature',
            self::COLUMN_NAME => 'aboracco_feature_id',
        ],
    ];

    const LABEL_ABORACCO_ACTIVITE_FEATURE_ID = 'aboracco_activite_feature_id';
    const LABEL_ABORACCO_ACTIVITE_ID = 'aboracco_activite_id';
    const LABEL_ABORACCO_FEATURE_ID = 'aboracco_feature_id';

    /** @var int $aboraccoActiviteFeatureId */
    private int $aboraccoActiviteFeatureId;

    /** @var int $aboraccoActiviteId */
    private int $aboraccoActiviteId;

    /** @var int $aboraccoFeatureId */
    private int $aboraccoFeatureId;


    /**
     * @param int $aboraccoActiviteFeatureId
     * @return AboraccoActiviteFeature
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoActiviteFeatureId(int $aboraccoActiviteFeatureId): AboraccoActiviteFeature
    {
        $this->aboraccoActiviteFeatureId = $aboraccoActiviteFeatureId;
        return $this;
    }

    /** @return int */
    public function getAboraccoActiviteFeatureId(): int
    {
        return $this->aboraccoActiviteFeatureId;
    }

    /**
     * @param int $aboraccoActiviteId
     * @return AboraccoActiviteFeature
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoActiviteId(int $aboraccoActiviteId): AboraccoActiviteFeature
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
     * @param int $aboraccoFeatureId
     * @return AboraccoActiviteFeature
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoFeatureId(int $aboraccoFeatureId): AboraccoActiviteFeature
    {
        $this->aboraccoFeatureId = $aboraccoFeatureId;
        return $this;
    }

    /** @return int */
    public function getAboraccoFeatureId(): int
    {
        return $this->aboraccoFeatureId;
    }
}

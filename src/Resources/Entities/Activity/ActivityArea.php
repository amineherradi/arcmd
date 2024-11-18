<?php

namespace Amine\Arcmd\Resources\Entities\Activity;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class ActivityArea extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'activity_area';
    const PRIMARY_KEY  = 'area_id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'killi_user',
            self::COLUMN_NAME => 'cdp_id',
        ],
    ];

    const LABEL_AREA_ID = 'area_id';
    const LABEL_AREA_NOM = 'area_nom';
    const LABEL_CDP_ID = 'cdp_id';

    /** @var int $areaId */
    private int $areaId;

    /** @var string $areaNom */
    private string $areaNom;

    /** @var int $cdpId */
    private int $cdpId;


    /**
     * @param int $areaId
     * @return ActivityArea
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAreaId(int $areaId): ActivityArea
    {
        $this->areaId = $areaId;
        return $this;
    }

    /** @return int */
    public function getAreaId(): int
    {
        return $this->areaId;
    }

    /**
     * @param string $areaNom
     * @return ActivityArea
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAreaNom(string $areaNom): ActivityArea
    {
        $this->areaNom = $areaNom;
        return $this;
    }

    /** @return string */
    public function getAreaNom(): string
    {
        return $this->areaNom;
    }

    /**
     * @param int $cdpId
     * @return ActivityArea
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCdpId(int $cdpId): ActivityArea
    {
        $this->cdpId = $cdpId;
        return $this;
    }

    /** @return int */
    public function getCdpId(): int
    {
        return $this->cdpId;
    }
}

<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoResponseZone extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_response_zone';
    const PRIMARY_KEY  = 'response_zone_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_C_TIME = 'c_time';
    const LABEL_LABEL = 'label';
    const LABEL_RESPONSE_ZONE_ID = 'response_zone_id';

    /** @var DateTime $cTime */
    private DateTime $cTime;

    /** @var string $label */
    private string $label;

    /** @var int $responseZoneId */
    private int $responseZoneId;


    /**
     * @param DateTime $cTime
     * @return AboraccoResponseZone
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCTime(DateTime $cTime): AboraccoResponseZone
    {
        $this->cTime = $cTime;
        return $this;
    }

    /** @return DateTime */
    public function getCTime(): DateTime
    {
        return $this->cTime;
    }

    /**
     * @param string $label
     * @return AboraccoResponseZone
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setLabel(string $label): AboraccoResponseZone
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
     * @param int $responseZoneId
     * @return AboraccoResponseZone
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setResponseZoneId(int $responseZoneId): AboraccoResponseZone
    {
        $this->responseZoneId = $responseZoneId;
        return $this;
    }

    /** @return int */
    public function getResponseZoneId(): int
    {
        return $this->responseZoneId;
    }
}

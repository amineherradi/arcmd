<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoResponseResponsable extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_response_responsable';
    const PRIMARY_KEY  = 'response_responsable_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_C_TIME = 'c_time';
    const LABEL_LABEL = 'label';
    const LABEL_RESPONSE_RESPONSABLE_ID = 'response_responsable_id';

    /** @var DateTime $cTime */
    private DateTime $cTime;

    /** @var string $label */
    private string $label;

    /** @var int $responseResponsableId */
    private int $responseResponsableId;


    /**
     * @param DateTime $cTime
     * @return AboraccoResponseResponsable
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCTime(DateTime $cTime): AboraccoResponseResponsable
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
     * @return AboraccoResponseResponsable
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setLabel(string $label): AboraccoResponseResponsable
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
     * @param int $responseResponsableId
     * @return AboraccoResponseResponsable
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setResponseResponsableId(int $responseResponsableId): AboraccoResponseResponsable
    {
        $this->responseResponsableId = $responseResponsableId;
        return $this;
    }

    /** @return int */
    public function getResponseResponsableId(): int
    {
        return $this->responseResponsableId;
    }
}

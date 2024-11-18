<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoResponseFlechage extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_response_flechage';
    const PRIMARY_KEY  = 'response_flechage_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_ORDRE = 'ordre';
    const LABEL_RESPONSE_CATEGORIE_ID = 'response_categorie_id';
    const LABEL_RESPONSE_FLECHAGE_ID = 'response_flechage_id';
    const LABEL_RESPONSE_ID = 'response_id';
    const LABEL_RESPONSE_RESPONSABLE_ID = 'response_responsable_id';
    const LABEL_RESPONSE_ZONE_ID = 'response_zone_id';

    /** @var int $ordre */
    private int $ordre;

    /** @var int $responseCategorieId */
    private int $responseCategorieId;

    /** @var int $responseFlechageId */
    private int $responseFlechageId;

    /** @var int $responseId */
    private int $responseId;

    /** @var int $responseResponsableId */
    private int $responseResponsableId;

    /** @var int $responseZoneId */
    private int $responseZoneId;


    /**
     * @param int $ordre
     * @return AboraccoResponseFlechage
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setOrdre(int $ordre): AboraccoResponseFlechage
    {
        $this->ordre = $ordre;
        return $this;
    }

    /** @return int */
    public function getOrdre(): int
    {
        return $this->ordre;
    }

    /**
     * @param int $responseCategorieId
     * @return AboraccoResponseFlechage
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setResponseCategorieId(int $responseCategorieId): AboraccoResponseFlechage
    {
        $this->responseCategorieId = $responseCategorieId;
        return $this;
    }

    /** @return int */
    public function getResponseCategorieId(): int
    {
        return $this->responseCategorieId;
    }

    /**
     * @param int $responseFlechageId
     * @return AboraccoResponseFlechage
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setResponseFlechageId(int $responseFlechageId): AboraccoResponseFlechage
    {
        $this->responseFlechageId = $responseFlechageId;
        return $this;
    }

    /** @return int */
    public function getResponseFlechageId(): int
    {
        return $this->responseFlechageId;
    }

    /**
     * @param int $responseId
     * @return AboraccoResponseFlechage
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setResponseId(int $responseId): AboraccoResponseFlechage
    {
        $this->responseId = $responseId;
        return $this;
    }

    /** @return int */
    public function getResponseId(): int
    {
        return $this->responseId;
    }

    /**
     * @param int $responseResponsableId
     * @return AboraccoResponseFlechage
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setResponseResponsableId(int $responseResponsableId): AboraccoResponseFlechage
    {
        $this->responseResponsableId = $responseResponsableId;
        return $this;
    }

    /** @return int */
    public function getResponseResponsableId(): int
    {
        return $this->responseResponsableId;
    }

    /**
     * @param int $responseZoneId
     * @return AboraccoResponseFlechage
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setResponseZoneId(int $responseZoneId): AboraccoResponseFlechage
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

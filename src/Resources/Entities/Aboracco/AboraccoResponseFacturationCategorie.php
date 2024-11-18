<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoResponseFacturationCategorie extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_response_facturation_categorie';
    const PRIMARY_KEY  = 'response_facturation_categorie_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_C_TIME = 'c_time';
    const LABEL_LABEL = 'label';
    const LABEL_RESPONSE_FACTURATION_CATEGORIE_ID = 'response_facturation_categorie_id';

    /** @var DateTime $cTime */
    private DateTime $cTime;

    /** @var string $label */
    private string $label;

    /** @var int $responseFacturationCategorieId */
    private int $responseFacturationCategorieId;


    /**
     * @param DateTime $cTime
     * @return AboraccoResponseFacturationCategorie
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCTime(DateTime $cTime): AboraccoResponseFacturationCategorie
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
     * @return AboraccoResponseFacturationCategorie
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setLabel(string $label): AboraccoResponseFacturationCategorie
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
     * @param int $responseFacturationCategorieId
     * @return AboraccoResponseFacturationCategorie
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setResponseFacturationCategorieId(int $responseFacturationCategorieId): AboraccoResponseFacturationCategorie
    {
        $this->responseFacturationCategorieId = $responseFacturationCategorieId;
        return $this;
    }

    /** @return int */
    public function getResponseFacturationCategorieId(): int
    {
        return $this->responseFacturationCategorieId;
    }
}

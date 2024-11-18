<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoResponseCategorie extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_response_categorie';
    const PRIMARY_KEY  = 'response_categorie_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_C_TIME = 'c_time';
    const LABEL_LABEL = 'label';
    const LABEL_RESPONSE_CATEGORIE_ID = 'response_categorie_id';

    /** @var DateTime $cTime */
    private DateTime $cTime;

    /** @var string $label */
    private string $label;

    /** @var int $responseCategorieId */
    private int $responseCategorieId;


    /**
     * @param DateTime $cTime
     * @return AboraccoResponseCategorie
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCTime(DateTime $cTime): AboraccoResponseCategorie
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
     * @return AboraccoResponseCategorie
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setLabel(string $label): AboraccoResponseCategorie
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
     * @param int $responseCategorieId
     * @return AboraccoResponseCategorie
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setResponseCategorieId(int $responseCategorieId): AboraccoResponseCategorie
    {
        $this->responseCategorieId = $responseCategorieId;
        return $this;
    }

    /** @return int */
    public function getResponseCategorieId(): int
    {
        return $this->responseCategorieId;
    }
}

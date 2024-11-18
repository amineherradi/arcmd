<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoResponseEsav21Code extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_response_esav21_code';
    const PRIMARY_KEY  = 'aboracco_response_esav21_code_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_ABORACCO_RESPONSE_ESAV21_CODE_ID = 'aboracco_response_esav21_code_id';
    const LABEL_TROUBLETICKETCLOSURECODE = 'troubleTicketClosureCode';
    const LABEL_TROUBLETICKETCLOSURELABEL = 'troubleTicketClosureLabel';
    const LABEL_WEIGHT = 'weight';

    /** @var int $aboraccoResponseEsav21CodeId */
    private int $aboraccoResponseEsav21CodeId;

    /** @var string $troubleticketclosurecode */
    private string $troubleticketclosurecode;

    /** @var string $troubleticketclosurelabel */
    private string $troubleticketclosurelabel;

    /** @var int $weight */
    private int $weight;


    /**
     * @param int $aboraccoResponseEsav21CodeId
     * @return AboraccoResponseEsav21Code
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoResponseEsav21CodeId(int $aboraccoResponseEsav21CodeId): AboraccoResponseEsav21Code
    {
        $this->aboraccoResponseEsav21CodeId = $aboraccoResponseEsav21CodeId;
        return $this;
    }

    /** @return int */
    public function getAboraccoResponseEsav21CodeId(): int
    {
        return $this->aboraccoResponseEsav21CodeId;
    }

    /**
     * @param string $troubleticketclosurecode
     * @return AboraccoResponseEsav21Code
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setTroubleticketclosurecode(string $troubleticketclosurecode): AboraccoResponseEsav21Code
    {
        $this->troubleticketclosurecode = $troubleticketclosurecode;
        return $this;
    }

    /** @return string */
    public function getTroubleticketclosurecode(): string
    {
        return $this->troubleticketclosurecode;
    }

    /**
     * @param string $troubleticketclosurelabel
     * @return AboraccoResponseEsav21Code
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setTroubleticketclosurelabel(string $troubleticketclosurelabel): AboraccoResponseEsav21Code
    {
        $this->troubleticketclosurelabel = $troubleticketclosurelabel;
        return $this;
    }

    /** @return string */
    public function getTroubleticketclosurelabel(): string
    {
        return $this->troubleticketclosurelabel;
    }

    /**
     * @param int $weight
     * @return AboraccoResponseEsav21Code
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setWeight(int $weight): AboraccoResponseEsav21Code
    {
        $this->weight = $weight;
        return $this;
    }

    /** @return int */
    public function getWeight(): int
    {
        return $this->weight;
    }
}

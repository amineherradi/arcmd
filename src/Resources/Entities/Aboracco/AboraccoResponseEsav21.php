<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoResponseEsav21 extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_response_esav21';
    const PRIMARY_KEY  = 'aboracco_response_esav21_id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'aboracco_response_esav21_code',
            self::COLUMN_NAME => 'aboracco_response_esav21_code_id',
        ],
        [
            self::REFERENCED_TABLE_NAME => 'aboracco_response',
            self::COLUMN_NAME => 'response_id',
        ],
    ];

    const LABEL_ABORACCO_RESPONSE_ESAV21_CODE_ID = 'aboracco_response_esav21_code_id';
    const LABEL_ABORACCO_RESPONSE_ESAV21_ID = 'aboracco_response_esav21_id';
    const LABEL_CREATION_DATE = 'creation_date';
    const LABEL_DEFECTLOCALIZATION = 'defectLocalization';
    const LABEL_DEFECTRESPONSIBILITY = 'defectResponsibility';
    const LABEL_MODIFICATION_DATE = 'modification_date';
    const LABEL_OBSOLETE = 'obsolete';
    const LABEL_RESPONSE_ID = 'response_id';
    const LABEL_TROUBLETICKETCLOSURECOMMENT = 'troubleTicketClosureComment';

    /** @var int $aboraccoResponseEsav21CodeId */
    private int $aboraccoResponseEsav21CodeId;

    /** @var int $aboraccoResponseEsav21Id */
    private int $aboraccoResponseEsav21Id;

    /** @var DateTime $creationDate */
    private DateTime $creationDate;

    /** @var string $defectlocalization */
    private string $defectlocalization;

    /** @var string $defectresponsibility */
    private string $defectresponsibility;

    /** @var DateTime $modificationDate */
    private DateTime $modificationDate;

    /** @var int $obsolete */
    private int $obsolete;

    /** @var int $responseId */
    private int $responseId;

    /** @var string $troubleticketclosurecomment */
    private string $troubleticketclosurecomment;


    /**
     * @param int $aboraccoResponseEsav21CodeId
     * @return AboraccoResponseEsav21
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoResponseEsav21CodeId(int $aboraccoResponseEsav21CodeId): AboraccoResponseEsav21
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
     * @param int $aboraccoResponseEsav21Id
     * @return AboraccoResponseEsav21
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoResponseEsav21Id(int $aboraccoResponseEsav21Id): AboraccoResponseEsav21
    {
        $this->aboraccoResponseEsav21Id = $aboraccoResponseEsav21Id;
        return $this;
    }

    /** @return int */
    public function getAboraccoResponseEsav21Id(): int
    {
        return $this->aboraccoResponseEsav21Id;
    }

    /**
     * @param DateTime $creationDate
     * @return AboraccoResponseEsav21
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCreationDate(DateTime $creationDate): AboraccoResponseEsav21
    {
        $this->creationDate = $creationDate;
        return $this;
    }

    /** @return DateTime */
    public function getCreationDate(): DateTime
    {
        return $this->creationDate;
    }

    /**
     * @param string $defectlocalization
     * @return AboraccoResponseEsav21
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDefectlocalization(string $defectlocalization): AboraccoResponseEsav21
    {
        $this->defectlocalization = $defectlocalization;
        return $this;
    }

    /** @return string */
    public function getDefectlocalization(): string
    {
        return $this->defectlocalization;
    }

    /**
     * @param string $defectresponsibility
     * @return AboraccoResponseEsav21
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDefectresponsibility(string $defectresponsibility): AboraccoResponseEsav21
    {
        $this->defectresponsibility = $defectresponsibility;
        return $this;
    }

    /** @return string */
    public function getDefectresponsibility(): string
    {
        return $this->defectresponsibility;
    }

    /**
     * @param DateTime $modificationDate
     * @return AboraccoResponseEsav21
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setModificationDate(DateTime $modificationDate): AboraccoResponseEsav21
    {
        $this->modificationDate = $modificationDate;
        return $this;
    }

    /** @return DateTime */
    public function getModificationDate(): DateTime
    {
        return $this->modificationDate;
    }

    /**
     * @param int $obsolete
     * @return AboraccoResponseEsav21
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setObsolete(int $obsolete): AboraccoResponseEsav21
    {
        $this->obsolete = $obsolete;
        return $this;
    }

    /** @return int */
    public function getObsolete(): int
    {
        return $this->obsolete;
    }

    /**
     * @param int $responseId
     * @return AboraccoResponseEsav21
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setResponseId(int $responseId): AboraccoResponseEsav21
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
     * @param string $troubleticketclosurecomment
     * @return AboraccoResponseEsav21
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setTroubleticketclosurecomment(string $troubleticketclosurecomment): AboraccoResponseEsav21
    {
        $this->troubleticketclosurecomment = $troubleticketclosurecomment;
        return $this;
    }

    /** @return string */
    public function getTroubleticketclosurecomment(): string
    {
        return $this->troubleticketclosurecomment;
    }
}

<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoRecapTmp extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_recap_tmp';
    const PRIMARY_KEY  = 'id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'intervention',
            self::COLUMN_NAME => 'intervention_id',
        ],
        [
            self::REFERENCED_TABLE_NAME => 'aboracco_question',
            self::COLUMN_NAME => 'question_id',
        ],
        [
            self::REFERENCED_TABLE_NAME => 'aboracco_response',
            self::COLUMN_NAME => 'response_id',
        ],
    ];

    const LABEL_C_DATE = 'c_date';
    const LABEL_C_USER = 'c_user';
    const LABEL_ID = 'id';
    const LABEL_INTERVENTION_ID = 'intervention_id';
    const LABEL_QUESTION_ID = 'question_id';
    const LABEL_RECAP_PROVIDER_ID = 'recap_provider_id';
    const LABEL_RESPONSE_ID = 'response_id';
    const LABEL_RESPONSE_TEXT = 'response_text';
    const LABEL_UUID = 'uuid';

    /** @var DateTime $cDate */
    private DateTime $cDate;

    /** @var int $cUser */
    private int $cUser;

    /** @var int $id */
    private int $id;

    /** @var int $interventionId */
    private int $interventionId;

    /** @var int $questionId */
    private int $questionId;

    /** @var int $recapProviderId */
    private int $recapProviderId;

    /** @var int $responseId */
    private int $responseId;

    /** @var string $responseText */
    private string $responseText;

    /** @var string $uuid */
    private string $uuid;


    /**
     * @param DateTime $cDate
     * @return AboraccoRecapTmp
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCDate(DateTime $cDate): AboraccoRecapTmp
    {
        $this->cDate = $cDate;
        return $this;
    }

    /** @return DateTime */
    public function getCDate(): DateTime
    {
        return $this->cDate;
    }

    /**
     * @param int $cUser
     * @return AboraccoRecapTmp
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCUser(int $cUser): AboraccoRecapTmp
    {
        $this->cUser = $cUser;
        return $this;
    }

    /** @return int */
    public function getCUser(): int
    {
        return $this->cUser;
    }

    /**
     * @param int $id
     * @return AboraccoRecapTmp
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setId(int $id): AboraccoRecapTmp
    {
        $this->id = $id;
        return $this;
    }

    /** @return int */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $interventionId
     * @return AboraccoRecapTmp
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setInterventionId(int $interventionId): AboraccoRecapTmp
    {
        $this->interventionId = $interventionId;
        return $this;
    }

    /** @return int */
    public function getInterventionId(): int
    {
        return $this->interventionId;
    }

    /**
     * @param int $questionId
     * @return AboraccoRecapTmp
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setQuestionId(int $questionId): AboraccoRecapTmp
    {
        $this->questionId = $questionId;
        return $this;
    }

    /** @return int */
    public function getQuestionId(): int
    {
        return $this->questionId;
    }

    /**
     * @param int $recapProviderId
     * @return AboraccoRecapTmp
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setRecapProviderId(int $recapProviderId): AboraccoRecapTmp
    {
        $this->recapProviderId = $recapProviderId;
        return $this;
    }

    /** @return int */
    public function getRecapProviderId(): int
    {
        return $this->recapProviderId;
    }

    /**
     * @param int $responseId
     * @return AboraccoRecapTmp
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setResponseId(int $responseId): AboraccoRecapTmp
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
     * @param string $responseText
     * @return AboraccoRecapTmp
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setResponseText(string $responseText): AboraccoRecapTmp
    {
        $this->responseText = $responseText;
        return $this;
    }

    /** @return string */
    public function getResponseText(): string
    {
        return $this->responseText;
    }

    /**
     * @param string $uuid
     * @return AboraccoRecapTmp
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setUuid(string $uuid): AboraccoRecapTmp
    {
        $this->uuid = $uuid;
        return $this;
    }

    /** @return string */
    public function getUuid(): string
    {
        return $this->uuid;
    }
}

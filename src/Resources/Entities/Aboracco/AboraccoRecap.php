<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoRecap extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_recap';
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
    const LABEL_DATE_MODIFICATION = 'date_modification';
    const LABEL_ID = 'id';
    const LABEL_INTERVENTION_ID = 'intervention_id';
    const LABEL_QUESTION_ID = 'question_id';
    const LABEL_RECAP_PROVIDER_ID = 'recap_provider_id';
    const LABEL_RESPONSE_ID = 'response_id';
    const LABEL_RESPONSE_TEXT = 'response_text';

    /** @var DateTime $cDate */
    private DateTime $cDate;

    /** @var int $cUser */
    private int $cUser;

    /** @var DateTime $dateModification */
    private DateTime $dateModification;

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


    /**
     * @param DateTime $cDate
     * @return AboraccoRecap
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCDate(DateTime $cDate): AboraccoRecap
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
     * @return AboraccoRecap
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCUser(int $cUser): AboraccoRecap
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
     * @param DateTime $dateModification
     * @return AboraccoRecap
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDateModification(DateTime $dateModification): AboraccoRecap
    {
        $this->dateModification = $dateModification;
        return $this;
    }

    /** @return DateTime */
    public function getDateModification(): DateTime
    {
        return $this->dateModification;
    }

    /**
     * @param int $id
     * @return AboraccoRecap
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setId(int $id): AboraccoRecap
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
     * @return AboraccoRecap
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setInterventionId(int $interventionId): AboraccoRecap
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
     * @return AboraccoRecap
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setQuestionId(int $questionId): AboraccoRecap
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
     * @return AboraccoRecap
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setRecapProviderId(int $recapProviderId): AboraccoRecap
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
     * @return AboraccoRecap
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setResponseId(int $responseId): AboraccoRecap
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
     * @return AboraccoRecap
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setResponseText(string $responseText): AboraccoRecap
    {
        $this->responseText = $responseText;
        return $this;
    }

    /** @return string */
    public function getResponseText(): string
    {
        return $this->responseText;
    }
}

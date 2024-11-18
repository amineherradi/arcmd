<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoRecapAudit extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_recap_audit';
    const PRIMARY_KEY  = 'id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'killi_user',
            self::COLUMN_NAME => 'c_user',
        ],
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

    const LABEL_CMD_ID = 'cmd_id';
    const LABEL_C_DATE = 'c_date';
    const LABEL_C_USER = 'c_user';
    const LABEL_ID = 'id';
    const LABEL_INTERVENTION_ID = 'intervention_id';
    const LABEL_QUESTION_ID = 'question_id';
    const LABEL_RESPONSE_ID = 'response_id';
    const LABEL_RESPONSE_TEXT = 'response_text';

    /** @var string $cmdId */
    private string $cmdId;

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

    /** @var int $responseId */
    private int $responseId;

    /** @var string $responseText */
    private string $responseText;


    /**
     * @param string $cmdId
     * @return AboraccoRecapAudit
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCmdId(string $cmdId): AboraccoRecapAudit
    {
        $this->cmdId = $cmdId;
        return $this;
    }

    /** @return string */
    public function getCmdId(): string
    {
        return $this->cmdId;
    }

    /**
     * @param DateTime $cDate
     * @return AboraccoRecapAudit
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCDate(DateTime $cDate): AboraccoRecapAudit
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
     * @return AboraccoRecapAudit
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCUser(int $cUser): AboraccoRecapAudit
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
     * @return AboraccoRecapAudit
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setId(int $id): AboraccoRecapAudit
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
     * @return AboraccoRecapAudit
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setInterventionId(int $interventionId): AboraccoRecapAudit
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
     * @return AboraccoRecapAudit
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setQuestionId(int $questionId): AboraccoRecapAudit
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
     * @param int $responseId
     * @return AboraccoRecapAudit
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setResponseId(int $responseId): AboraccoRecapAudit
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
     * @return AboraccoRecapAudit
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setResponseText(string $responseText): AboraccoRecapAudit
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

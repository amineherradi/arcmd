<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoQuestionCondition extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_question_condition';
    const PRIMARY_KEY  = 'question_condition_id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'aboracco_question',
            self::COLUMN_NAME => 'question_id',
        ],
        [
            self::REFERENCED_TABLE_NAME => 'aboracco_response',
            self::COLUMN_NAME => 'reponse_id',
        ],
    ];

    const LABEL_C_TIME = 'c_time';
    const LABEL_C_USER = 'c_user';
    const LABEL_HAS_THIS_VALUE = 'has_this_value';
    const LABEL_OBSOLETE = 'obsolete';
    const LABEL_QUESTION_CONDITION_ID = 'question_condition_id';
    const LABEL_QUESTION_ID = 'question_id';
    const LABEL_REPONSE_ID = 'reponse_id';

    /** @var DateTime $cTime */
    private DateTime $cTime;

    /** @var int $cUser */
    private int $cUser;

    /** @var int $hasThisValue */
    private int $hasThisValue;

    /** @var int $obsolete */
    private int $obsolete;

    /** @var int $questionConditionId */
    private int $questionConditionId;

    /** @var int $questionId */
    private int $questionId;

    /** @var int $reponseId */
    private int $reponseId;


    /**
     * @param DateTime $cTime
     * @return AboraccoQuestionCondition
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCTime(DateTime $cTime): AboraccoQuestionCondition
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
     * @param int $cUser
     * @return AboraccoQuestionCondition
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCUser(int $cUser): AboraccoQuestionCondition
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
     * @param int $hasThisValue
     * @return AboraccoQuestionCondition
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setHasThisValue(int $hasThisValue): AboraccoQuestionCondition
    {
        $this->hasThisValue = $hasThisValue;
        return $this;
    }

    /** @return int */
    public function getHasThisValue(): int
    {
        return $this->hasThisValue;
    }

    /**
     * @param int $obsolete
     * @return AboraccoQuestionCondition
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setObsolete(int $obsolete): AboraccoQuestionCondition
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
     * @param int $questionConditionId
     * @return AboraccoQuestionCondition
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setQuestionConditionId(int $questionConditionId): AboraccoQuestionCondition
    {
        $this->questionConditionId = $questionConditionId;
        return $this;
    }

    /** @return int */
    public function getQuestionConditionId(): int
    {
        return $this->questionConditionId;
    }

    /**
     * @param int $questionId
     * @return AboraccoQuestionCondition
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setQuestionId(int $questionId): AboraccoQuestionCondition
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
     * @param int $reponseId
     * @return AboraccoQuestionCondition
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setReponseId(int $reponseId): AboraccoQuestionCondition
    {
        $this->reponseId = $reponseId;
        return $this;
    }

    /** @return int */
    public function getReponseId(): int
    {
        return $this->reponseId;
    }
}

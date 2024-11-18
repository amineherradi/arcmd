<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoQuestionConditionLog extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_question_condition_log';
    const PRIMARY_KEY  = 'aboracco_question_condition_log_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_ABORACCO_QUESTION_CONDITION_ID = 'aboracco_question_condition_id';
    const LABEL_ABORACCO_QUESTION_CONDITION_LOG_ID = 'aboracco_question_condition_log_id';
    const LABEL_C_TIME = 'c_time';
    const LABEL_C_USER = 'c_user';
    const LABEL_HAS_THIS_VALUE = 'has_this_value';
    const LABEL_M_TIME = 'm_time';
    const LABEL_M_USER = 'm_user';
    const LABEL_OBSOLETE = 'obsolete';
    const LABEL_QUESTION_ID = 'question_id';
    const LABEL_REPONSE_ID = 'reponse_id';

    /** @var int $aboraccoQuestionConditionId */
    private int $aboraccoQuestionConditionId;

    /** @var int $aboraccoQuestionConditionLogId */
    private int $aboraccoQuestionConditionLogId;

    /** @var DateTime $cTime */
    private DateTime $cTime;

    /** @var int $cUser */
    private int $cUser;

    /** @var int $hasThisValue */
    private int $hasThisValue;

    /** @var DateTime $mTime */
    private DateTime $mTime;

    /** @var int $mUser */
    private int $mUser;

    /** @var int $obsolete */
    private int $obsolete;

    /** @var int $questionId */
    private int $questionId;

    /** @var int $reponseId */
    private int $reponseId;


    /**
     * @param int $aboraccoQuestionConditionId
     * @return AboraccoQuestionConditionLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoQuestionConditionId(int $aboraccoQuestionConditionId): AboraccoQuestionConditionLog
    {
        $this->aboraccoQuestionConditionId = $aboraccoQuestionConditionId;
        return $this;
    }

    /** @return int */
    public function getAboraccoQuestionConditionId(): int
    {
        return $this->aboraccoQuestionConditionId;
    }

    /**
     * @param int $aboraccoQuestionConditionLogId
     * @return AboraccoQuestionConditionLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoQuestionConditionLogId(int $aboraccoQuestionConditionLogId): AboraccoQuestionConditionLog
    {
        $this->aboraccoQuestionConditionLogId = $aboraccoQuestionConditionLogId;
        return $this;
    }

    /** @return int */
    public function getAboraccoQuestionConditionLogId(): int
    {
        return $this->aboraccoQuestionConditionLogId;
    }

    /**
     * @param DateTime $cTime
     * @return AboraccoQuestionConditionLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCTime(DateTime $cTime): AboraccoQuestionConditionLog
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
     * @return AboraccoQuestionConditionLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCUser(int $cUser): AboraccoQuestionConditionLog
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
     * @return AboraccoQuestionConditionLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setHasThisValue(int $hasThisValue): AboraccoQuestionConditionLog
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
     * @param DateTime $mTime
     * @return AboraccoQuestionConditionLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setMTime(DateTime $mTime): AboraccoQuestionConditionLog
    {
        $this->mTime = $mTime;
        return $this;
    }

    /** @return DateTime */
    public function getMTime(): DateTime
    {
        return $this->mTime;
    }

    /**
     * @param int $mUser
     * @return AboraccoQuestionConditionLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setMUser(int $mUser): AboraccoQuestionConditionLog
    {
        $this->mUser = $mUser;
        return $this;
    }

    /** @return int */
    public function getMUser(): int
    {
        return $this->mUser;
    }

    /**
     * @param int $obsolete
     * @return AboraccoQuestionConditionLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setObsolete(int $obsolete): AboraccoQuestionConditionLog
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
     * @param int $questionId
     * @return AboraccoQuestionConditionLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setQuestionId(int $questionId): AboraccoQuestionConditionLog
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
     * @return AboraccoQuestionConditionLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setReponseId(int $reponseId): AboraccoQuestionConditionLog
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

<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoResponseLog extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_response_log';
    const PRIMARY_KEY  = 'aboracco_response_log_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_ABORACCO_RESPONSE_ID = 'aboracco_response_id';
    const LABEL_ABORACCO_RESPONSE_LOG_ID = 'aboracco_response_log_id';
    const LABEL_C_TIME = 'c_time';
    const LABEL_C_USER = 'c_user';
    const LABEL_LABEL = 'label';
    const LABEL_M_TIME = 'm_time';
    const LABEL_M_USER = 'm_user';
    const LABEL_OBSOLETE = 'obsolete';
    const LABEL_QUESTION_ID = 'question_id';

    /** @var int $aboraccoResponseId */
    private int $aboraccoResponseId;

    /** @var int $aboraccoResponseLogId */
    private int $aboraccoResponseLogId;

    /** @var DateTime $cTime */
    private DateTime $cTime;

    /** @var int $cUser */
    private int $cUser;

    /** @var string $label */
    private string $label;

    /** @var DateTime $mTime */
    private DateTime $mTime;

    /** @var int $mUser */
    private int $mUser;

    /** @var int $obsolete */
    private int $obsolete;

    /** @var int $questionId */
    private int $questionId;


    /**
     * @param int $aboraccoResponseId
     * @return AboraccoResponseLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoResponseId(int $aboraccoResponseId): AboraccoResponseLog
    {
        $this->aboraccoResponseId = $aboraccoResponseId;
        return $this;
    }

    /** @return int */
    public function getAboraccoResponseId(): int
    {
        return $this->aboraccoResponseId;
    }

    /**
     * @param int $aboraccoResponseLogId
     * @return AboraccoResponseLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoResponseLogId(int $aboraccoResponseLogId): AboraccoResponseLog
    {
        $this->aboraccoResponseLogId = $aboraccoResponseLogId;
        return $this;
    }

    /** @return int */
    public function getAboraccoResponseLogId(): int
    {
        return $this->aboraccoResponseLogId;
    }

    /**
     * @param DateTime $cTime
     * @return AboraccoResponseLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCTime(DateTime $cTime): AboraccoResponseLog
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
     * @return AboraccoResponseLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCUser(int $cUser): AboraccoResponseLog
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
     * @param string $label
     * @return AboraccoResponseLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setLabel(string $label): AboraccoResponseLog
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
     * @param DateTime $mTime
     * @return AboraccoResponseLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setMTime(DateTime $mTime): AboraccoResponseLog
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
     * @return AboraccoResponseLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setMUser(int $mUser): AboraccoResponseLog
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
     * @return AboraccoResponseLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setObsolete(int $obsolete): AboraccoResponseLog
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
     * @return AboraccoResponseLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setQuestionId(int $questionId): AboraccoResponseLog
    {
        $this->questionId = $questionId;
        return $this;
    }

    /** @return int */
    public function getQuestionId(): int
    {
        return $this->questionId;
    }
}

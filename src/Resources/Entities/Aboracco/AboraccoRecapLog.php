<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoRecapLog extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_recap_log';
    const PRIMARY_KEY  = 'aboracco_recap_log_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_ABORACCO_RECAP_ID = 'aboracco_recap_id';
    const LABEL_ABORACCO_RECAP_LOG_ID = 'aboracco_recap_log_id';
    const LABEL_C_TIME = 'c_time';
    const LABEL_C_USER = 'c_user';
    const LABEL_M_TIME = 'm_time';
    const LABEL_M_USER = 'm_user';
    const LABEL_QUESTION_ID = 'question_id';
    const LABEL_RESPONSE_ID = 'response_id';
    const LABEL_RESPONSE_TEXT = 'response_text';

    /** @var int $aboraccoRecapId */
    private int $aboraccoRecapId;

    /** @var int $aboraccoRecapLogId */
    private int $aboraccoRecapLogId;

    /** @var DateTime $cTime */
    private DateTime $cTime;

    /** @var int $cUser */
    private int $cUser;

    /** @var DateTime $mTime */
    private DateTime $mTime;

    /** @var int $mUser */
    private int $mUser;

    /** @var int $questionId */
    private int $questionId;

    /** @var int $responseId */
    private int $responseId;

    /** @var string $responseText */
    private string $responseText;


    /**
     * @param int $aboraccoRecapId
     * @return AboraccoRecapLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoRecapId(int $aboraccoRecapId): AboraccoRecapLog
    {
        $this->aboraccoRecapId = $aboraccoRecapId;
        return $this;
    }

    /** @return int */
    public function getAboraccoRecapId(): int
    {
        return $this->aboraccoRecapId;
    }

    /**
     * @param int $aboraccoRecapLogId
     * @return AboraccoRecapLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoRecapLogId(int $aboraccoRecapLogId): AboraccoRecapLog
    {
        $this->aboraccoRecapLogId = $aboraccoRecapLogId;
        return $this;
    }

    /** @return int */
    public function getAboraccoRecapLogId(): int
    {
        return $this->aboraccoRecapLogId;
    }

    /**
     * @param DateTime $cTime
     * @return AboraccoRecapLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCTime(DateTime $cTime): AboraccoRecapLog
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
     * @return AboraccoRecapLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCUser(int $cUser): AboraccoRecapLog
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
     * @param DateTime $mTime
     * @return AboraccoRecapLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setMTime(DateTime $mTime): AboraccoRecapLog
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
     * @return AboraccoRecapLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setMUser(int $mUser): AboraccoRecapLog
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
     * @param int $questionId
     * @return AboraccoRecapLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setQuestionId(int $questionId): AboraccoRecapLog
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
     * @return AboraccoRecapLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setResponseId(int $responseId): AboraccoRecapLog
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
     * @return AboraccoRecapLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setResponseText(string $responseText): AboraccoRecapLog
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

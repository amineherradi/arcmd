<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoQuestionLog extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_question_log';
    const PRIMARY_KEY  = 'aboracco_question_log_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_ABORACCO_QUESTION_ID = 'aboracco_question_id';
    const LABEL_ABORACCO_QUESTION_LOG_ID = 'aboracco_question_log_id';
    const LABEL_CUSTOM_RESPONSE = 'custom_response';
    const LABEL_C_TIME = 'c_time';
    const LABEL_C_USER = 'c_user';
    const LABEL_LABEL = 'label';
    const LABEL_M_TIME = 'm_time';
    const LABEL_M_USER = 'm_user';
    const LABEL_NEEDED = 'needed';
    const LABEL_OBSOLETE = 'obsolete';
    const LABEL_TYPE_ID = 'type_id';

    /** @var int $aboraccoQuestionId */
    private int $aboraccoQuestionId;

    /** @var int $aboraccoQuestionLogId */
    private int $aboraccoQuestionLogId;

    /** @var int $customResponse */
    private int $customResponse;

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

    /** @var int $needed */
    private int $needed;

    /** @var int $obsolete */
    private int $obsolete;

    /** @var int $typeId */
    private int $typeId;


    /**
     * @param int $aboraccoQuestionId
     * @return AboraccoQuestionLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoQuestionId(int $aboraccoQuestionId): AboraccoQuestionLog
    {
        $this->aboraccoQuestionId = $aboraccoQuestionId;
        return $this;
    }

    /** @return int */
    public function getAboraccoQuestionId(): int
    {
        return $this->aboraccoQuestionId;
    }

    /**
     * @param int $aboraccoQuestionLogId
     * @return AboraccoQuestionLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoQuestionLogId(int $aboraccoQuestionLogId): AboraccoQuestionLog
    {
        $this->aboraccoQuestionLogId = $aboraccoQuestionLogId;
        return $this;
    }

    /** @return int */
    public function getAboraccoQuestionLogId(): int
    {
        return $this->aboraccoQuestionLogId;
    }

    /**
     * @param int $customResponse
     * @return AboraccoQuestionLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCustomResponse(int $customResponse): AboraccoQuestionLog
    {
        $this->customResponse = $customResponse;
        return $this;
    }

    /** @return int */
    public function getCustomResponse(): int
    {
        return $this->customResponse;
    }

    /**
     * @param DateTime $cTime
     * @return AboraccoQuestionLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCTime(DateTime $cTime): AboraccoQuestionLog
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
     * @return AboraccoQuestionLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCUser(int $cUser): AboraccoQuestionLog
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
     * @return AboraccoQuestionLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setLabel(string $label): AboraccoQuestionLog
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
     * @return AboraccoQuestionLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setMTime(DateTime $mTime): AboraccoQuestionLog
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
     * @return AboraccoQuestionLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setMUser(int $mUser): AboraccoQuestionLog
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
     * @param int $needed
     * @return AboraccoQuestionLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNeeded(int $needed): AboraccoQuestionLog
    {
        $this->needed = $needed;
        return $this;
    }

    /** @return int */
    public function getNeeded(): int
    {
        return $this->needed;
    }

    /**
     * @param int $obsolete
     * @return AboraccoQuestionLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setObsolete(int $obsolete): AboraccoQuestionLog
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
     * @param int $typeId
     * @return AboraccoQuestionLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setTypeId(int $typeId): AboraccoQuestionLog
    {
        $this->typeId = $typeId;
        return $this;
    }

    /** @return int */
    public function getTypeId(): int
    {
        return $this->typeId;
    }
}

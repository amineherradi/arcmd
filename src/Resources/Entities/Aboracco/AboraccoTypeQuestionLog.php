<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoTypeQuestionLog extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_type_question_log';
    const PRIMARY_KEY  = 'aboracco_type_question_log_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_ABORACCO_TYPE_QUESTION_ID = 'aboracco_type_question_id';
    const LABEL_ABORACCO_TYPE_QUESTION_LOG_ID = 'aboracco_type_question_log_id';
    const LABEL_C_TIME = 'c_time';
    const LABEL_C_USER = 'c_user';
    const LABEL_M_TIME = 'm_time';
    const LABEL_M_USER = 'm_user';
    const LABEL_NOM = 'nom';
    const LABEL_TYPE_INTERVENTION_ID = 'type_intervention_id';

    /** @var int $aboraccoTypeQuestionId */
    private int $aboraccoTypeQuestionId;

    /** @var int $aboraccoTypeQuestionLogId */
    private int $aboraccoTypeQuestionLogId;

    /** @var DateTime $cTime */
    private DateTime $cTime;

    /** @var int $cUser */
    private int $cUser;

    /** @var DateTime $mTime */
    private DateTime $mTime;

    /** @var int $mUser */
    private int $mUser;

    /** @var string $nom */
    private string $nom;

    /** @var int $typeInterventionId */
    private int $typeInterventionId;


    /**
     * @param int $aboraccoTypeQuestionId
     * @return AboraccoTypeQuestionLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoTypeQuestionId(int $aboraccoTypeQuestionId): AboraccoTypeQuestionLog
    {
        $this->aboraccoTypeQuestionId = $aboraccoTypeQuestionId;
        return $this;
    }

    /** @return int */
    public function getAboraccoTypeQuestionId(): int
    {
        return $this->aboraccoTypeQuestionId;
    }

    /**
     * @param int $aboraccoTypeQuestionLogId
     * @return AboraccoTypeQuestionLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoTypeQuestionLogId(int $aboraccoTypeQuestionLogId): AboraccoTypeQuestionLog
    {
        $this->aboraccoTypeQuestionLogId = $aboraccoTypeQuestionLogId;
        return $this;
    }

    /** @return int */
    public function getAboraccoTypeQuestionLogId(): int
    {
        return $this->aboraccoTypeQuestionLogId;
    }

    /**
     * @param DateTime $cTime
     * @return AboraccoTypeQuestionLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCTime(DateTime $cTime): AboraccoTypeQuestionLog
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
     * @return AboraccoTypeQuestionLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCUser(int $cUser): AboraccoTypeQuestionLog
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
     * @return AboraccoTypeQuestionLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setMTime(DateTime $mTime): AboraccoTypeQuestionLog
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
     * @return AboraccoTypeQuestionLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setMUser(int $mUser): AboraccoTypeQuestionLog
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
     * @param string $nom
     * @return AboraccoTypeQuestionLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNom(string $nom): AboraccoTypeQuestionLog
    {
        $this->nom = $nom;
        return $this;
    }

    /** @return string */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param int $typeInterventionId
     * @return AboraccoTypeQuestionLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setTypeInterventionId(int $typeInterventionId): AboraccoTypeQuestionLog
    {
        $this->typeInterventionId = $typeInterventionId;
        return $this;
    }

    /** @return int */
    public function getTypeInterventionId(): int
    {
        return $this->typeInterventionId;
    }
}

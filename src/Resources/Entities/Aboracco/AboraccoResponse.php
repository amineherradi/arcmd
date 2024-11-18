<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoResponse extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_response';
    const PRIMARY_KEY  = 'id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'aboracco_blocage',
            self::COLUMN_NAME => 'aboracco_blocage_id',
        ],
        [
            self::REFERENCED_TABLE_NAME => 'aboracco_famille',
            self::COLUMN_NAME => 'aboracco_famille_id',
        ],
        [
            self::REFERENCED_TABLE_NAME => 'aboracco_question',
            self::COLUMN_NAME => 'question_id',
        ],
    ];

    const LABEL_ABORACCO_BLOCAGE_ID = 'aboracco_blocage_id';
    const LABEL_ABORACCO_FAMILLE_ID = 'aboracco_famille_id';
    const LABEL_ACTION_PPS = 'action_pps';
    const LABEL_C_TIME = 'c_time';
    const LABEL_C_USER = 'c_user';
    const LABEL_ID = 'id';
    const LABEL_LABEL = 'label';
    const LABEL_OBSOLETE = 'obsolete';
    const LABEL_POIDS_FACTU_PPS = 'poids_factu_pps';
    const LABEL_QUESTION_ID = 'question_id';

    /** @var int $aboraccoBlocageId */
    private int $aboraccoBlocageId;

    /** @var int $aboraccoFamilleId */
    private int $aboraccoFamilleId;

    /** @var string $actionPps */
    private string $actionPps;

    /** @var DateTime $cTime */
    private DateTime $cTime;

    /** @var int $cUser */
    private int $cUser;

    /** @var int $id */
    private int $id;

    /** @var string $label */
    private string $label;

    /** @var int $obsolete */
    private int $obsolete;

    /** @var int $poidsFactuPps */
    private int $poidsFactuPps;

    /** @var int $questionId */
    private int $questionId;


    /**
     * @param int $aboraccoBlocageId
     * @return AboraccoResponse
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoBlocageId(int $aboraccoBlocageId): AboraccoResponse
    {
        $this->aboraccoBlocageId = $aboraccoBlocageId;
        return $this;
    }

    /** @return int */
    public function getAboraccoBlocageId(): int
    {
        return $this->aboraccoBlocageId;
    }

    /**
     * @param int $aboraccoFamilleId
     * @return AboraccoResponse
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoFamilleId(int $aboraccoFamilleId): AboraccoResponse
    {
        $this->aboraccoFamilleId = $aboraccoFamilleId;
        return $this;
    }

    /** @return int */
    public function getAboraccoFamilleId(): int
    {
        return $this->aboraccoFamilleId;
    }

    /**
     * @param string $actionPps
     * @return AboraccoResponse
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setActionPps(string $actionPps): AboraccoResponse
    {
        $this->actionPps = $actionPps;
        return $this;
    }

    /** @return string */
    public function getActionPps(): string
    {
        return $this->actionPps;
    }

    /**
     * @param DateTime $cTime
     * @return AboraccoResponse
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCTime(DateTime $cTime): AboraccoResponse
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
     * @return AboraccoResponse
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCUser(int $cUser): AboraccoResponse
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
     * @return AboraccoResponse
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setId(int $id): AboraccoResponse
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
     * @param string $label
     * @return AboraccoResponse
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setLabel(string $label): AboraccoResponse
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
     * @param int $obsolete
     * @return AboraccoResponse
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setObsolete(int $obsolete): AboraccoResponse
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
     * @param int $poidsFactuPps
     * @return AboraccoResponse
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setPoidsFactuPps(int $poidsFactuPps): AboraccoResponse
    {
        $this->poidsFactuPps = $poidsFactuPps;
        return $this;
    }

    /** @return int */
    public function getPoidsFactuPps(): int
    {
        return $this->poidsFactuPps;
    }

    /**
     * @param int $questionId
     * @return AboraccoResponse
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setQuestionId(int $questionId): AboraccoResponse
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

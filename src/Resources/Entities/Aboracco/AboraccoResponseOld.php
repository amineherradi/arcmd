<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoResponseOld extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_response_old';
    const PRIMARY_KEY  = 'id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_ACTIONS_A_MENER = 'actions_a_mener';
    const LABEL_ACTIONS_MENEES = 'actions_menees';
    const LABEL_BESOIN_RDV = 'besoin_rdv';
    const LABEL_C_TIME = 'c_time';
    const LABEL_C_USER = 'c_user';
    const LABEL_DELAI_RESOLUTION = 'delai_resolution';
    const LABEL_ID = 'id';
    const LABEL_LABEL = 'label';
    const LABEL_OBSOLETE = 'obsolete';
    const LABEL_PRECISIONS_RDV = 'precisions_rdv';
    const LABEL_QUESTION_ID = 'question_id';

    /** @var string $actionsAMener */
    private string $actionsAMener;

    /** @var string $actionsMenees */
    private string $actionsMenees;

    /** @var int $besoinRdv */
    private int $besoinRdv;

    /** @var DateTime $cTime */
    private DateTime $cTime;

    /** @var int $cUser */
    private int $cUser;

    /** @var int $delaiResolution */
    private int $delaiResolution;

    /** @var int $id */
    private int $id;

    /** @var string $label */
    private string $label;

    /** @var int $obsolete */
    private int $obsolete;

    /** @var string $precisionsRdv */
    private string $precisionsRdv;

    /** @var int $questionId */
    private int $questionId;


    /**
     * @param string $actionsAMener
     * @return AboraccoResponseOld
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setActionsAMener(string $actionsAMener): AboraccoResponseOld
    {
        $this->actionsAMener = $actionsAMener;
        return $this;
    }

    /** @return string */
    public function getActionsAMener(): string
    {
        return $this->actionsAMener;
    }

    /**
     * @param string $actionsMenees
     * @return AboraccoResponseOld
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setActionsMenees(string $actionsMenees): AboraccoResponseOld
    {
        $this->actionsMenees = $actionsMenees;
        return $this;
    }

    /** @return string */
    public function getActionsMenees(): string
    {
        return $this->actionsMenees;
    }

    /**
     * @param int $besoinRdv
     * @return AboraccoResponseOld
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setBesoinRdv(int $besoinRdv): AboraccoResponseOld
    {
        $this->besoinRdv = $besoinRdv;
        return $this;
    }

    /** @return int */
    public function getBesoinRdv(): int
    {
        return $this->besoinRdv;
    }

    /**
     * @param DateTime $cTime
     * @return AboraccoResponseOld
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCTime(DateTime $cTime): AboraccoResponseOld
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
     * @return AboraccoResponseOld
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCUser(int $cUser): AboraccoResponseOld
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
     * @param int $delaiResolution
     * @return AboraccoResponseOld
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDelaiResolution(int $delaiResolution): AboraccoResponseOld
    {
        $this->delaiResolution = $delaiResolution;
        return $this;
    }

    /** @return int */
    public function getDelaiResolution(): int
    {
        return $this->delaiResolution;
    }

    /**
     * @param int $id
     * @return AboraccoResponseOld
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setId(int $id): AboraccoResponseOld
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
     * @return AboraccoResponseOld
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setLabel(string $label): AboraccoResponseOld
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
     * @return AboraccoResponseOld
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setObsolete(int $obsolete): AboraccoResponseOld
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
     * @param string $precisionsRdv
     * @return AboraccoResponseOld
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setPrecisionsRdv(string $precisionsRdv): AboraccoResponseOld
    {
        $this->precisionsRdv = $precisionsRdv;
        return $this;
    }

    /** @return string */
    public function getPrecisionsRdv(): string
    {
        return $this->precisionsRdv;
    }

    /**
     * @param int $questionId
     * @return AboraccoResponseOld
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setQuestionId(int $questionId): AboraccoResponseOld
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

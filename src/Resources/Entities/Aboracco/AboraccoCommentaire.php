<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoCommentaire extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_commentaire';
    const PRIMARY_KEY  = 'commentaire_id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'intervention',
            self::COLUMN_NAME => 'intervention_id',
        ],
        [
            self::REFERENCED_TABLE_NAME => 'killi_user',
            self::COLUMN_NAME => 'user_id',
        ],
    ];

    const LABEL_COMMENTAIRE = 'commentaire';
    const LABEL_COMMENTAIRE_ID = 'commentaire_id';
    const LABEL_COMMENTAIRE_KO = 'commentaire_ko';
    const LABEL_C_DATE = 'c_date';
    const LABEL_INTERVENTION_ID = 'intervention_id';
    const LABEL_USER_ID = 'user_id';

    /** @var string $commentaire */
    private string $commentaire;

    /** @var int $commentaireId */
    private int $commentaireId;

    /** @var string $commentaireKo */
    private string $commentaireKo;

    /** @var DateTime $cDate */
    private DateTime $cDate;

    /** @var int $interventionId */
    private int $interventionId;

    /** @var int $userId */
    private int $userId;


    /**
     * @param string $commentaire
     * @return AboraccoCommentaire
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCommentaire(string $commentaire): AboraccoCommentaire
    {
        $this->commentaire = $commentaire;
        return $this;
    }

    /** @return string */
    public function getCommentaire(): string
    {
        return $this->commentaire;
    }

    /**
     * @param int $commentaireId
     * @return AboraccoCommentaire
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCommentaireId(int $commentaireId): AboraccoCommentaire
    {
        $this->commentaireId = $commentaireId;
        return $this;
    }

    /** @return int */
    public function getCommentaireId(): int
    {
        return $this->commentaireId;
    }

    /**
     * @param string $commentaireKo
     * @return AboraccoCommentaire
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCommentaireKo(string $commentaireKo): AboraccoCommentaire
    {
        $this->commentaireKo = $commentaireKo;
        return $this;
    }

    /** @return string */
    public function getCommentaireKo(): string
    {
        return $this->commentaireKo;
    }

    /**
     * @param DateTime $cDate
     * @return AboraccoCommentaire
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCDate(DateTime $cDate): AboraccoCommentaire
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
     * @param int $interventionId
     * @return AboraccoCommentaire
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setInterventionId(int $interventionId): AboraccoCommentaire
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
     * @param int $userId
     * @return AboraccoCommentaire
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setUserId(int $userId): AboraccoCommentaire
    {
        $this->userId = $userId;
        return $this;
    }

    /** @return int */
    public function getUserId(): int
    {
        return $this->userId;
    }
}

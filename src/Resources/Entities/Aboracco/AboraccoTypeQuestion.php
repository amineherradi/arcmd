<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoTypeQuestion extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_type_question';
    const PRIMARY_KEY  = 'id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'type_intervention',
            self::COLUMN_NAME => 'type_intervention_id',
        ],
    ];

    const LABEL_BETA = 'beta';
    const LABEL_C_TIME = 'c_time';
    const LABEL_C_USER = 'c_user';
    const LABEL_ID = 'id';
    const LABEL_NOM = 'nom';
    const LABEL_OBSOLETE = 'obsolete';
    const LABEL_TYPE_INTERVENTION_ID = 'type_intervention_id';

    /** @var int $beta */
    private int $beta;

    /** @var DateTime $cTime */
    private DateTime $cTime;

    /** @var int $cUser */
    private int $cUser;

    /** @var int $id */
    private int $id;

    /** @var string $nom */
    private string $nom;

    /** @var int $obsolete */
    private int $obsolete;

    /** @var int $typeInterventionId */
    private int $typeInterventionId;


    /**
     * @param int $beta
     * @return AboraccoTypeQuestion
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setBeta(int $beta): AboraccoTypeQuestion
    {
        $this->beta = $beta;
        return $this;
    }

    /** @return int */
    public function getBeta(): int
    {
        return $this->beta;
    }

    /**
     * @param DateTime $cTime
     * @return AboraccoTypeQuestion
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCTime(DateTime $cTime): AboraccoTypeQuestion
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
     * @return AboraccoTypeQuestion
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCUser(int $cUser): AboraccoTypeQuestion
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
     * @return AboraccoTypeQuestion
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setId(int $id): AboraccoTypeQuestion
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
     * @param string $nom
     * @return AboraccoTypeQuestion
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNom(string $nom): AboraccoTypeQuestion
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
     * @param int $obsolete
     * @return AboraccoTypeQuestion
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setObsolete(int $obsolete): AboraccoTypeQuestion
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
     * @param int $typeInterventionId
     * @return AboraccoTypeQuestion
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setTypeInterventionId(int $typeInterventionId): AboraccoTypeQuestion
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

<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoTypePhoto extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_type_photo';
    const PRIMARY_KEY  = 'type_photo_id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'type_intervention',
            self::COLUMN_NAME => 'type_intervention_id',
        ],
    ];

    const LABEL_C_TIME = 'c_time';
    const LABEL_C_USER = 'c_user';
    const LABEL_NOM = 'nom';
    const LABEL_OBSOLETE = 'obsolete';
    const LABEL_TYPE_INTERVENTION_ID = 'type_intervention_id';
    const LABEL_TYPE_PHOTO_ID = 'type_photo_id';

    /** @var DateTime $cTime */
    private DateTime $cTime;

    /** @var int $cUser */
    private int $cUser;

    /** @var string $nom */
    private string $nom;

    /** @var int $obsolete */
    private int $obsolete;

    /** @var int $typeInterventionId */
    private int $typeInterventionId;

    /** @var int $typePhotoId */
    private int $typePhotoId;


    /**
     * @param DateTime $cTime
     * @return AboraccoTypePhoto
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCTime(DateTime $cTime): AboraccoTypePhoto
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
     * @return AboraccoTypePhoto
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCUser(int $cUser): AboraccoTypePhoto
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
     * @param string $nom
     * @return AboraccoTypePhoto
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNom(string $nom): AboraccoTypePhoto
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
     * @return AboraccoTypePhoto
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setObsolete(int $obsolete): AboraccoTypePhoto
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
     * @return AboraccoTypePhoto
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setTypeInterventionId(int $typeInterventionId): AboraccoTypePhoto
    {
        $this->typeInterventionId = $typeInterventionId;
        return $this;
    }

    /** @return int */
    public function getTypeInterventionId(): int
    {
        return $this->typeInterventionId;
    }

    /**
     * @param int $typePhotoId
     * @return AboraccoTypePhoto
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setTypePhotoId(int $typePhotoId): AboraccoTypePhoto
    {
        $this->typePhotoId = $typePhotoId;
        return $this;
    }

    /** @return int */
    public function getTypePhotoId(): int
    {
        return $this->typePhotoId;
    }
}

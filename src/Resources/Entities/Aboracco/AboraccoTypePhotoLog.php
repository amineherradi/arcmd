<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoTypePhotoLog extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_type_photo_log';
    const PRIMARY_KEY  = 'aboracco_type_photo_log_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_ABORACCO_TYPE_PHOTO_ID = 'aboracco_type_photo_id';
    const LABEL_ABORACCO_TYPE_PHOTO_LOG_ID = 'aboracco_type_photo_log_id';
    const LABEL_C_TIME = 'c_time';
    const LABEL_C_USER = 'c_user';
    const LABEL_M_TIME = 'm_time';
    const LABEL_M_USER = 'm_user';
    const LABEL_NOM = 'nom';
    const LABEL_OBSOLETE = 'obsolete';
    const LABEL_TYPE_INTERVENTION_ID = 'type_intervention_id';

    /** @var int $aboraccoTypePhotoId */
    private int $aboraccoTypePhotoId;

    /** @var int $aboraccoTypePhotoLogId */
    private int $aboraccoTypePhotoLogId;

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

    /** @var int $obsolete */
    private int $obsolete;

    /** @var int $typeInterventionId */
    private int $typeInterventionId;


    /**
     * @param int $aboraccoTypePhotoId
     * @return AboraccoTypePhotoLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoTypePhotoId(int $aboraccoTypePhotoId): AboraccoTypePhotoLog
    {
        $this->aboraccoTypePhotoId = $aboraccoTypePhotoId;
        return $this;
    }

    /** @return int */
    public function getAboraccoTypePhotoId(): int
    {
        return $this->aboraccoTypePhotoId;
    }

    /**
     * @param int $aboraccoTypePhotoLogId
     * @return AboraccoTypePhotoLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoTypePhotoLogId(int $aboraccoTypePhotoLogId): AboraccoTypePhotoLog
    {
        $this->aboraccoTypePhotoLogId = $aboraccoTypePhotoLogId;
        return $this;
    }

    /** @return int */
    public function getAboraccoTypePhotoLogId(): int
    {
        return $this->aboraccoTypePhotoLogId;
    }

    /**
     * @param DateTime $cTime
     * @return AboraccoTypePhotoLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCTime(DateTime $cTime): AboraccoTypePhotoLog
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
     * @return AboraccoTypePhotoLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCUser(int $cUser): AboraccoTypePhotoLog
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
     * @return AboraccoTypePhotoLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setMTime(DateTime $mTime): AboraccoTypePhotoLog
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
     * @return AboraccoTypePhotoLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setMUser(int $mUser): AboraccoTypePhotoLog
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
     * @return AboraccoTypePhotoLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNom(string $nom): AboraccoTypePhotoLog
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
     * @return AboraccoTypePhotoLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setObsolete(int $obsolete): AboraccoTypePhotoLog
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
     * @return AboraccoTypePhotoLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setTypeInterventionId(int $typeInterventionId): AboraccoTypePhotoLog
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

<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoDeskCri extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_desk_cri';
    const PRIMARY_KEY  = 'id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'intervention',
            self::COLUMN_NAME => 'intervention_id',
        ],
    ];

    const LABEL_C_DATE = 'c_date';
    const LABEL_C_USER = 'c_user';
    const LABEL_DEBRIEF_UUID = 'debrief_uuid';
    const LABEL_FINISH = 'finish';
    const LABEL_ID = 'id';
    const LABEL_INTERVENTION_ID = 'intervention_id';
    const LABEL_M_DATE = 'm_date';
    const LABEL_M_USER = 'm_user';
    const LABEL_OBSOLETE = 'obsolete';

    /** @var DateTime $cDate */
    private DateTime $cDate;

    /** @var int $cUser */
    private int $cUser;

    /** @var string $debriefUuid */
    private string $debriefUuid;

    /** @var int $finish */
    private int $finish;

    /** @var int $id */
    private int $id;

    /** @var int $interventionId */
    private int $interventionId;

    /** @var DateTime $mDate */
    private DateTime $mDate;

    /** @var int $mUser */
    private int $mUser;

    /** @var int $obsolete */
    private int $obsolete;


    /**
     * @param DateTime $cDate
     * @return AboraccoDeskCri
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCDate(DateTime $cDate): AboraccoDeskCri
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
     * @param int $cUser
     * @return AboraccoDeskCri
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCUser(int $cUser): AboraccoDeskCri
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
     * @param string $debriefUuid
     * @return AboraccoDeskCri
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDebriefUuid(string $debriefUuid): AboraccoDeskCri
    {
        $this->debriefUuid = $debriefUuid;
        return $this;
    }

    /** @return string */
    public function getDebriefUuid(): string
    {
        return $this->debriefUuid;
    }

    /**
     * @param int $finish
     * @return AboraccoDeskCri
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setFinish(int $finish): AboraccoDeskCri
    {
        $this->finish = $finish;
        return $this;
    }

    /** @return int */
    public function getFinish(): int
    {
        return $this->finish;
    }

    /**
     * @param int $id
     * @return AboraccoDeskCri
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setId(int $id): AboraccoDeskCri
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
     * @param int $interventionId
     * @return AboraccoDeskCri
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setInterventionId(int $interventionId): AboraccoDeskCri
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
     * @param DateTime $mDate
     * @return AboraccoDeskCri
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setMDate(DateTime $mDate): AboraccoDeskCri
    {
        $this->mDate = $mDate;
        return $this;
    }

    /** @return DateTime */
    public function getMDate(): DateTime
    {
        return $this->mDate;
    }

    /**
     * @param int $mUser
     * @return AboraccoDeskCri
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setMUser(int $mUser): AboraccoDeskCri
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
     * @return AboraccoDeskCri
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setObsolete(int $obsolete): AboraccoDeskCri
    {
        $this->obsolete = $obsolete;
        return $this;
    }

    /** @return int */
    public function getObsolete(): int
    {
        return $this->obsolete;
    }
}

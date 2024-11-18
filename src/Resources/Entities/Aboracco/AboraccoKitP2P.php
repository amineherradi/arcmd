<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoKitP2P extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_kit_p2p';
    const PRIMARY_KEY  = 'aboracco_kit_p2p_id';
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

    const LABEL_ABORACCO_KIT_P2P_ID = 'aboracco_kit_p2p_id';
    const LABEL_CREATION_DATE = 'creation_date';
    const LABEL_INTERVENTION_ID = 'intervention_id';
    const LABEL_JETON = 'jeton';
    const LABEL_SN = 'sn';
    const LABEL_USER_ID = 'user_id';

    /** @var int $aboraccoKitP2PId */
    private int $aboraccoKitP2PId;

    /** @var DateTime $creationDate */
    private DateTime $creationDate;

    /** @var int $interventionId */
    private int $interventionId;

    /** @var string $jeton */
    private string $jeton;

    /** @var string $sn */
    private string $sn;

    /** @var int $userId */
    private int $userId;


    /**
     * @param int $aboraccoKitP2PId
     * @return AboraccoKitP2P
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoKitP2PId(int $aboraccoKitP2PId): AboraccoKitP2P
    {
        $this->aboraccoKitP2PId = $aboraccoKitP2PId;
        return $this;
    }

    /** @return int */
    public function getAboraccoKitP2PId(): int
    {
        return $this->aboraccoKitP2PId;
    }

    /**
     * @param DateTime $creationDate
     * @return AboraccoKitP2P
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCreationDate(DateTime $creationDate): AboraccoKitP2P
    {
        $this->creationDate = $creationDate;
        return $this;
    }

    /** @return DateTime */
    public function getCreationDate(): DateTime
    {
        return $this->creationDate;
    }

    /**
     * @param int $interventionId
     * @return AboraccoKitP2P
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setInterventionId(int $interventionId): AboraccoKitP2P
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
     * @param string $jeton
     * @return AboraccoKitP2P
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setJeton(string $jeton): AboraccoKitP2P
    {
        $this->jeton = $jeton;
        return $this;
    }

    /** @return string */
    public function getJeton(): string
    {
        return $this->jeton;
    }

    /**
     * @param string $sn
     * @return AboraccoKitP2P
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setSn(string $sn): AboraccoKitP2P
    {
        $this->sn = $sn;
        return $this;
    }

    /** @return string */
    public function getSn(): string
    {
        return $this->sn;
    }

    /**
     * @param int $userId
     * @return AboraccoKitP2P
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setUserId(int $userId): AboraccoKitP2P
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

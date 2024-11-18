<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoSfp extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_sfp';
    const PRIMARY_KEY  = 'aboracco_sfp_id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'killi_user',
            self::COLUMN_NAME => 'input_user_id',
        ],
        [
            self::REFERENCED_TABLE_NAME => 'killi_user',
            self::COLUMN_NAME => 'killi_user_id',
        ],
    ];

    const LABEL_ABORACCO_SFP_ID = 'aboracco_sfp_id';
    const LABEL_CREATION_DATE = 'creation_date';
    const LABEL_INPUT_USER_ID = 'input_user_id';
    const LABEL_INTERVENTION_ID = 'intervention_id';
    const LABEL_JETON = 'jeton';
    const LABEL_KILLI_USER_ID = 'killi_user_id';
    const LABEL_SN = 'sn';

    /** @var int $aboraccoSfpId */
    private int $aboraccoSfpId;

    /** @var DateTime $creationDate */
    private DateTime $creationDate;

    /** @var int $inputUserId */
    private int $inputUserId;

    /** @var int $interventionId */
    private int $interventionId;

    /** @var string $jeton */
    private string $jeton;

    /** @var int $killiUserId */
    private int $killiUserId;

    /** @var string $sn */
    private string $sn;


    /**
     * @param int $aboraccoSfpId
     * @return AboraccoSfp
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoSfpId(int $aboraccoSfpId): AboraccoSfp
    {
        $this->aboraccoSfpId = $aboraccoSfpId;
        return $this;
    }

    /** @return int */
    public function getAboraccoSfpId(): int
    {
        return $this->aboraccoSfpId;
    }

    /**
     * @param DateTime $creationDate
     * @return AboraccoSfp
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCreationDate(DateTime $creationDate): AboraccoSfp
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
     * @param int $inputUserId
     * @return AboraccoSfp
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setInputUserId(int $inputUserId): AboraccoSfp
    {
        $this->inputUserId = $inputUserId;
        return $this;
    }

    /** @return int */
    public function getInputUserId(): int
    {
        return $this->inputUserId;
    }

    /**
     * @param int $interventionId
     * @return AboraccoSfp
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setInterventionId(int $interventionId): AboraccoSfp
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
     * @return AboraccoSfp
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setJeton(string $jeton): AboraccoSfp
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
     * @param int $killiUserId
     * @return AboraccoSfp
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setKilliUserId(int $killiUserId): AboraccoSfp
    {
        $this->killiUserId = $killiUserId;
        return $this;
    }

    /** @return int */
    public function getKilliUserId(): int
    {
        return $this->killiUserId;
    }

    /**
     * @param string $sn
     * @return AboraccoSfp
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setSn(string $sn): AboraccoSfp
    {
        $this->sn = $sn;
        return $this;
    }

    /** @return string */
    public function getSn(): string
    {
        return $this->sn;
    }
}

<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoUserActivite extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_user_activite';
    const PRIMARY_KEY  = 'aboracco_user_activite_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_ABORACCO_ACTIVITE_ID = 'aboracco_activite_id';
    const LABEL_ABORACCO_USER_ACTIVITE_ID = 'aboracco_user_activite_id';
    const LABEL_KILLI_USER_ID = 'killi_user_id';

    /** @var int $aboraccoActiviteId */
    private int $aboraccoActiviteId;

    /** @var int $aboraccoUserActiviteId */
    private int $aboraccoUserActiviteId;

    /** @var int $killiUserId */
    private int $killiUserId;


    /**
     * @param int $aboraccoActiviteId
     * @return AboraccoUserActivite
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoActiviteId(int $aboraccoActiviteId): AboraccoUserActivite
    {
        $this->aboraccoActiviteId = $aboraccoActiviteId;
        return $this;
    }

    /** @return int */
    public function getAboraccoActiviteId(): int
    {
        return $this->aboraccoActiviteId;
    }

    /**
     * @param int $aboraccoUserActiviteId
     * @return AboraccoUserActivite
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoUserActiviteId(int $aboraccoUserActiviteId): AboraccoUserActivite
    {
        $this->aboraccoUserActiviteId = $aboraccoUserActiviteId;
        return $this;
    }

    /** @return int */
    public function getAboraccoUserActiviteId(): int
    {
        return $this->aboraccoUserActiviteId;
    }

    /**
     * @param int $killiUserId
     * @return AboraccoUserActivite
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setKilliUserId(int $killiUserId): AboraccoUserActivite
    {
        $this->killiUserId = $killiUserId;
        return $this;
    }

    /** @return int */
    public function getKilliUserId(): int
    {
        return $this->killiUserId;
    }
}

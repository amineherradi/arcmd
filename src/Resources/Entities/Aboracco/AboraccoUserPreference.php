<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoUserPreference extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_user_preference';
    const PRIMARY_KEY  = 'id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_COLOR = 'color';
    const LABEL_DARK = 'dark';
    const LABEL_ID = 'id';
    const LABEL_KILLI_USER_ID = 'killi_user_id';

    /** @var string $color */
    private string $color;

    /** @var int $dark */
    private int $dark;

    /** @var int $id */
    private int $id;

    /** @var int $killiUserId */
    private int $killiUserId;


    /**
     * @param string $color
     * @return AboraccoUserPreference
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setColor(string $color): AboraccoUserPreference
    {
        $this->color = $color;
        return $this;
    }

    /** @return string */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param int $dark
     * @return AboraccoUserPreference
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDark(int $dark): AboraccoUserPreference
    {
        $this->dark = $dark;
        return $this;
    }

    /** @return int */
    public function getDark(): int
    {
        return $this->dark;
    }

    /**
     * @param int $id
     * @return AboraccoUserPreference
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setId(int $id): AboraccoUserPreference
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
     * @param int $killiUserId
     * @return AboraccoUserPreference
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setKilliUserId(int $killiUserId): AboraccoUserPreference
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

<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoRecapProvider extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_recap_provider';
    const PRIMARY_KEY  = 'recap_provider_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_C_DATE = 'c_date';
    const LABEL_C_USER = 'c_user';
    const LABEL_LABEL = 'label';
    const LABEL_RECAP_PROVIDER_ID = 'recap_provider_id';

    /** @var DateTime $cDate */
    private DateTime $cDate;

    /** @var int $cUser */
    private int $cUser;

    /** @var string $label */
    private string $label;

    /** @var int $recapProviderId */
    private int $recapProviderId;


    /**
     * @param DateTime $cDate
     * @return AboraccoRecapProvider
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCDate(DateTime $cDate): AboraccoRecapProvider
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
     * @return AboraccoRecapProvider
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCUser(int $cUser): AboraccoRecapProvider
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
     * @param string $label
     * @return AboraccoRecapProvider
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setLabel(string $label): AboraccoRecapProvider
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
     * @param int $recapProviderId
     * @return AboraccoRecapProvider
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setRecapProviderId(int $recapProviderId): AboraccoRecapProvider
    {
        $this->recapProviderId = $recapProviderId;
        return $this;
    }

    /** @return int */
    public function getRecapProviderId(): int
    {
        return $this->recapProviderId;
    }
}

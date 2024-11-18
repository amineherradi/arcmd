<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoGrdvError extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_grdv_error';
    const PRIMARY_KEY  = 'grdv_error_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_C_DATE = 'c_date';
    const LABEL_C_USER = 'c_user';
    const LABEL_FUNCTION = 'function';
    const LABEL_GRDV_DATA = 'grdv_data';
    const LABEL_GRDV_ERROR_ID = 'grdv_error_id';
    const LABEL_LABEL = 'label';

    /** @var DateTime $cDate */
    private DateTime $cDate;

    /** @var int $cUser */
    private int $cUser;

    /** @var string $function */
    private string $function;

    /** @var string $grdvData */
    private string $grdvData;

    /** @var int $grdvErrorId */
    private int $grdvErrorId;

    /** @var string $label */
    private string $label;


    /**
     * @param DateTime $cDate
     * @return AboraccoGrdvError
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCDate(DateTime $cDate): AboraccoGrdvError
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
     * @return AboraccoGrdvError
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCUser(int $cUser): AboraccoGrdvError
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
     * @param string $function
     * @return AboraccoGrdvError
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setFunction(string $function): AboraccoGrdvError
    {
        $this->function = $function;
        return $this;
    }

    /** @return string */
    public function getFunction(): string
    {
        return $this->function;
    }

    /**
     * @param string $grdvData
     * @return AboraccoGrdvError
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setGrdvData(string $grdvData): AboraccoGrdvError
    {
        $this->grdvData = $grdvData;
        return $this;
    }

    /** @return string */
    public function getGrdvData(): string
    {
        return $this->grdvData;
    }

    /**
     * @param int $grdvErrorId
     * @return AboraccoGrdvError
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setGrdvErrorId(int $grdvErrorId): AboraccoGrdvError
    {
        $this->grdvErrorId = $grdvErrorId;
        return $this;
    }

    /** @return int */
    public function getGrdvErrorId(): int
    {
        return $this->grdvErrorId;
    }

    /**
     * @param string $label
     * @return AboraccoGrdvError
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setLabel(string $label): AboraccoGrdvError
    {
        $this->label = $label;
        return $this;
    }

    /** @return string */
    public function getLabel(): string
    {
        return $this->label;
    }
}

<?php

namespace Amine\Arcmd\Resources\Entities\Adresse;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AdressePhfm extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'adresse_phfm';
    const PRIMARY_KEY  = 'adresse_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_ADRESSE_ID = 'adresse_id';
    const LABEL_CDP = 'cdp';
    const LABEL_TASK_NAME = 'task_name';

    /** @var int $adresseId */
    private int $adresseId;

    /** @var string $cdp */
    private string $cdp;

    /** @var string $taskName */
    private string $taskName;


    /**
     * @param int $adresseId
     * @return AdressePhfm
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseId(int $adresseId): AdressePhfm
    {
        $this->adresseId = $adresseId;
        return $this;
    }

    /** @return int */
    public function getAdresseId(): int
    {
        return $this->adresseId;
    }

    /**
     * @param string $cdp
     * @return AdressePhfm
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCdp(string $cdp): AdressePhfm
    {
        $this->cdp = $cdp;
        return $this;
    }

    /** @return string */
    public function getCdp(): string
    {
        return $this->cdp;
    }

    /**
     * @param string $taskName
     * @return AdressePhfm
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setTaskName(string $taskName): AdressePhfm
    {
        $this->taskName = $taskName;
        return $this;
    }

    /** @return string */
    public function getTaskName(): string
    {
        return $this->taskName;
    }
}

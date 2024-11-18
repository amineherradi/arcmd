<?php

namespace Amine\Arcmd\Resources\Entities\Adresse;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AdresseCapa extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'adresse_capa';
    const PRIMARY_KEY  = 'adresse_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_ADRESSE_ID = 'adresse_id';
    const LABEL_CAPA = 'capa';

    /** @var int $adresseId */
    private int $adresseId;

    /** @var string $capa */
    private string $capa;


    /**
     * @param int $adresseId
     * @return AdresseCapa
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseId(int $adresseId): AdresseCapa
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
     * @param string $capa
     * @return AdresseCapa
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCapa(string $capa): AdresseCapa
    {
        $this->capa = $capa;
        return $this;
    }

    /** @return string */
    public function getCapa(): string
    {
        return $this->capa;
    }
}

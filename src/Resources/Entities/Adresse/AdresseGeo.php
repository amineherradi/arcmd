<?php

namespace Amine\Arcmd\Resources\Entities\Adresse;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AdresseGeo extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'adresse_geo';
    const PRIMARY_KEY  = 'adresse_geo_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_ADRESSE_GEO_ID = 'adresse_geo_id';
    const LABEL_ADRESSE_ID = 'adresse_id';
    const LABEL_HEADING = 'heading';
    const LABEL_LAT = 'lat';
    const LABEL_LNG = 'lng';

    /** @var int $adresseGeoId */
    private int $adresseGeoId;

    /** @var int $adresseId */
    private int $adresseId;

    /** @var string $heading */
    private string $heading;

    /** @var string $lat */
    private string $lat;

    /** @var string $lng */
    private string $lng;


    /**
     * @param int $adresseGeoId
     * @return AdresseGeo
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseGeoId(int $adresseGeoId): AdresseGeo
    {
        $this->adresseGeoId = $adresseGeoId;
        return $this;
    }

    /** @return int */
    public function getAdresseGeoId(): int
    {
        return $this->adresseGeoId;
    }

    /**
     * @param int $adresseId
     * @return AdresseGeo
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseId(int $adresseId): AdresseGeo
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
     * @param string $heading
     * @return AdresseGeo
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setHeading(string $heading): AdresseGeo
    {
        $this->heading = $heading;
        return $this;
    }

    /** @return string */
    public function getHeading(): string
    {
        return $this->heading;
    }

    /**
     * @param string $lat
     * @return AdresseGeo
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setLat(string $lat): AdresseGeo
    {
        $this->lat = $lat;
        return $this;
    }

    /** @return string */
    public function getLat(): string
    {
        return $this->lat;
    }

    /**
     * @param string $lng
     * @return AdresseGeo
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setLng(string $lng): AdresseGeo
    {
        $this->lng = $lng;
        return $this;
    }

    /** @return string */
    public function getLng(): string
    {
        return $this->lng;
    }
}

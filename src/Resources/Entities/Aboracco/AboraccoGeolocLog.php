<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoGeolocLog extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_geoloc_log';
    const PRIMARY_KEY  = 'id';
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

    const LABEL_CREATED_AT = 'created_at';
    const LABEL_ID = 'id';
    const LABEL_INTERVENTION_ID = 'intervention_id';
    const LABEL_INTERVENTION_LOCATIONS = 'intervention_locations';
    const LABEL_INTERVENTION_LOCATION_USED = 'intervention_location_used';
    const LABEL_MEASURED_DISTANCE = 'measured_distance';
    const LABEL_USER_ID = 'user_id';
    const LABEL_USER_LOCATION = 'user_location';

    /** @var DateTime $createdAt */
    private DateTime $createdAt;

    /** @var int $id */
    private int $id;

    /** @var int $interventionId */
    private int $interventionId;

    /** @var string $interventionLocations */
    private string $interventionLocations;

    /** @var int $interventionLocationUsed */
    private int $interventionLocationUsed;

    /** @var int $measuredDistance */
    private int $measuredDistance;

    /** @var int $userId */
    private int $userId;

    /** @var int $userLocation */
    private int $userLocation;


    /**
     * @param DateTime $createdAt
     * @return AboraccoGeolocLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCreatedAt(DateTime $createdAt): AboraccoGeolocLog
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /** @return DateTime */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param int $id
     * @return AboraccoGeolocLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setId(int $id): AboraccoGeolocLog
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
     * @return AboraccoGeolocLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setInterventionId(int $interventionId): AboraccoGeolocLog
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
     * @param string $interventionLocations
     * @return AboraccoGeolocLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setInterventionLocations(string $interventionLocations): AboraccoGeolocLog
    {
        $this->interventionLocations = $interventionLocations;
        return $this;
    }

    /** @return string */
    public function getInterventionLocations(): string
    {
        return $this->interventionLocations;
    }

    /**
     * @param int $interventionLocationUsed
     * @return AboraccoGeolocLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setInterventionLocationUsed(int $interventionLocationUsed): AboraccoGeolocLog
    {
        $this->interventionLocationUsed = $interventionLocationUsed;
        return $this;
    }

    /** @return int */
    public function getInterventionLocationUsed(): int
    {
        return $this->interventionLocationUsed;
    }

    /**
     * @param int $measuredDistance
     * @return AboraccoGeolocLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setMeasuredDistance(int $measuredDistance): AboraccoGeolocLog
    {
        $this->measuredDistance = $measuredDistance;
        return $this;
    }

    /** @return int */
    public function getMeasuredDistance(): int
    {
        return $this->measuredDistance;
    }

    /**
     * @param int $userId
     * @return AboraccoGeolocLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setUserId(int $userId): AboraccoGeolocLog
    {
        $this->userId = $userId;
        return $this;
    }

    /** @return int */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userLocation
     * @return AboraccoGeolocLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setUserLocation(int $userLocation): AboraccoGeolocLog
    {
        $this->userLocation = $userLocation;
        return $this;
    }

    /** @return int */
    public function getUserLocation(): int
    {
        return $this->userLocation;
    }
}

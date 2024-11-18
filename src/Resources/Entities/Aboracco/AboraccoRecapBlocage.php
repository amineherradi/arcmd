<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoRecapBlocage extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_recap_blocage';
    const PRIMARY_KEY  = 'aboracco_recap_blocage_id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'client',
            self::COLUMN_NAME => 'client_id',
        ],
        [
            self::REFERENCED_TABLE_NAME => 'intervention',
            self::COLUMN_NAME => 'intervention_id',
        ],
    ];

    const LABEL_ABORACCO_RECAP_BLOCAGE_ID = 'aboracco_recap_blocage_id';
    const LABEL_CLIENT_ID = 'client_id';
    const LABEL_DATE_CREATION = 'date_creation';
    const LABEL_INTERVENTION_ID = 'intervention_id';

    /** @var int $aboraccoRecapBlocageId */
    private int $aboraccoRecapBlocageId;

    /** @var int $clientId */
    private int $clientId;

    /** @var DateTime $dateCreation */
    private DateTime $dateCreation;

    /** @var int $interventionId */
    private int $interventionId;


    /**
     * @param int $aboraccoRecapBlocageId
     * @return AboraccoRecapBlocage
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoRecapBlocageId(int $aboraccoRecapBlocageId): AboraccoRecapBlocage
    {
        $this->aboraccoRecapBlocageId = $aboraccoRecapBlocageId;
        return $this;
    }

    /** @return int */
    public function getAboraccoRecapBlocageId(): int
    {
        return $this->aboraccoRecapBlocageId;
    }

    /**
     * @param int $clientId
     * @return AboraccoRecapBlocage
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setClientId(int $clientId): AboraccoRecapBlocage
    {
        $this->clientId = $clientId;
        return $this;
    }

    /** @return int */
    public function getClientId(): int
    {
        return $this->clientId;
    }

    /**
     * @param DateTime $dateCreation
     * @return AboraccoRecapBlocage
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDateCreation(DateTime $dateCreation): AboraccoRecapBlocage
    {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /** @return DateTime */
    public function getDateCreation(): DateTime
    {
        return $this->dateCreation;
    }

    /**
     * @param int $interventionId
     * @return AboraccoRecapBlocage
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setInterventionId(int $interventionId): AboraccoRecapBlocage
    {
        $this->interventionId = $interventionId;
        return $this;
    }

    /** @return int */
    public function getInterventionId(): int
    {
        return $this->interventionId;
    }
}

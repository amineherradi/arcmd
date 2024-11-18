<?php

namespace Amine\Arcmd\Resources\Entities\Abonne;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class Abonne extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'abonne';
    const PRIMARY_KEY  = 'client_id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'adresse',
            self::COLUMN_NAME => 'adresse_id',
        ],
        [
            self::REFERENCED_TABLE_NAME => 'nro',
            self::COLUMN_NAME => 'nro_id',
        ],
        [
            self::REFERENCED_TABLE_NAME => 'operateur',
            self::COLUMN_NAME => 'operateur_id',
        ],
        [
            self::REFERENCED_TABLE_NAME => 'boite',
            self::COLUMN_NAME => 'pto_id',
        ],
        [
            self::REFERENCED_TABLE_NAME => 'type_addu',
            self::COLUMN_NAME => 'type_addu_id',
        ],
        [
            self::REFERENCED_TABLE_NAME => 'zone',
            self::COLUMN_NAME => 'zone_id',
        ],
    ];

    const LABEL_ADRESSE_ID = 'adresse_id';
    const LABEL_ADSL = 'adsl';
    const LABEL_CLIENT_ID = 'client_id';
    const LABEL_CMD_ID = 'cmd_id';
    const LABEL_DATE_FIRST_RDV = 'date_first_rdv';
    const LABEL_DATE_FIRST_SYNC = 'date_first_sync';
    const LABEL_DATE_MODIFICATION = 'date_modification';
    const LABEL_DATE_RESIL = 'date_resil';
    const LABEL_DATE_SEND_BOX = 'date_send_box';
    const LABEL_NRO_ID = 'nro_id';
    const LABEL_OPERATEUR_ID = 'operateur_id';
    const LABEL_PTO_ID = 'pto_id';
    const LABEL_TYPE_ADDU_ID = 'type_addu_id';
    const LABEL_ZONE_ID = 'zone_id';

    /** @var int $adresseId */
    private int $adresseId;

    /** @var int $adsl */
    private int $adsl;

    /** @var int $clientId */
    private int $clientId;

    /** @var string $cmdId */
    private string $cmdId;

    /** @var string $dateFirstRdv */
    private string $dateFirstRdv;

    /** @var string $dateFirstSync */
    private string $dateFirstSync;

    /** @var DateTime $dateModification */
    private DateTime $dateModification;

    /** @var string $dateResil */
    private string $dateResil;

    /** @var string $dateSendBox */
    private string $dateSendBox;

    /** @var int $nroId */
    private int $nroId;

    /** @var int $operateurId */
    private int $operateurId;

    /** @var int $ptoId */
    private int $ptoId;

    /** @var int $typeAdduId */
    private int $typeAdduId;

    /** @var int $zoneId */
    private int $zoneId;


    /**
     * @param int $adresseId
     * @return Abonne
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseId(int $adresseId): Abonne
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
     * @param int $adsl
     * @return Abonne
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdsl(int $adsl): Abonne
    {
        $this->adsl = $adsl;
        return $this;
    }

    /** @return int */
    public function getAdsl(): int
    {
        return $this->adsl;
    }

    /**
     * @param int $clientId
     * @return Abonne
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setClientId(int $clientId): Abonne
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
     * @param string $cmdId
     * @return Abonne
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCmdId(string $cmdId): Abonne
    {
        $this->cmdId = $cmdId;
        return $this;
    }

    /** @return string */
    public function getCmdId(): string
    {
        return $this->cmdId;
    }

    /**
     * @param string $dateFirstRdv
     * @return Abonne
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDateFirstRdv(string $dateFirstRdv): Abonne
    {
        $this->dateFirstRdv = $dateFirstRdv;
        return $this;
    }

    /** @return string */
    public function getDateFirstRdv(): string
    {
        return $this->dateFirstRdv;
    }

    /**
     * @param string $dateFirstSync
     * @return Abonne
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDateFirstSync(string $dateFirstSync): Abonne
    {
        $this->dateFirstSync = $dateFirstSync;
        return $this;
    }

    /** @return string */
    public function getDateFirstSync(): string
    {
        return $this->dateFirstSync;
    }

    /**
     * @param DateTime $dateModification
     * @return Abonne
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDateModification(DateTime $dateModification): Abonne
    {
        $this->dateModification = $dateModification;
        return $this;
    }

    /** @return DateTime */
    public function getDateModification(): DateTime
    {
        return $this->dateModification;
    }

    /**
     * @param string $dateResil
     * @return Abonne
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDateResil(string $dateResil): Abonne
    {
        $this->dateResil = $dateResil;
        return $this;
    }

    /** @return string */
    public function getDateResil(): string
    {
        return $this->dateResil;
    }

    /**
     * @param string $dateSendBox
     * @return Abonne
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDateSendBox(string $dateSendBox): Abonne
    {
        $this->dateSendBox = $dateSendBox;
        return $this;
    }

    /** @return string */
    public function getDateSendBox(): string
    {
        return $this->dateSendBox;
    }

    /**
     * @param int $nroId
     * @return Abonne
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNroId(int $nroId): Abonne
    {
        $this->nroId = $nroId;
        return $this;
    }

    /** @return int */
    public function getNroId(): int
    {
        return $this->nroId;
    }

    /**
     * @param int $operateurId
     * @return Abonne
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setOperateurId(int $operateurId): Abonne
    {
        $this->operateurId = $operateurId;
        return $this;
    }

    /** @return int */
    public function getOperateurId(): int
    {
        return $this->operateurId;
    }

    /**
     * @param int $ptoId
     * @return Abonne
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setPtoId(int $ptoId): Abonne
    {
        $this->ptoId = $ptoId;
        return $this;
    }

    /** @return int */
    public function getPtoId(): int
    {
        return $this->ptoId;
    }

    /**
     * @param int $typeAdduId
     * @return Abonne
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setTypeAdduId(int $typeAdduId): Abonne
    {
        $this->typeAdduId = $typeAdduId;
        return $this;
    }

    /** @return int */
    public function getTypeAdduId(): int
    {
        return $this->typeAdduId;
    }

    /**
     * @param int $zoneId
     * @return Abonne
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setZoneId(int $zoneId): Abonne
    {
        $this->zoneId = $zoneId;
        return $this;
    }

    /** @return int */
    public function getZoneId(): int
    {
        return $this->zoneId;
    }
}

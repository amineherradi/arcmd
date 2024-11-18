<?php

namespace Amine\Arcmd\Resources\Entities\Adresse;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AdresseAttributes extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'adresse_attributes';
    const PRIMARY_KEY  = 'adresse_id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'filiere',
            self::COLUMN_NAME => 'filiere_id',
        ],
        [
            self::REFERENCED_TABLE_NAME => 'operateur',
            self::COLUMN_NAME => 'operateur_typologie_id',
        ],
    ];

    const LABEL_ADRESSE_ID = 'adresse_id';
    const LABEL_CAPA = 'capa';
    const LABEL_FILIERE_ID = 'filiere_id';
    const LABEL_FILIERE_LOCKED = 'filiere_locked';
    const LABEL_NUMERO_COMMANDE_FT = 'numero_commande_ft';
    const LABEL_OLD_CABLE_ID = 'old_cable_id';
    const LABEL_OLD_NRO_ID = 'old_nro_id';
    const LABEL_OPERATEUR_TYPOLOGIE_ID = 'operateur_typologie_id';
    const LABEL_PON = 'pon';

    /** @var int $adresseId */
    private int $adresseId;

    /** @var string $capa */
    private string $capa;

    /** @var int $filiereId */
    private int $filiereId;

    /** @var string $filiereLocked */
    private string $filiereLocked;

    /** @var int $numeroCommandeFt */
    private int $numeroCommandeFt;

    /** @var int $oldCableId */
    private int $oldCableId;

    /** @var int $oldNroId */
    private int $oldNroId;

    /** @var int $operateurTypologieId */
    private int $operateurTypologieId;

    /** @var int $pon */
    private int $pon;


    /**
     * @param int $adresseId
     * @return AdresseAttributes
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseId(int $adresseId): AdresseAttributes
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
     * @return AdresseAttributes
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCapa(string $capa): AdresseAttributes
    {
        $this->capa = $capa;
        return $this;
    }

    /** @return string */
    public function getCapa(): string
    {
        return $this->capa;
    }

    /**
     * @param int $filiereId
     * @return AdresseAttributes
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setFiliereId(int $filiereId): AdresseAttributes
    {
        $this->filiereId = $filiereId;
        return $this;
    }

    /** @return int */
    public function getFiliereId(): int
    {
        return $this->filiereId;
    }

    /**
     * @param string $filiereLocked
     * @return AdresseAttributes
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setFiliereLocked(string $filiereLocked): AdresseAttributes
    {
        $this->filiereLocked = $filiereLocked;
        return $this;
    }

    /** @return string */
    public function getFiliereLocked(): string
    {
        return $this->filiereLocked;
    }

    /**
     * @param int $numeroCommandeFt
     * @return AdresseAttributes
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNumeroCommandeFt(int $numeroCommandeFt): AdresseAttributes
    {
        $this->numeroCommandeFt = $numeroCommandeFt;
        return $this;
    }

    /** @return int */
    public function getNumeroCommandeFt(): int
    {
        return $this->numeroCommandeFt;
    }

    /**
     * @param int $oldCableId
     * @return AdresseAttributes
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setOldCableId(int $oldCableId): AdresseAttributes
    {
        $this->oldCableId = $oldCableId;
        return $this;
    }

    /** @return int */
    public function getOldCableId(): int
    {
        return $this->oldCableId;
    }

    /**
     * @param int $oldNroId
     * @return AdresseAttributes
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setOldNroId(int $oldNroId): AdresseAttributes
    {
        $this->oldNroId = $oldNroId;
        return $this;
    }

    /** @return int */
    public function getOldNroId(): int
    {
        return $this->oldNroId;
    }

    /**
     * @param int $operateurTypologieId
     * @return AdresseAttributes
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setOperateurTypologieId(int $operateurTypologieId): AdresseAttributes
    {
        $this->operateurTypologieId = $operateurTypologieId;
        return $this;
    }

    /** @return int */
    public function getOperateurTypologieId(): int
    {
        return $this->operateurTypologieId;
    }

    /**
     * @param int $pon
     * @return AdresseAttributes
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setPon(int $pon): AdresseAttributes
    {
        $this->pon = $pon;
        return $this;
    }

    /** @return int */
    public function getPon(): int
    {
        return $this->pon;
    }
}

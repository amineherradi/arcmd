<?php

namespace Amine\Arcmd\Resources\Entities\Adresse;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class Adresse extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'adresse';
    const PRIMARY_KEY  = 'adresse_id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'cable',
            self::COLUMN_NAME => 'cable_id',
        ],
        [
            self::REFERENCED_TABLE_NAME => 'etat_infra',
            self::COLUMN_NAME => 'etat_id',
        ],
        [
            self::REFERENCED_TABLE_NAME => 'iris',
            self::COLUMN_NAME => 'iris_id',
        ],
        [
            self::REFERENCED_TABLE_NAME => 'modele_infra',
            self::COLUMN_NAME => 'modele_id',
        ],
        [
            self::REFERENCED_TABLE_NAME => 'nro',
            self::COLUMN_NAME => 'nro_id',
        ],
        [
            self::REFERENCED_TABLE_NAME => 'parc',
            self::COLUMN_NAME => 'parc',
        ],
        [
            self::REFERENCED_TABLE_NAME => 'voie',
            self::COLUMN_NAME => 'voie_id',
        ],
    ];

    const LABEL_ADDUCTION_FT = 'adduction_ft';
    const LABEL_ADRESSE_ACTIF = 'adresse_actif';
    const LABEL_ADRESSE_ID = 'adresse_id';
    const LABEL_ADRESSE_NUM = 'adresse_num';
    const LABEL_ADRESSE_SRC = 'adresse_src';
    const LABEL_ADRESSE_SRC_ID = 'adresse_src_id';
    const LABEL_ADRESSE_SUFFIXE = 'adresse_suffixe';
    const LABEL_ADRESSE_SUFFIXE_LONG = 'adresse_suffixe_long';
    const LABEL_CABLE_ID = 'cable_id';
    const LABEL_DATE_MODIFICATION = 'date_modification';
    const LABEL_DISTANCE_ADDUCTION = 'distance_adduction';
    const LABEL_ETAT_ID = 'etat_id';
    const LABEL_IRIS_ID = 'iris_id';
    const LABEL_MODELE_ID = 'modele_id';
    const LABEL_NOMBRE_ABO = 'nombre_abo';
    const LABEL_NOMBRE_BAL = 'nombre_bal';
    const LABEL_NOMBRE_LOGEMENT = 'nombre_logement';
    const LABEL_NRO_ID = 'nro_id';
    const LABEL_NUMERO_BRANCHEMENT_PARTICULIER = 'numero_branchement_particulier';
    const LABEL_PARC = 'parc';
    const LABEL_VOIE_ID = 'voie_id';

    /** @var int $adductionFt */
    private int $adductionFt;

    /** @var int $adresseActif */
    private int $adresseActif;

    /** @var int $adresseId */
    private int $adresseId;

    /** @var int $adresseNum */
    private int $adresseNum;

    /** @var int $adresseSrc */
    private int $adresseSrc;

    /** @var string $adresseSrcId */
    private string $adresseSrcId;

    /** @var string $adresseSuffixe */
    private string $adresseSuffixe;

    /** @var string $adresseSuffixeLong */
    private string $adresseSuffixeLong;

    /** @var int $cableId */
    private int $cableId;

    /** @var DateTime $dateModification */
    private DateTime $dateModification;

    /** @var int $distanceAdduction */
    private int $distanceAdduction;

    /** @var int $etatId */
    private int $etatId;

    /** @var int $irisId */
    private int $irisId;

    /** @var int $modeleId */
    private int $modeleId;

    /** @var int $nombreAbo */
    private int $nombreAbo;

    /** @var int $nombreBal */
    private int $nombreBal;

    /** @var int $nombreLogement */
    private int $nombreLogement;

    /** @var int $nroId */
    private int $nroId;

    /** @var string $numeroBranchementParticulier */
    private string $numeroBranchementParticulier;

    /** @var int $parc */
    private int $parc;

    /** @var int $voieId */
    private int $voieId;


    /**
     * @param int $adductionFt
     * @return Adresse
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdductionFt(int $adductionFt): Adresse
    {
        $this->adductionFt = $adductionFt;
        return $this;
    }

    /** @return int */
    public function getAdductionFt(): int
    {
        return $this->adductionFt;
    }

    /**
     * @param int $adresseActif
     * @return Adresse
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseActif(int $adresseActif): Adresse
    {
        $this->adresseActif = $adresseActif;
        return $this;
    }

    /** @return int */
    public function getAdresseActif(): int
    {
        return $this->adresseActif;
    }

    /**
     * @param int $adresseId
     * @return Adresse
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseId(int $adresseId): Adresse
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
     * @param int $adresseNum
     * @return Adresse
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseNum(int $adresseNum): Adresse
    {
        $this->adresseNum = $adresseNum;
        return $this;
    }

    /** @return int */
    public function getAdresseNum(): int
    {
        return $this->adresseNum;
    }

    /**
     * @param int $adresseSrc
     * @return Adresse
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseSrc(int $adresseSrc): Adresse
    {
        $this->adresseSrc = $adresseSrc;
        return $this;
    }

    /** @return int */
    public function getAdresseSrc(): int
    {
        return $this->adresseSrc;
    }

    /**
     * @param string $adresseSrcId
     * @return Adresse
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseSrcId(string $adresseSrcId): Adresse
    {
        $this->adresseSrcId = $adresseSrcId;
        return $this;
    }

    /** @return string */
    public function getAdresseSrcId(): string
    {
        return $this->adresseSrcId;
    }

    /**
     * @param string $adresseSuffixe
     * @return Adresse
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseSuffixe(string $adresseSuffixe): Adresse
    {
        $this->adresseSuffixe = $adresseSuffixe;
        return $this;
    }

    /** @return string */
    public function getAdresseSuffixe(): string
    {
        return $this->adresseSuffixe;
    }

    /**
     * @param string $adresseSuffixeLong
     * @return Adresse
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseSuffixeLong(string $adresseSuffixeLong): Adresse
    {
        $this->adresseSuffixeLong = $adresseSuffixeLong;
        return $this;
    }

    /** @return string */
    public function getAdresseSuffixeLong(): string
    {
        return $this->adresseSuffixeLong;
    }

    /**
     * @param int $cableId
     * @return Adresse
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCableId(int $cableId): Adresse
    {
        $this->cableId = $cableId;
        return $this;
    }

    /** @return int */
    public function getCableId(): int
    {
        return $this->cableId;
    }

    /**
     * @param DateTime $dateModification
     * @return Adresse
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDateModification(DateTime $dateModification): Adresse
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
     * @param int $distanceAdduction
     * @return Adresse
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDistanceAdduction(int $distanceAdduction): Adresse
    {
        $this->distanceAdduction = $distanceAdduction;
        return $this;
    }

    /** @return int */
    public function getDistanceAdduction(): int
    {
        return $this->distanceAdduction;
    }

    /**
     * @param int $etatId
     * @return Adresse
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setEtatId(int $etatId): Adresse
    {
        $this->etatId = $etatId;
        return $this;
    }

    /** @return int */
    public function getEtatId(): int
    {
        return $this->etatId;
    }

    /**
     * @param int $irisId
     * @return Adresse
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setIrisId(int $irisId): Adresse
    {
        $this->irisId = $irisId;
        return $this;
    }

    /** @return int */
    public function getIrisId(): int
    {
        return $this->irisId;
    }

    /**
     * @param int $modeleId
     * @return Adresse
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setModeleId(int $modeleId): Adresse
    {
        $this->modeleId = $modeleId;
        return $this;
    }

    /** @return int */
    public function getModeleId(): int
    {
        return $this->modeleId;
    }

    /**
     * @param int $nombreAbo
     * @return Adresse
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNombreAbo(int $nombreAbo): Adresse
    {
        $this->nombreAbo = $nombreAbo;
        return $this;
    }

    /** @return int */
    public function getNombreAbo(): int
    {
        return $this->nombreAbo;
    }

    /**
     * @param int $nombreBal
     * @return Adresse
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNombreBal(int $nombreBal): Adresse
    {
        $this->nombreBal = $nombreBal;
        return $this;
    }

    /** @return int */
    public function getNombreBal(): int
    {
        return $this->nombreBal;
    }

    /**
     * @param int $nombreLogement
     * @return Adresse
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNombreLogement(int $nombreLogement): Adresse
    {
        $this->nombreLogement = $nombreLogement;
        return $this;
    }

    /** @return int */
    public function getNombreLogement(): int
    {
        return $this->nombreLogement;
    }

    /**
     * @param int $nroId
     * @return Adresse
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNroId(int $nroId): Adresse
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
     * @param string $numeroBranchementParticulier
     * @return Adresse
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNumeroBranchementParticulier(string $numeroBranchementParticulier): Adresse
    {
        $this->numeroBranchementParticulier = $numeroBranchementParticulier;
        return $this;
    }

    /** @return string */
    public function getNumeroBranchementParticulier(): string
    {
        return $this->numeroBranchementParticulier;
    }

    /**
     * @param int $parc
     * @return Adresse
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setParc(int $parc): Adresse
    {
        $this->parc = $parc;
        return $this;
    }

    /** @return int */
    public function getParc(): int
    {
        return $this->parc;
    }

    /**
     * @param int $voieId
     * @return Adresse
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setVoieId(int $voieId): Adresse
    {
        $this->voieId = $voieId;
        return $this;
    }

    /** @return int */
    public function getVoieId(): int
    {
        return $this->voieId;
    }
}

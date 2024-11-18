<?php

namespace Amine\Arcmd\Resources\Entities\Adresse;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AdresseInfos extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'adresse_infos';
    const PRIMARY_KEY  = 'adresse_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_ADRESSE_ID = 'adresse_id';
    const LABEL_NB_BAL = 'nb_bal';
    const LABEL_NB_LIGNE_FT = 'nb_ligne_ft';
    const LABEL_NB_LIGNE_FT_PRO = 'nb_ligne_ft_pro';
    const LABEL_NB_LOGEMENT_RPIRIS = 'nb_logement_rpiris';
    const LABEL_NB_MENAGE_RPIRIS = 'nb_menage_rpiris';
    const LABEL_POPULATION_RPIRIS = 'population_rpiris';
    const LABEL_TYPE_HABITAT = 'type_habitat';

    /** @var int $adresseId */
    private int $adresseId;

    /** @var int $nbBal */
    private int $nbBal;

    /** @var int $nbLigneFt */
    private int $nbLigneFt;

    /** @var int $nbLigneFtPro */
    private int $nbLigneFtPro;

    /** @var string $nbLogementRpiris */
    private string $nbLogementRpiris;

    /** @var string $nbMenageRpiris */
    private string $nbMenageRpiris;

    /** @var string $populationRpiris */
    private string $populationRpiris;

    /** @var int $typeHabitat */
    private int $typeHabitat;


    /**
     * @param int $adresseId
     * @return AdresseInfos
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseId(int $adresseId): AdresseInfos
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
     * @param int $nbBal
     * @return AdresseInfos
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNbBal(int $nbBal): AdresseInfos
    {
        $this->nbBal = $nbBal;
        return $this;
    }

    /** @return int */
    public function getNbBal(): int
    {
        return $this->nbBal;
    }

    /**
     * @param int $nbLigneFt
     * @return AdresseInfos
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNbLigneFt(int $nbLigneFt): AdresseInfos
    {
        $this->nbLigneFt = $nbLigneFt;
        return $this;
    }

    /** @return int */
    public function getNbLigneFt(): int
    {
        return $this->nbLigneFt;
    }

    /**
     * @param int $nbLigneFtPro
     * @return AdresseInfos
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNbLigneFtPro(int $nbLigneFtPro): AdresseInfos
    {
        $this->nbLigneFtPro = $nbLigneFtPro;
        return $this;
    }

    /** @return int */
    public function getNbLigneFtPro(): int
    {
        return $this->nbLigneFtPro;
    }

    /**
     * @param string $nbLogementRpiris
     * @return AdresseInfos
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNbLogementRpiris(string $nbLogementRpiris): AdresseInfos
    {
        $this->nbLogementRpiris = $nbLogementRpiris;
        return $this;
    }

    /** @return string */
    public function getNbLogementRpiris(): string
    {
        return $this->nbLogementRpiris;
    }

    /**
     * @param string $nbMenageRpiris
     * @return AdresseInfos
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNbMenageRpiris(string $nbMenageRpiris): AdresseInfos
    {
        $this->nbMenageRpiris = $nbMenageRpiris;
        return $this;
    }

    /** @return string */
    public function getNbMenageRpiris(): string
    {
        return $this->nbMenageRpiris;
    }

    /**
     * @param string $populationRpiris
     * @return AdresseInfos
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setPopulationRpiris(string $populationRpiris): AdresseInfos
    {
        $this->populationRpiris = $populationRpiris;
        return $this;
    }

    /** @return string */
    public function getPopulationRpiris(): string
    {
        return $this->populationRpiris;
    }

    /**
     * @param int $typeHabitat
     * @return AdresseInfos
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setTypeHabitat(int $typeHabitat): AdresseInfos
    {
        $this->typeHabitat = $typeHabitat;
        return $this;
    }

    /** @return int */
    public function getTypeHabitat(): int
    {
        return $this->typeHabitat;
    }
}

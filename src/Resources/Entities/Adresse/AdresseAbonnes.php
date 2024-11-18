<?php

namespace Amine\Arcmd\Resources\Entities\Adresse;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AdresseAbonnes extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'adresse_abonnes';
    const PRIMARY_KEY  = 'adresse_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_ADRESSE_ID = 'adresse_id';
    const LABEL_NB_ABO_ADSL = 'nb_abo_adsl';
    const LABEL_NB_ABO_FTTH = 'nb_abo_ftth';
    const LABEL_NB_ABO_FTTH_FREE_OI_FREE = 'nb_abo_ftth_free_oi_free';
    const LABEL_NB_ABO_FTTH_FREE_OI_OPE13 = 'nb_abo_ftth_free_oi_ope13';
    const LABEL_NB_ABO_FTTH_OPE13_OI_FREE = 'nb_abo_ftth_ope13_oi_free';

    /** @var int $adresseId */
    private int $adresseId;

    /** @var int $nbAboAdsl */
    private int $nbAboAdsl;

    /** @var int $nbAboFtth */
    private int $nbAboFtth;

    /** @var int $nbAboFtthFreeOiFree */
    private int $nbAboFtthFreeOiFree;

    /** @var int $nbAboFtthFreeOiOpe13 */
    private int $nbAboFtthFreeOiOpe13;

    /** @var int $nbAboFtthOpe13OiFree */
    private int $nbAboFtthOpe13OiFree;


    /**
     * @param int $adresseId
     * @return AdresseAbonnes
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseId(int $adresseId): AdresseAbonnes
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
     * @param int $nbAboAdsl
     * @return AdresseAbonnes
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNbAboAdsl(int $nbAboAdsl): AdresseAbonnes
    {
        $this->nbAboAdsl = $nbAboAdsl;
        return $this;
    }

    /** @return int */
    public function getNbAboAdsl(): int
    {
        return $this->nbAboAdsl;
    }

    /**
     * @param int $nbAboFtth
     * @return AdresseAbonnes
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNbAboFtth(int $nbAboFtth): AdresseAbonnes
    {
        $this->nbAboFtth = $nbAboFtth;
        return $this;
    }

    /** @return int */
    public function getNbAboFtth(): int
    {
        return $this->nbAboFtth;
    }

    /**
     * @param int $nbAboFtthFreeOiFree
     * @return AdresseAbonnes
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNbAboFtthFreeOiFree(int $nbAboFtthFreeOiFree): AdresseAbonnes
    {
        $this->nbAboFtthFreeOiFree = $nbAboFtthFreeOiFree;
        return $this;
    }

    /** @return int */
    public function getNbAboFtthFreeOiFree(): int
    {
        return $this->nbAboFtthFreeOiFree;
    }

    /**
     * @param int $nbAboFtthFreeOiOpe13
     * @return AdresseAbonnes
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNbAboFtthFreeOiOpe13(int $nbAboFtthFreeOiOpe13): AdresseAbonnes
    {
        $this->nbAboFtthFreeOiOpe13 = $nbAboFtthFreeOiOpe13;
        return $this;
    }

    /** @return int */
    public function getNbAboFtthFreeOiOpe13(): int
    {
        return $this->nbAboFtthFreeOiOpe13;
    }

    /**
     * @param int $nbAboFtthOpe13OiFree
     * @return AdresseAbonnes
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNbAboFtthOpe13OiFree(int $nbAboFtthOpe13OiFree): AdresseAbonnes
    {
        $this->nbAboFtthOpe13OiFree = $nbAboFtthOpe13OiFree;
        return $this;
    }

    /** @return int */
    public function getNbAboFtthOpe13OiFree(): int
    {
        return $this->nbAboFtthOpe13OiFree;
    }
}

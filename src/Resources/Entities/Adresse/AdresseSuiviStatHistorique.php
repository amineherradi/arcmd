<?php

namespace Amine\Arcmd\Resources\Entities\Adresse;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AdresseSuiviStatHistorique extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'adresse_suivi_stat_historique';
    const PRIMARY_KEY  = 'adresse_suivi_stat_historique_id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'slot',
            self::COLUMN_NAME => 'slot_id',
        ],
    ];

    const LABEL_ADRESSE_SUIVI_STAT_HISTORIQUE_DATA = 'adresse_suivi_stat_historique_data';
    const LABEL_ADRESSE_SUIVI_STAT_HISTORIQUE_ID = 'adresse_suivi_stat_historique_id';
    const LABEL_ADRESSE_SUIVI_STAT_HISTORIQUE_SEMAINE = 'adresse_suivi_stat_historique_semaine';
    const LABEL_SLOT_ID = 'slot_id';
    const LABEL_TYPE_OEUVRE = 'type_oeuvre';

    /** @var string $adresseSuiviStatHistoriqueData */
    private string $adresseSuiviStatHistoriqueData;

    /** @var int $adresseSuiviStatHistoriqueId */
    private int $adresseSuiviStatHistoriqueId;

    /** @var string $adresseSuiviStatHistoriqueSemaine */
    private string $adresseSuiviStatHistoriqueSemaine;

    /** @var int $slotId */
    private int $slotId;

    /** @var int $typeOeuvre */
    private int $typeOeuvre;


    /**
     * @param string $adresseSuiviStatHistoriqueData
     * @return AdresseSuiviStatHistorique
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseSuiviStatHistoriqueData(string $adresseSuiviStatHistoriqueData): AdresseSuiviStatHistorique
    {
        $this->adresseSuiviStatHistoriqueData = $adresseSuiviStatHistoriqueData;
        return $this;
    }

    /** @return string */
    public function getAdresseSuiviStatHistoriqueData(): string
    {
        return $this->adresseSuiviStatHistoriqueData;
    }

    /**
     * @param int $adresseSuiviStatHistoriqueId
     * @return AdresseSuiviStatHistorique
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseSuiviStatHistoriqueId(int $adresseSuiviStatHistoriqueId): AdresseSuiviStatHistorique
    {
        $this->adresseSuiviStatHistoriqueId = $adresseSuiviStatHistoriqueId;
        return $this;
    }

    /** @return int */
    public function getAdresseSuiviStatHistoriqueId(): int
    {
        return $this->adresseSuiviStatHistoriqueId;
    }

    /**
     * @param string $adresseSuiviStatHistoriqueSemaine
     * @return AdresseSuiviStatHistorique
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseSuiviStatHistoriqueSemaine(string $adresseSuiviStatHistoriqueSemaine): AdresseSuiviStatHistorique
    {
        $this->adresseSuiviStatHistoriqueSemaine = $adresseSuiviStatHistoriqueSemaine;
        return $this;
    }

    /** @return string */
    public function getAdresseSuiviStatHistoriqueSemaine(): string
    {
        return $this->adresseSuiviStatHistoriqueSemaine;
    }

    /**
     * @param int $slotId
     * @return AdresseSuiviStatHistorique
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setSlotId(int $slotId): AdresseSuiviStatHistorique
    {
        $this->slotId = $slotId;
        return $this;
    }

    /** @return int */
    public function getSlotId(): int
    {
        return $this->slotId;
    }

    /**
     * @param int $typeOeuvre
     * @return AdresseSuiviStatHistorique
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setTypeOeuvre(int $typeOeuvre): AdresseSuiviStatHistorique
    {
        $this->typeOeuvre = $typeOeuvre;
        return $this;
    }

    /** @return int */
    public function getTypeOeuvre(): int
    {
        return $this->typeOeuvre;
    }
}

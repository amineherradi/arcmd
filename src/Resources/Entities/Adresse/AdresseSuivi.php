<?php

namespace Amine\Arcmd\Resources\Entities\Adresse;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AdresseSuivi extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'adresse_suivi';
    const PRIMARY_KEY  = 'adresse_suivi_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_ADRESSE_ID = 'adresse_id';
    const LABEL_ADRESSE_SUIVI_ID = 'adresse_suivi_id';
    const LABEL_BON_CMD_ID = 'bon_cmd_id';
    const LABEL_COMMENTAIRE = 'commentaire';
    const LABEL_COMMENTAIRE_LIBRE = 'commentaire_libre';
    const LABEL_COMMENTAIRE_LIBRE_ETUDE = 'commentaire_libre_etude';
    const LABEL_COMMENTAIRE_LIBRE_TRAVAUX_LIVRABLE = 'commentaire_libre_travaux_livrable';
    const LABEL_COMMENTAIRE_LIBRE_TRAVAUX_VALIDATION = 'commentaire_libre_travaux_validation';
    const LABEL_COMMENTAIRE_PLANIFICATION_ETUDE = 'commentaire_planification_etude';
    const LABEL_COMMENTAIRE_PLANIFICATION_TRAVAUX = 'commentaire_planification_travaux';
    const LABEL_COMMENTAIRE_TRAVAUX_AUDIT = 'commentaire_travaux_audit';

    /** @var int $adresseId */
    private int $adresseId;

    /** @var int $adresseSuiviId */
    private int $adresseSuiviId;

    /** @var int $bonCmdId */
    private int $bonCmdId;

    /** @var string $commentaire */
    private string $commentaire;

    /** @var string $commentaireLibre */
    private string $commentaireLibre;

    /** @var string $commentaireLibreEtude */
    private string $commentaireLibreEtude;

    /** @var string $commentaireLibreTravauxLivrable */
    private string $commentaireLibreTravauxLivrable;

    /** @var string $commentaireLibreTravauxValidation */
    private string $commentaireLibreTravauxValidation;

    /** @var string $commentairePlanificationEtude */
    private string $commentairePlanificationEtude;

    /** @var string $commentairePlanificationTravaux */
    private string $commentairePlanificationTravaux;

    /** @var string $commentaireTravauxAudit */
    private string $commentaireTravauxAudit;


    /**
     * @param int $adresseId
     * @return AdresseSuivi
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseId(int $adresseId): AdresseSuivi
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
     * @param int $adresseSuiviId
     * @return AdresseSuivi
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseSuiviId(int $adresseSuiviId): AdresseSuivi
    {
        $this->adresseSuiviId = $adresseSuiviId;
        return $this;
    }

    /** @return int */
    public function getAdresseSuiviId(): int
    {
        return $this->adresseSuiviId;
    }

    /**
     * @param int $bonCmdId
     * @return AdresseSuivi
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setBonCmdId(int $bonCmdId): AdresseSuivi
    {
        $this->bonCmdId = $bonCmdId;
        return $this;
    }

    /** @return int */
    public function getBonCmdId(): int
    {
        return $this->bonCmdId;
    }

    /**
     * @param string $commentaire
     * @return AdresseSuivi
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCommentaire(string $commentaire): AdresseSuivi
    {
        $this->commentaire = $commentaire;
        return $this;
    }

    /** @return string */
    public function getCommentaire(): string
    {
        return $this->commentaire;
    }

    /**
     * @param string $commentaireLibre
     * @return AdresseSuivi
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCommentaireLibre(string $commentaireLibre): AdresseSuivi
    {
        $this->commentaireLibre = $commentaireLibre;
        return $this;
    }

    /** @return string */
    public function getCommentaireLibre(): string
    {
        return $this->commentaireLibre;
    }

    /**
     * @param string $commentaireLibreEtude
     * @return AdresseSuivi
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCommentaireLibreEtude(string $commentaireLibreEtude): AdresseSuivi
    {
        $this->commentaireLibreEtude = $commentaireLibreEtude;
        return $this;
    }

    /** @return string */
    public function getCommentaireLibreEtude(): string
    {
        return $this->commentaireLibreEtude;
    }

    /**
     * @param string $commentaireLibreTravauxLivrable
     * @return AdresseSuivi
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCommentaireLibreTravauxLivrable(string $commentaireLibreTravauxLivrable): AdresseSuivi
    {
        $this->commentaireLibreTravauxLivrable = $commentaireLibreTravauxLivrable;
        return $this;
    }

    /** @return string */
    public function getCommentaireLibreTravauxLivrable(): string
    {
        return $this->commentaireLibreTravauxLivrable;
    }

    /**
     * @param string $commentaireLibreTravauxValidation
     * @return AdresseSuivi
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCommentaireLibreTravauxValidation(string $commentaireLibreTravauxValidation): AdresseSuivi
    {
        $this->commentaireLibreTravauxValidation = $commentaireLibreTravauxValidation;
        return $this;
    }

    /** @return string */
    public function getCommentaireLibreTravauxValidation(): string
    {
        return $this->commentaireLibreTravauxValidation;
    }

    /**
     * @param string $commentairePlanificationEtude
     * @return AdresseSuivi
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCommentairePlanificationEtude(string $commentairePlanificationEtude): AdresseSuivi
    {
        $this->commentairePlanificationEtude = $commentairePlanificationEtude;
        return $this;
    }

    /** @return string */
    public function getCommentairePlanificationEtude(): string
    {
        return $this->commentairePlanificationEtude;
    }

    /**
     * @param string $commentairePlanificationTravaux
     * @return AdresseSuivi
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCommentairePlanificationTravaux(string $commentairePlanificationTravaux): AdresseSuivi
    {
        $this->commentairePlanificationTravaux = $commentairePlanificationTravaux;
        return $this;
    }

    /** @return string */
    public function getCommentairePlanificationTravaux(): string
    {
        return $this->commentairePlanificationTravaux;
    }

    /**
     * @param string $commentaireTravauxAudit
     * @return AdresseSuivi
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCommentaireTravauxAudit(string $commentaireTravauxAudit): AdresseSuivi
    {
        $this->commentaireTravauxAudit = $commentaireTravauxAudit;
        return $this;
    }

    /** @return string */
    public function getCommentaireTravauxAudit(): string
    {
        return $this->commentaireTravauxAudit;
    }
}

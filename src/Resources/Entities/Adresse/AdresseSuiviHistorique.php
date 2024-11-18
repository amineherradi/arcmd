<?php

namespace Amine\Arcmd\Resources\Entities\Adresse;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AdresseSuiviHistorique extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'adresse_suivi_historique';
    const PRIMARY_KEY  = 'adresse_suivi_historique_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_ADRESSE_ECHEC = 'adresse_echec';
    const LABEL_ADRESSE_ID = 'adresse_id';
    const LABEL_ADRESSE_SUIVI_HISTORIQUE_ID = 'adresse_suivi_historique_id';
    const LABEL_ADRESSE_SUIVI_ID = 'adresse_suivi_id';
    const LABEL_ATTACHEMENT_VALIDE = 'attachement_valide';
    const LABEL_AUDIT_NOK_ETUDE = 'audit_nok_etude';
    const LABEL_AUDIT_OK_ETUDE = 'audit_ok_etude';
    const LABEL_AUDIT_PROTELCO = 'audit_protelco';
    const LABEL_BON_CMD_ID = 'bon_cmd_id';
    const LABEL_COMMENTAIRE = 'commentaire';
    const LABEL_COMMENTAIRE_LIBRE = 'commentaire_libre';
    const LABEL_COMMENTAIRE_LIBRE_ETUDE = 'commentaire_libre_etude';
    const LABEL_COMMENTAIRE_LIBRE_TRAVAUX_LIVRABLE = 'commentaire_libre_travaux_livrable';
    const LABEL_COMMENTAIRE_LIBRE_TRAVAUX_VALIDATION = 'commentaire_libre_travaux_validation';
    const LABEL_COMMENTAIRE_PLANIFICATION_ETUDE = 'commentaire_planification_etude';
    const LABEL_COMMENTAIRE_PLANIFICATION_TRAVAUX = 'commentaire_planification_travaux';
    const LABEL_COMMENTAIRE_TRAVAUX_AUDIT = 'commentaire_travaux_audit';
    const LABEL_DATE_AUDIT_PROTELCO = 'date_audit_protelco';
    const LABEL_DATE_LIVRAISON_FIN_OEUVRE_ETUDE = 'date_livraison_fin_oeuvre_etude';
    const LABEL_ELIGIBILITE = 'eligibilite';
    const LABEL_ETUDE_REALISEE = 'etude_realisee';
    const LABEL_JSON_LIVRABLES = 'json_livrables';
    const LABEL_LIVRABLE_CONFORME = 'livrable_conforme';
    const LABEL_OEUVRE_ETUDE_FACTURABLE = 'oeuvre_etude_facturable';
    const LABEL_OK_RACCO_FACTU = 'ok_racco_factu';
    const LABEL_PM_RECEPTIONNE = 'pm_receptionne';
    const LABEL_PREV_AUDIT = 'prev_audit';
    const LABEL_PREV_LIVRAISON_ETUDE = 'prev_livraison_etude';
    const LABEL_SEMAINE = 'semaine';
    const LABEL_SLOT_ID = 'slot_id';
    const LABEL_USER = 'user';

    /** @var int $adresseEchec */
    private int $adresseEchec;

    /** @var int $adresseId */
    private int $adresseId;

    /** @var int $adresseSuiviHistoriqueId */
    private int $adresseSuiviHistoriqueId;

    /** @var int $adresseSuiviId */
    private int $adresseSuiviId;

    /** @var int $attachementValide */
    private int $attachementValide;

    /** @var int $auditNokEtude */
    private int $auditNokEtude;

    /** @var int $auditOkEtude */
    private int $auditOkEtude;

    /** @var int $auditProtelco */
    private int $auditProtelco;

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

    /** @var string $dateAuditProtelco */
    private string $dateAuditProtelco;

    /** @var string $dateLivraisonFinOeuvreEtude */
    private string $dateLivraisonFinOeuvreEtude;

    /** @var int $eligibilite */
    private int $eligibilite;

    /** @var int $etudeRealisee */
    private int $etudeRealisee;

    /** @var string $jsonLivrables */
    private string $jsonLivrables;

    /** @var int $livrableConforme */
    private int $livrableConforme;

    /** @var int $oeuvreEtudeFacturable */
    private int $oeuvreEtudeFacturable;

    /** @var int $okRaccoFactu */
    private int $okRaccoFactu;

    /** @var int $pmReceptionne */
    private int $pmReceptionne;

    /** @var string $prevAudit */
    private string $prevAudit;

    /** @var string $prevLivraisonEtude */
    private string $prevLivraisonEtude;

    /** @var int $semaine */
    private int $semaine;

    /** @var int $slotId */
    private int $slotId;

    /** @var int $user */
    private int $user;


    /**
     * @param int $adresseEchec
     * @return AdresseSuiviHistorique
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseEchec(int $adresseEchec): AdresseSuiviHistorique
    {
        $this->adresseEchec = $adresseEchec;
        return $this;
    }

    /** @return int */
    public function getAdresseEchec(): int
    {
        return $this->adresseEchec;
    }

    /**
     * @param int $adresseId
     * @return AdresseSuiviHistorique
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseId(int $adresseId): AdresseSuiviHistorique
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
     * @param int $adresseSuiviHistoriqueId
     * @return AdresseSuiviHistorique
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseSuiviHistoriqueId(int $adresseSuiviHistoriqueId): AdresseSuiviHistorique
    {
        $this->adresseSuiviHistoriqueId = $adresseSuiviHistoriqueId;
        return $this;
    }

    /** @return int */
    public function getAdresseSuiviHistoriqueId(): int
    {
        return $this->adresseSuiviHistoriqueId;
    }

    /**
     * @param int $adresseSuiviId
     * @return AdresseSuiviHistorique
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseSuiviId(int $adresseSuiviId): AdresseSuiviHistorique
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
     * @param int $attachementValide
     * @return AdresseSuiviHistorique
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAttachementValide(int $attachementValide): AdresseSuiviHistorique
    {
        $this->attachementValide = $attachementValide;
        return $this;
    }

    /** @return int */
    public function getAttachementValide(): int
    {
        return $this->attachementValide;
    }

    /**
     * @param int $auditNokEtude
     * @return AdresseSuiviHistorique
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAuditNokEtude(int $auditNokEtude): AdresseSuiviHistorique
    {
        $this->auditNokEtude = $auditNokEtude;
        return $this;
    }

    /** @return int */
    public function getAuditNokEtude(): int
    {
        return $this->auditNokEtude;
    }

    /**
     * @param int $auditOkEtude
     * @return AdresseSuiviHistorique
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAuditOkEtude(int $auditOkEtude): AdresseSuiviHistorique
    {
        $this->auditOkEtude = $auditOkEtude;
        return $this;
    }

    /** @return int */
    public function getAuditOkEtude(): int
    {
        return $this->auditOkEtude;
    }

    /**
     * @param int $auditProtelco
     * @return AdresseSuiviHistorique
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAuditProtelco(int $auditProtelco): AdresseSuiviHistorique
    {
        $this->auditProtelco = $auditProtelco;
        return $this;
    }

    /** @return int */
    public function getAuditProtelco(): int
    {
        return $this->auditProtelco;
    }

    /**
     * @param int $bonCmdId
     * @return AdresseSuiviHistorique
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setBonCmdId(int $bonCmdId): AdresseSuiviHistorique
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
     * @return AdresseSuiviHistorique
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCommentaire(string $commentaire): AdresseSuiviHistorique
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
     * @return AdresseSuiviHistorique
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCommentaireLibre(string $commentaireLibre): AdresseSuiviHistorique
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
     * @return AdresseSuiviHistorique
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCommentaireLibreEtude(string $commentaireLibreEtude): AdresseSuiviHistorique
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
     * @return AdresseSuiviHistorique
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCommentaireLibreTravauxLivrable(string $commentaireLibreTravauxLivrable): AdresseSuiviHistorique
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
     * @return AdresseSuiviHistorique
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCommentaireLibreTravauxValidation(string $commentaireLibreTravauxValidation): AdresseSuiviHistorique
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
     * @return AdresseSuiviHistorique
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCommentairePlanificationEtude(string $commentairePlanificationEtude): AdresseSuiviHistorique
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
     * @return AdresseSuiviHistorique
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCommentairePlanificationTravaux(string $commentairePlanificationTravaux): AdresseSuiviHistorique
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
     * @return AdresseSuiviHistorique
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCommentaireTravauxAudit(string $commentaireTravauxAudit): AdresseSuiviHistorique
    {
        $this->commentaireTravauxAudit = $commentaireTravauxAudit;
        return $this;
    }

    /** @return string */
    public function getCommentaireTravauxAudit(): string
    {
        return $this->commentaireTravauxAudit;
    }

    /**
     * @param string $dateAuditProtelco
     * @return AdresseSuiviHistorique
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDateAuditProtelco(string $dateAuditProtelco): AdresseSuiviHistorique
    {
        $this->dateAuditProtelco = $dateAuditProtelco;
        return $this;
    }

    /** @return string */
    public function getDateAuditProtelco(): string
    {
        return $this->dateAuditProtelco;
    }

    /**
     * @param string $dateLivraisonFinOeuvreEtude
     * @return AdresseSuiviHistorique
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDateLivraisonFinOeuvreEtude(string $dateLivraisonFinOeuvreEtude): AdresseSuiviHistorique
    {
        $this->dateLivraisonFinOeuvreEtude = $dateLivraisonFinOeuvreEtude;
        return $this;
    }

    /** @return string */
    public function getDateLivraisonFinOeuvreEtude(): string
    {
        return $this->dateLivraisonFinOeuvreEtude;
    }

    /**
     * @param int $eligibilite
     * @return AdresseSuiviHistorique
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setEligibilite(int $eligibilite): AdresseSuiviHistorique
    {
        $this->eligibilite = $eligibilite;
        return $this;
    }

    /** @return int */
    public function getEligibilite(): int
    {
        return $this->eligibilite;
    }

    /**
     * @param int $etudeRealisee
     * @return AdresseSuiviHistorique
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setEtudeRealisee(int $etudeRealisee): AdresseSuiviHistorique
    {
        $this->etudeRealisee = $etudeRealisee;
        return $this;
    }

    /** @return int */
    public function getEtudeRealisee(): int
    {
        return $this->etudeRealisee;
    }

    /**
     * @param string $jsonLivrables
     * @return AdresseSuiviHistorique
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setJsonLivrables(string $jsonLivrables): AdresseSuiviHistorique
    {
        $this->jsonLivrables = $jsonLivrables;
        return $this;
    }

    /** @return string */
    public function getJsonLivrables(): string
    {
        return $this->jsonLivrables;
    }

    /**
     * @param int $livrableConforme
     * @return AdresseSuiviHistorique
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setLivrableConforme(int $livrableConforme): AdresseSuiviHistorique
    {
        $this->livrableConforme = $livrableConforme;
        return $this;
    }

    /** @return int */
    public function getLivrableConforme(): int
    {
        return $this->livrableConforme;
    }

    /**
     * @param int $oeuvreEtudeFacturable
     * @return AdresseSuiviHistorique
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setOeuvreEtudeFacturable(int $oeuvreEtudeFacturable): AdresseSuiviHistorique
    {
        $this->oeuvreEtudeFacturable = $oeuvreEtudeFacturable;
        return $this;
    }

    /** @return int */
    public function getOeuvreEtudeFacturable(): int
    {
        return $this->oeuvreEtudeFacturable;
    }

    /**
     * @param int $okRaccoFactu
     * @return AdresseSuiviHistorique
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setOkRaccoFactu(int $okRaccoFactu): AdresseSuiviHistorique
    {
        $this->okRaccoFactu = $okRaccoFactu;
        return $this;
    }

    /** @return int */
    public function getOkRaccoFactu(): int
    {
        return $this->okRaccoFactu;
    }

    /**
     * @param int $pmReceptionne
     * @return AdresseSuiviHistorique
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setPmReceptionne(int $pmReceptionne): AdresseSuiviHistorique
    {
        $this->pmReceptionne = $pmReceptionne;
        return $this;
    }

    /** @return int */
    public function getPmReceptionne(): int
    {
        return $this->pmReceptionne;
    }

    /**
     * @param string $prevAudit
     * @return AdresseSuiviHistorique
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setPrevAudit(string $prevAudit): AdresseSuiviHistorique
    {
        $this->prevAudit = $prevAudit;
        return $this;
    }

    /** @return string */
    public function getPrevAudit(): string
    {
        return $this->prevAudit;
    }

    /**
     * @param string $prevLivraisonEtude
     * @return AdresseSuiviHistorique
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setPrevLivraisonEtude(string $prevLivraisonEtude): AdresseSuiviHistorique
    {
        $this->prevLivraisonEtude = $prevLivraisonEtude;
        return $this;
    }

    /** @return string */
    public function getPrevLivraisonEtude(): string
    {
        return $this->prevLivraisonEtude;
    }

    /**
     * @param int $semaine
     * @return AdresseSuiviHistorique
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setSemaine(int $semaine): AdresseSuiviHistorique
    {
        $this->semaine = $semaine;
        return $this;
    }

    /** @return int */
    public function getSemaine(): int
    {
        return $this->semaine;
    }

    /**
     * @param int $slotId
     * @return AdresseSuiviHistorique
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setSlotId(int $slotId): AdresseSuiviHistorique
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
     * @param int $user
     * @return AdresseSuiviHistorique
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setUser(int $user): AdresseSuiviHistorique
    {
        $this->user = $user;
        return $this;
    }

    /** @return int */
    public function getUser(): int
    {
        return $this->user;
    }
}

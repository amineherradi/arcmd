<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoResponseMcraV2 extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_response_mcra_v2';
    const PRIMARY_KEY  = 'response_mcra_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_ACTION_AUTRE_OI = 'action_autre_oi';
    const LABEL_ACTION_FREE_OI = 'action_free_oi';
    const LABEL_ACTION_VENIR = 'action_venir';
    const LABEL_BESOIN_PRISE_RDV = 'besoin_prise_RDV';
    const LABEL_BILAN_INTERVENTION = 'bilan_intervention';
    const LABEL_DELAIS_JRS_COMMUNIQUER_MIGRATION = 'delais_jrs_communiquer_migration';
    const LABEL_DELAIS_JRS_COMMUNIQUER_NEW = 'delais_jrs_communiquer_new';
    const LABEL_DELAIS_JRS_COMMUNIQUER_SAV = 'delais_jrs_communiquer_sav';
    const LABEL_DIFFERENT_FONCTION_OI = 'different_fonction_oi';
    const LABEL_NATURE_ACTION_COMPLEMENT = 'nature_action_complement';
    const LABEL_NATURE_BLOCAGE = 'nature_blocage';
    const LABEL_PROD = 'prod';
    const LABEL_RESOLUTION_MOYEN_JOURS = 'resolution_moyen_jours';
    const LABEL_RESOLUTION_MOYEN_JOURS_SAV = 'resolution_moyen_jours_sav';
    const LABEL_RESPONSE_ID = 'response_id';
    const LABEL_RESPONSE_MCRA_ID = 'response_mcra_id';
    const LABEL_SORTANT = 'sortant';
    const LABEL_TAUX_REUSSITE = 'taux_reussite';
    const LABEL_TYPOLOGIE = 'typologie';

    /** @var string $actionAutreOi */
    private string $actionAutreOi;

    /** @var string $actionFreeOi */
    private string $actionFreeOi;

    /** @var string $actionVenir */
    private string $actionVenir;

    /** @var string $besoinPriseRdv */
    private string $besoinPriseRdv;

    /** @var string $bilanIntervention */
    private string $bilanIntervention;

    /** @var string $delaisJrsCommuniquerMigration */
    private string $delaisJrsCommuniquerMigration;

    /** @var string $delaisJrsCommuniquerNew */
    private string $delaisJrsCommuniquerNew;

    /** @var string $delaisJrsCommuniquerSav */
    private string $delaisJrsCommuniquerSav;

    /** @var string $differentFonctionOi */
    private string $differentFonctionOi;

    /** @var string $natureActionComplement */
    private string $natureActionComplement;

    /** @var string $natureBlocage */
    private string $natureBlocage;

    /** @var int $prod */
    private int $prod;

    /** @var string $resolutionMoyenJours */
    private string $resolutionMoyenJours;

    /** @var string $resolutionMoyenJoursSav */
    private string $resolutionMoyenJoursSav;

    /** @var int $responseId */
    private int $responseId;

    /** @var int $responseMcraId */
    private int $responseMcraId;

    /** @var int $sortant */
    private int $sortant;

    /** @var string $tauxReussite */
    private string $tauxReussite;

    /** @var string $typologie */
    private string $typologie;


    /**
     * @param string $actionAutreOi
     * @return AboraccoResponseMcraV2
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setActionAutreOi(string $actionAutreOi): AboraccoResponseMcraV2
    {
        $this->actionAutreOi = $actionAutreOi;
        return $this;
    }

    /** @return string */
    public function getActionAutreOi(): string
    {
        return $this->actionAutreOi;
    }

    /**
     * @param string $actionFreeOi
     * @return AboraccoResponseMcraV2
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setActionFreeOi(string $actionFreeOi): AboraccoResponseMcraV2
    {
        $this->actionFreeOi = $actionFreeOi;
        return $this;
    }

    /** @return string */
    public function getActionFreeOi(): string
    {
        return $this->actionFreeOi;
    }

    /**
     * @param string $actionVenir
     * @return AboraccoResponseMcraV2
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setActionVenir(string $actionVenir): AboraccoResponseMcraV2
    {
        $this->actionVenir = $actionVenir;
        return $this;
    }

    /** @return string */
    public function getActionVenir(): string
    {
        return $this->actionVenir;
    }

    /**
     * @param string $besoinPriseRdv
     * @return AboraccoResponseMcraV2
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setBesoinPriseRdv(string $besoinPriseRdv): AboraccoResponseMcraV2
    {
        $this->besoinPriseRdv = $besoinPriseRdv;
        return $this;
    }

    /** @return string */
    public function getBesoinPriseRdv(): string
    {
        return $this->besoinPriseRdv;
    }

    /**
     * @param string $bilanIntervention
     * @return AboraccoResponseMcraV2
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setBilanIntervention(string $bilanIntervention): AboraccoResponseMcraV2
    {
        $this->bilanIntervention = $bilanIntervention;
        return $this;
    }

    /** @return string */
    public function getBilanIntervention(): string
    {
        return $this->bilanIntervention;
    }

    /**
     * @param string $delaisJrsCommuniquerMigration
     * @return AboraccoResponseMcraV2
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDelaisJrsCommuniquerMigration(string $delaisJrsCommuniquerMigration): AboraccoResponseMcraV2
    {
        $this->delaisJrsCommuniquerMigration = $delaisJrsCommuniquerMigration;
        return $this;
    }

    /** @return string */
    public function getDelaisJrsCommuniquerMigration(): string
    {
        return $this->delaisJrsCommuniquerMigration;
    }

    /**
     * @param string $delaisJrsCommuniquerNew
     * @return AboraccoResponseMcraV2
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDelaisJrsCommuniquerNew(string $delaisJrsCommuniquerNew): AboraccoResponseMcraV2
    {
        $this->delaisJrsCommuniquerNew = $delaisJrsCommuniquerNew;
        return $this;
    }

    /** @return string */
    public function getDelaisJrsCommuniquerNew(): string
    {
        return $this->delaisJrsCommuniquerNew;
    }

    /**
     * @param string $delaisJrsCommuniquerSav
     * @return AboraccoResponseMcraV2
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDelaisJrsCommuniquerSav(string $delaisJrsCommuniquerSav): AboraccoResponseMcraV2
    {
        $this->delaisJrsCommuniquerSav = $delaisJrsCommuniquerSav;
        return $this;
    }

    /** @return string */
    public function getDelaisJrsCommuniquerSav(): string
    {
        return $this->delaisJrsCommuniquerSav;
    }

    /**
     * @param string $differentFonctionOi
     * @return AboraccoResponseMcraV2
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDifferentFonctionOi(string $differentFonctionOi): AboraccoResponseMcraV2
    {
        $this->differentFonctionOi = $differentFonctionOi;
        return $this;
    }

    /** @return string */
    public function getDifferentFonctionOi(): string
    {
        return $this->differentFonctionOi;
    }

    /**
     * @param string $natureActionComplement
     * @return AboraccoResponseMcraV2
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNatureActionComplement(string $natureActionComplement): AboraccoResponseMcraV2
    {
        $this->natureActionComplement = $natureActionComplement;
        return $this;
    }

    /** @return string */
    public function getNatureActionComplement(): string
    {
        return $this->natureActionComplement;
    }

    /**
     * @param string $natureBlocage
     * @return AboraccoResponseMcraV2
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNatureBlocage(string $natureBlocage): AboraccoResponseMcraV2
    {
        $this->natureBlocage = $natureBlocage;
        return $this;
    }

    /** @return string */
    public function getNatureBlocage(): string
    {
        return $this->natureBlocage;
    }

    /**
     * @param int $prod
     * @return AboraccoResponseMcraV2
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setProd(int $prod): AboraccoResponseMcraV2
    {
        $this->prod = $prod;
        return $this;
    }

    /** @return int */
    public function getProd(): int
    {
        return $this->prod;
    }

    /**
     * @param string $resolutionMoyenJours
     * @return AboraccoResponseMcraV2
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setResolutionMoyenJours(string $resolutionMoyenJours): AboraccoResponseMcraV2
    {
        $this->resolutionMoyenJours = $resolutionMoyenJours;
        return $this;
    }

    /** @return string */
    public function getResolutionMoyenJours(): string
    {
        return $this->resolutionMoyenJours;
    }

    /**
     * @param string $resolutionMoyenJoursSav
     * @return AboraccoResponseMcraV2
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setResolutionMoyenJoursSav(string $resolutionMoyenJoursSav): AboraccoResponseMcraV2
    {
        $this->resolutionMoyenJoursSav = $resolutionMoyenJoursSav;
        return $this;
    }

    /** @return string */
    public function getResolutionMoyenJoursSav(): string
    {
        return $this->resolutionMoyenJoursSav;
    }

    /**
     * @param int $responseId
     * @return AboraccoResponseMcraV2
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setResponseId(int $responseId): AboraccoResponseMcraV2
    {
        $this->responseId = $responseId;
        return $this;
    }

    /** @return int */
    public function getResponseId(): int
    {
        return $this->responseId;
    }

    /**
     * @param int $responseMcraId
     * @return AboraccoResponseMcraV2
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setResponseMcraId(int $responseMcraId): AboraccoResponseMcraV2
    {
        $this->responseMcraId = $responseMcraId;
        return $this;
    }

    /** @return int */
    public function getResponseMcraId(): int
    {
        return $this->responseMcraId;
    }

    /**
     * @param int $sortant
     * @return AboraccoResponseMcraV2
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setSortant(int $sortant): AboraccoResponseMcraV2
    {
        $this->sortant = $sortant;
        return $this;
    }

    /** @return int */
    public function getSortant(): int
    {
        return $this->sortant;
    }

    /**
     * @param string $tauxReussite
     * @return AboraccoResponseMcraV2
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setTauxReussite(string $tauxReussite): AboraccoResponseMcraV2
    {
        $this->tauxReussite = $tauxReussite;
        return $this;
    }

    /** @return string */
    public function getTauxReussite(): string
    {
        return $this->tauxReussite;
    }

    /**
     * @param string $typologie
     * @return AboraccoResponseMcraV2
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setTypologie(string $typologie): AboraccoResponseMcraV2
    {
        $this->typologie = $typologie;
        return $this;
    }

    /** @return string */
    public function getTypologie(): string
    {
        return $this->typologie;
    }
}

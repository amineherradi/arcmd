<?php

namespace Amine\Arcmd\Resources\Entities;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class TmpInterCmd extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = '__tmp_inter_cmd';
    const FOREIGN_KEYS = [
    ];

    const LABEL_ACK = 'ack';
    const LABEL_CLIENT_ID = 'client_id';
    const LABEL_CMD_ID = 'cmd_id';
    const LABEL_DATE_RDV = 'date_rdv';
    const LABEL_ETAT_INTERVENTION = 'etat_intervention';
    const LABEL_ETAT_SIEBEL = 'etat_siebel';
    const LABEL_INTERVENTION_ID = 'intervention_id';
    const LABEL_LOGISTIQUE_CPN_ID = 'logistique_cpn_id';
    const LABEL_LOGISTIQUE_SPN_ID = 'logistique_spn_id';
    const LABEL_SCAN_ID = 'scan_id';
    const LABEL_SN = 'sn';
    const LABEL_SN_PACKAGE_PING = 'sn_package_ping';
    const LABEL_SN_SFP_PING = 'sn_sfp_ping';
    const LABEL_TECH_ID = 'tech_id';
    const LABEL_TECH_LOGIN = 'tech_login';
    const LABEL_TYPE_CMD = 'type_cmd';
    const LABEL_TYPE_INTERVENTION = 'type_intervention';

    /** @var int $ack */
    private int $ack;

    /** @var int $clientId */
    private int $clientId;

    /** @var int $cmdId */
    private int $cmdId;

    /** @var string $dateRdv */
    private string $dateRdv;

    /** @var string $etatIntervention */
    private string $etatIntervention;

    /** @var string $etatSiebel */
    private string $etatSiebel;

    /** @var int $interventionId */
    private int $interventionId;

    /** @var int $logistiqueCpnId */
    private int $logistiqueCpnId;

    /** @var int $logistiqueSpnId */
    private int $logistiqueSpnId;

    /** @var int $scanId */
    private int $scanId;

    /** @var string $sn */
    private string $sn;

    /** @var string $snPackagePing */
    private string $snPackagePing;

    /** @var string $snSfpPing */
    private string $snSfpPing;

    /** @var int $techId */
    private int $techId;

    /** @var string $techLogin */
    private string $techLogin;

    /** @var string $typeCmd */
    private string $typeCmd;

    /** @var int $typeIntervention */
    private int $typeIntervention;


    /**
     * @param int $ack
     * @return TmpInterCmd
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAck(int $ack): TmpInterCmd
    {
        $this->ack = $ack;
        return $this;
    }

    /** @return int */
    public function getAck(): int
    {
        return $this->ack;
    }

    /**
     * @param int $clientId
     * @return TmpInterCmd
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setClientId(int $clientId): TmpInterCmd
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
     * @param int $cmdId
     * @return TmpInterCmd
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCmdId(int $cmdId): TmpInterCmd
    {
        $this->cmdId = $cmdId;
        return $this;
    }

    /** @return int */
    public function getCmdId(): int
    {
        return $this->cmdId;
    }

    /**
     * @param string $dateRdv
     * @return TmpInterCmd
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDateRdv(string $dateRdv): TmpInterCmd
    {
        $this->dateRdv = $dateRdv;
        return $this;
    }

    /** @return string */
    public function getDateRdv(): string
    {
        return $this->dateRdv;
    }

    /**
     * @param string $etatIntervention
     * @return TmpInterCmd
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setEtatIntervention(string $etatIntervention): TmpInterCmd
    {
        $this->etatIntervention = $etatIntervention;
        return $this;
    }

    /** @return string */
    public function getEtatIntervention(): string
    {
        return $this->etatIntervention;
    }

    /**
     * @param string $etatSiebel
     * @return TmpInterCmd
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setEtatSiebel(string $etatSiebel): TmpInterCmd
    {
        $this->etatSiebel = $etatSiebel;
        return $this;
    }

    /** @return string */
    public function getEtatSiebel(): string
    {
        return $this->etatSiebel;
    }

    /**
     * @param int $interventionId
     * @return TmpInterCmd
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setInterventionId(int $interventionId): TmpInterCmd
    {
        $this->interventionId = $interventionId;
        return $this;
    }

    /** @return int */
    public function getInterventionId(): int
    {
        return $this->interventionId;
    }

    /**
     * @param int $logistiqueCpnId
     * @return TmpInterCmd
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setLogistiqueCpnId(int $logistiqueCpnId): TmpInterCmd
    {
        $this->logistiqueCpnId = $logistiqueCpnId;
        return $this;
    }

    /** @return int */
    public function getLogistiqueCpnId(): int
    {
        return $this->logistiqueCpnId;
    }

    /**
     * @param int $logistiqueSpnId
     * @return TmpInterCmd
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setLogistiqueSpnId(int $logistiqueSpnId): TmpInterCmd
    {
        $this->logistiqueSpnId = $logistiqueSpnId;
        return $this;
    }

    /** @return int */
    public function getLogistiqueSpnId(): int
    {
        return $this->logistiqueSpnId;
    }

    /**
     * @param int $scanId
     * @return TmpInterCmd
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setScanId(int $scanId): TmpInterCmd
    {
        $this->scanId = $scanId;
        return $this;
    }

    /** @return int */
    public function getScanId(): int
    {
        return $this->scanId;
    }

    /**
     * @param string $sn
     * @return TmpInterCmd
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setSn(string $sn): TmpInterCmd
    {
        $this->sn = $sn;
        return $this;
    }

    /** @return string */
    public function getSn(): string
    {
        return $this->sn;
    }

    /**
     * @param string $snPackagePing
     * @return TmpInterCmd
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setSnPackagePing(string $snPackagePing): TmpInterCmd
    {
        $this->snPackagePing = $snPackagePing;
        return $this;
    }

    /** @return string */
    public function getSnPackagePing(): string
    {
        return $this->snPackagePing;
    }

    /**
     * @param string $snSfpPing
     * @return TmpInterCmd
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setSnSfpPing(string $snSfpPing): TmpInterCmd
    {
        $this->snSfpPing = $snSfpPing;
        return $this;
    }

    /** @return string */
    public function getSnSfpPing(): string
    {
        return $this->snSfpPing;
    }

    /**
     * @param int $techId
     * @return TmpInterCmd
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setTechId(int $techId): TmpInterCmd
    {
        $this->techId = $techId;
        return $this;
    }

    /** @return int */
    public function getTechId(): int
    {
        return $this->techId;
    }

    /**
     * @param string $techLogin
     * @return TmpInterCmd
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setTechLogin(string $techLogin): TmpInterCmd
    {
        $this->techLogin = $techLogin;
        return $this;
    }

    /** @return string */
    public function getTechLogin(): string
    {
        return $this->techLogin;
    }

    /**
     * @param string $typeCmd
     * @return TmpInterCmd
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setTypeCmd(string $typeCmd): TmpInterCmd
    {
        $this->typeCmd = $typeCmd;
        return $this;
    }

    /** @return string */
    public function getTypeCmd(): string
    {
        return $this->typeCmd;
    }

    /**
     * @param int $typeIntervention
     * @return TmpInterCmd
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setTypeIntervention(int $typeIntervention): TmpInterCmd
    {
        $this->typeIntervention = $typeIntervention;
        return $this;
    }

    /** @return int */
    public function getTypeIntervention(): int
    {
        return $this->typeIntervention;
    }
}

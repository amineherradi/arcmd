<?php

namespace Amine\Arcmd\Resources\Entities\Analyse;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AnalyseCrNokOiPmgcMulti extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'analyse_cr_nok_oi_pmgc_multi';
    const PRIMARY_KEY  = 'analyse_cr_nok_oi_pmgc_multi_id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'operateur',
            self::COLUMN_NAME => 'operateur_id',
        ],
    ];

    const LABEL_ADRESSE_ID = 'adresse_id';
    const LABEL_ANALYSE_CR_NOK_OI_PMGC_MULTI_ID = 'analyse_cr_nok_oi_pmgc_multi_id';
    const LABEL_BATIMENT = 'batiment';
    const LABEL_CMD_ID = 'cmd_id';
    const LABEL_DATE_CREATION_CR = 'date_creation_cr';
    const LABEL_MOTIF = 'motif';
    const LABEL_NB_LOGEMENT = 'nb_logement';
    const LABEL_OPERATEUR_ID = 'operateur_id';
    const LABEL_PARC = 'parc';

    /** @var int $adresseId */
    private int $adresseId;

    /** @var int $analyseCrNokOiPmgcMultiId */
    private int $analyseCrNokOiPmgcMultiId;

    /** @var string $batiment */
    private string $batiment;

    /** @var string $cmdId */
    private string $cmdId;

    /** @var DateTime $dateCreationCr */
    private DateTime $dateCreationCr;

    /** @var string $motif */
    private string $motif;

    /** @var int $nbLogement */
    private int $nbLogement;

    /** @var int $operateurId */
    private int $operateurId;

    /** @var string $parc */
    private string $parc;


    /**
     * @param int $adresseId
     * @return AnalyseCrNokOiPmgcMulti
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseId(int $adresseId): AnalyseCrNokOiPmgcMulti
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
     * @param int $analyseCrNokOiPmgcMultiId
     * @return AnalyseCrNokOiPmgcMulti
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAnalyseCrNokOiPmgcMultiId(int $analyseCrNokOiPmgcMultiId): AnalyseCrNokOiPmgcMulti
    {
        $this->analyseCrNokOiPmgcMultiId = $analyseCrNokOiPmgcMultiId;
        return $this;
    }

    /** @return int */
    public function getAnalyseCrNokOiPmgcMultiId(): int
    {
        return $this->analyseCrNokOiPmgcMultiId;
    }

    /**
     * @param string $batiment
     * @return AnalyseCrNokOiPmgcMulti
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setBatiment(string $batiment): AnalyseCrNokOiPmgcMulti
    {
        $this->batiment = $batiment;
        return $this;
    }

    /** @return string */
    public function getBatiment(): string
    {
        return $this->batiment;
    }

    /**
     * @param string $cmdId
     * @return AnalyseCrNokOiPmgcMulti
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCmdId(string $cmdId): AnalyseCrNokOiPmgcMulti
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
     * @param DateTime $dateCreationCr
     * @return AnalyseCrNokOiPmgcMulti
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDateCreationCr(DateTime $dateCreationCr): AnalyseCrNokOiPmgcMulti
    {
        $this->dateCreationCr = $dateCreationCr;
        return $this;
    }

    /** @return DateTime */
    public function getDateCreationCr(): DateTime
    {
        return $this->dateCreationCr;
    }

    /**
     * @param string $motif
     * @return AnalyseCrNokOiPmgcMulti
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setMotif(string $motif): AnalyseCrNokOiPmgcMulti
    {
        $this->motif = $motif;
        return $this;
    }

    /** @return string */
    public function getMotif(): string
    {
        return $this->motif;
    }

    /**
     * @param int $nbLogement
     * @return AnalyseCrNokOiPmgcMulti
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNbLogement(int $nbLogement): AnalyseCrNokOiPmgcMulti
    {
        $this->nbLogement = $nbLogement;
        return $this;
    }

    /** @return int */
    public function getNbLogement(): int
    {
        return $this->nbLogement;
    }

    /**
     * @param int $operateurId
     * @return AnalyseCrNokOiPmgcMulti
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setOperateurId(int $operateurId): AnalyseCrNokOiPmgcMulti
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
     * @param string $parc
     * @return AnalyseCrNokOiPmgcMulti
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setParc(string $parc): AnalyseCrNokOiPmgcMulti
    {
        $this->parc = $parc;
        return $this;
    }

    /** @return string */
    public function getParc(): string
    {
        return $this->parc;
    }
}

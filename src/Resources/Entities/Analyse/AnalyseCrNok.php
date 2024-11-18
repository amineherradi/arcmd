<?php

namespace Amine\Arcmd\Resources\Entities\Analyse;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AnalyseCrNok extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'analyse_cr_nok';
    const PRIMARY_KEY  = 'analyse_cr_nok_id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'operateur',
            self::COLUMN_NAME => 'operateur_id',
        ],
    ];

    const LABEL_ANALYSE_CR_NOK_ID = 'analyse_cr_nok_id';
    const LABEL_CMD_ID = 'cmd_id';
    const LABEL_DATE_CREATION_CR = 'date_creation_cr';
    const LABEL_MOTIF = 'motif';
    const LABEL_NB_FIBRE_BIM = 'nb_fibre_bim';
    const LABEL_NB_FIBRE_BPI = 'nb_fibre_bpi';
    const LABEL_NB_FIBRE_CAD = 'nb_fibre_cad';
    const LABEL_NB_FIBRE_TOTAL = 'nb_fibre_total';
    const LABEL_NB_LOGEMENT_PTO_ETUDE = 'nb_logement_pto_etude';
    const LABEL_NB_LOGEMENT_PTO_SERVICE = 'nb_logement_pto_service';
    const LABEL_NB_LOGEMENT_TOTAL = 'nb_logement_total';
    const LABEL_OPERATEUR_ID = 'operateur_id';
    const LABEL_PRISE_EXISTANTE = 'prise_existante';
    const LABEL_TYPE_FILE_ID = 'type_file_id';

    /** @var int $analyseCrNokId */
    private int $analyseCrNokId;

    /** @var string $cmdId */
    private string $cmdId;

    /** @var DateTime $dateCreationCr */
    private DateTime $dateCreationCr;

    /** @var string $motif */
    private string $motif;

    /** @var int $nbFibreBim */
    private int $nbFibreBim;

    /** @var int $nbFibreBpi */
    private int $nbFibreBpi;

    /** @var int $nbFibreCad */
    private int $nbFibreCad;

    /** @var int $nbFibreTotal */
    private int $nbFibreTotal;

    /** @var int $nbLogementPtoEtude */
    private int $nbLogementPtoEtude;

    /** @var int $nbLogementPtoService */
    private int $nbLogementPtoService;

    /** @var int $nbLogementTotal */
    private int $nbLogementTotal;

    /** @var int $operateurId */
    private int $operateurId;

    /** @var string $priseExistante */
    private string $priseExistante;

    /** @var int $typeFileId */
    private int $typeFileId;


    /**
     * @param int $analyseCrNokId
     * @return AnalyseCrNok
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAnalyseCrNokId(int $analyseCrNokId): AnalyseCrNok
    {
        $this->analyseCrNokId = $analyseCrNokId;
        return $this;
    }

    /** @return int */
    public function getAnalyseCrNokId(): int
    {
        return $this->analyseCrNokId;
    }

    /**
     * @param string $cmdId
     * @return AnalyseCrNok
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCmdId(string $cmdId): AnalyseCrNok
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
     * @return AnalyseCrNok
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDateCreationCr(DateTime $dateCreationCr): AnalyseCrNok
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
     * @return AnalyseCrNok
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setMotif(string $motif): AnalyseCrNok
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
     * @param int $nbFibreBim
     * @return AnalyseCrNok
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNbFibreBim(int $nbFibreBim): AnalyseCrNok
    {
        $this->nbFibreBim = $nbFibreBim;
        return $this;
    }

    /** @return int */
    public function getNbFibreBim(): int
    {
        return $this->nbFibreBim;
    }

    /**
     * @param int $nbFibreBpi
     * @return AnalyseCrNok
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNbFibreBpi(int $nbFibreBpi): AnalyseCrNok
    {
        $this->nbFibreBpi = $nbFibreBpi;
        return $this;
    }

    /** @return int */
    public function getNbFibreBpi(): int
    {
        return $this->nbFibreBpi;
    }

    /**
     * @param int $nbFibreCad
     * @return AnalyseCrNok
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNbFibreCad(int $nbFibreCad): AnalyseCrNok
    {
        $this->nbFibreCad = $nbFibreCad;
        return $this;
    }

    /** @return int */
    public function getNbFibreCad(): int
    {
        return $this->nbFibreCad;
    }

    /**
     * @param int $nbFibreTotal
     * @return AnalyseCrNok
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNbFibreTotal(int $nbFibreTotal): AnalyseCrNok
    {
        $this->nbFibreTotal = $nbFibreTotal;
        return $this;
    }

    /** @return int */
    public function getNbFibreTotal(): int
    {
        return $this->nbFibreTotal;
    }

    /**
     * @param int $nbLogementPtoEtude
     * @return AnalyseCrNok
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNbLogementPtoEtude(int $nbLogementPtoEtude): AnalyseCrNok
    {
        $this->nbLogementPtoEtude = $nbLogementPtoEtude;
        return $this;
    }

    /** @return int */
    public function getNbLogementPtoEtude(): int
    {
        return $this->nbLogementPtoEtude;
    }

    /**
     * @param int $nbLogementPtoService
     * @return AnalyseCrNok
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNbLogementPtoService(int $nbLogementPtoService): AnalyseCrNok
    {
        $this->nbLogementPtoService = $nbLogementPtoService;
        return $this;
    }

    /** @return int */
    public function getNbLogementPtoService(): int
    {
        return $this->nbLogementPtoService;
    }

    /**
     * @param int $nbLogementTotal
     * @return AnalyseCrNok
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNbLogementTotal(int $nbLogementTotal): AnalyseCrNok
    {
        $this->nbLogementTotal = $nbLogementTotal;
        return $this;
    }

    /** @return int */
    public function getNbLogementTotal(): int
    {
        return $this->nbLogementTotal;
    }

    /**
     * @param int $operateurId
     * @return AnalyseCrNok
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setOperateurId(int $operateurId): AnalyseCrNok
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
     * @param string $priseExistante
     * @return AnalyseCrNok
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setPriseExistante(string $priseExistante): AnalyseCrNok
    {
        $this->priseExistante = $priseExistante;
        return $this;
    }

    /** @return string */
    public function getPriseExistante(): string
    {
        return $this->priseExistante;
    }

    /**
     * @param int $typeFileId
     * @return AnalyseCrNok
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setTypeFileId(int $typeFileId): AnalyseCrNok
    {
        $this->typeFileId = $typeFileId;
        return $this;
    }

    /** @return int */
    public function getTypeFileId(): int
    {
        return $this->typeFileId;
    }
}

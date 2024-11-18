<?php

namespace Amine\Arcmd\Resources\Entities\Adresse;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AdresseErpVad extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'adresse_erp_vad';
    const PRIMARY_KEY  = 'adresse_erp_vad_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_ADRESSE_ERP_VAD_ID = 'adresse_erp_vad_id';
    const LABEL_ADRESSE_ID = 'adresse_id';
    const LABEL_C_TIME = 'c_time';
    const LABEL_ELIGIBLE_VAD = 'eligible_vad';
    const LABEL_M_TIME = 'm_time';
    const LABEL_NBR_LOGEMENT = 'nbr_logement';
    const LABEL_RESULT = 'result';
    const LABEL_SYNCHRO = 'synchro';
    const LABEL_SYNCHRO_DATA = 'synchro_data';
    const LABEL_SYNCHRO_TO_API = 'synchro_to_api';

    /** @var int $adresseErpVadId */
    private int $adresseErpVadId;

    /** @var int $adresseId */
    private int $adresseId;

    /** @var DateTime $cTime */
    private DateTime $cTime;

    /** @var int $eligibleVad */
    private int $eligibleVad;

    /** @var DateTime $mTime */
    private DateTime $mTime;

    /** @var int $nbrLogement */
    private int $nbrLogement;

    /** @var string $result */
    private string $result;

    /** @var int $synchro */
    private int $synchro;

    /** @var int $synchroData */
    private int $synchroData;

    /** @var int $synchroToApi */
    private int $synchroToApi;


    /**
     * @param int $adresseErpVadId
     * @return AdresseErpVad
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseErpVadId(int $adresseErpVadId): AdresseErpVad
    {
        $this->adresseErpVadId = $adresseErpVadId;
        return $this;
    }

    /** @return int */
    public function getAdresseErpVadId(): int
    {
        return $this->adresseErpVadId;
    }

    /**
     * @param int $adresseId
     * @return AdresseErpVad
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseId(int $adresseId): AdresseErpVad
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
     * @param DateTime $cTime
     * @return AdresseErpVad
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCTime(DateTime $cTime): AdresseErpVad
    {
        $this->cTime = $cTime;
        return $this;
    }

    /** @return DateTime */
    public function getCTime(): DateTime
    {
        return $this->cTime;
    }

    /**
     * @param int $eligibleVad
     * @return AdresseErpVad
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setEligibleVad(int $eligibleVad): AdresseErpVad
    {
        $this->eligibleVad = $eligibleVad;
        return $this;
    }

    /** @return int */
    public function getEligibleVad(): int
    {
        return $this->eligibleVad;
    }

    /**
     * @param DateTime $mTime
     * @return AdresseErpVad
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setMTime(DateTime $mTime): AdresseErpVad
    {
        $this->mTime = $mTime;
        return $this;
    }

    /** @return DateTime */
    public function getMTime(): DateTime
    {
        return $this->mTime;
    }

    /**
     * @param int $nbrLogement
     * @return AdresseErpVad
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNbrLogement(int $nbrLogement): AdresseErpVad
    {
        $this->nbrLogement = $nbrLogement;
        return $this;
    }

    /** @return int */
    public function getNbrLogement(): int
    {
        return $this->nbrLogement;
    }

    /**
     * @param string $result
     * @return AdresseErpVad
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setResult(string $result): AdresseErpVad
    {
        $this->result = $result;
        return $this;
    }

    /** @return string */
    public function getResult(): string
    {
        return $this->result;
    }

    /**
     * @param int $synchro
     * @return AdresseErpVad
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setSynchro(int $synchro): AdresseErpVad
    {
        $this->synchro = $synchro;
        return $this;
    }

    /** @return int */
    public function getSynchro(): int
    {
        return $this->synchro;
    }

    /**
     * @param int $synchroData
     * @return AdresseErpVad
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setSynchroData(int $synchroData): AdresseErpVad
    {
        $this->synchroData = $synchroData;
        return $this;
    }

    /** @return int */
    public function getSynchroData(): int
    {
        return $this->synchroData;
    }

    /**
     * @param int $synchroToApi
     * @return AdresseErpVad
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setSynchroToApi(int $synchroToApi): AdresseErpVad
    {
        $this->synchroToApi = $synchroToApi;
        return $this;
    }

    /** @return int */
    public function getSynchroToApi(): int
    {
        return $this->synchroToApi;
    }
}

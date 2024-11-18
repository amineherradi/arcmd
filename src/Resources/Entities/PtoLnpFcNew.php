<?php

namespace Amine\Arcmd\Resources\Entities;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class PtoLnpFcNew extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = '_pto_lnp_fc_new';
    const PRIMARY_KEY  = 'pto_lnp_fc_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_BOITE_ID = 'boite_id';
    const LABEL_C_TIME = 'c_time';
    const LABEL_PON_SPLITTER_FIBRE_ID = 'pon_splitter_fibre_id';
    const LABEL_PTO_LNP_FC_ID = 'pto_lnp_fc_id';

    /** @var int $boiteId */
    private int $boiteId;

    /** @var DateTime $cTime */
    private DateTime $cTime;

    /** @var int $ponSplitterFibreId */
    private int $ponSplitterFibreId;

    /** @var int $ptoLnpFcId */
    private int $ptoLnpFcId;


    /**
     * @param int $boiteId
     * @return PtoLnpFcNew
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setBoiteId(int $boiteId): PtoLnpFcNew
    {
        $this->boiteId = $boiteId;
        return $this;
    }

    /** @return int */
    public function getBoiteId(): int
    {
        return $this->boiteId;
    }

    /**
     * @param DateTime $cTime
     * @return PtoLnpFcNew
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCTime(DateTime $cTime): PtoLnpFcNew
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
     * @param int $ponSplitterFibreId
     * @return PtoLnpFcNew
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setPonSplitterFibreId(int $ponSplitterFibreId): PtoLnpFcNew
    {
        $this->ponSplitterFibreId = $ponSplitterFibreId;
        return $this;
    }

    /** @return int */
    public function getPonSplitterFibreId(): int
    {
        return $this->ponSplitterFibreId;
    }

    /**
     * @param int $ptoLnpFcId
     * @return PtoLnpFcNew
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setPtoLnpFcId(int $ptoLnpFcId): PtoLnpFcNew
    {
        $this->ptoLnpFcId = $ptoLnpFcId;
        return $this;
    }

    /** @return int */
    public function getPtoLnpFcId(): int
    {
        return $this->ptoLnpFcId;
    }
}

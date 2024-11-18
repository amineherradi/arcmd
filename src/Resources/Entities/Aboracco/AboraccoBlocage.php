<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoBlocage extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_blocage';
    const PRIMARY_KEY  = 'aboracco_blocage_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_ABORACCO_BLOCAGE_ID = 'aboracco_blocage_id';
    const LABEL_COM_OT = 'com_ot';
    const LABEL_FINT = 'fint';
    const LABEL_LABEL = 'label';
    const LABEL_PRIO = 'prio';

    /** @var int $aboraccoBlocageId */
    private int $aboraccoBlocageId;

    /** @var string $comOt */
    private string $comOt;

    /** @var string $fint */
    private string $fint;

    /** @var string $label */
    private string $label;

    /** @var int $prio */
    private int $prio;


    /**
     * @param int $aboraccoBlocageId
     * @return AboraccoBlocage
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoBlocageId(int $aboraccoBlocageId): AboraccoBlocage
    {
        $this->aboraccoBlocageId = $aboraccoBlocageId;
        return $this;
    }

    /** @return int */
    public function getAboraccoBlocageId(): int
    {
        return $this->aboraccoBlocageId;
    }

    /**
     * @param string $comOt
     * @return AboraccoBlocage
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setComOt(string $comOt): AboraccoBlocage
    {
        $this->comOt = $comOt;
        return $this;
    }

    /** @return string */
    public function getComOt(): string
    {
        return $this->comOt;
    }

    /**
     * @param string $fint
     * @return AboraccoBlocage
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setFint(string $fint): AboraccoBlocage
    {
        $this->fint = $fint;
        return $this;
    }

    /** @return string */
    public function getFint(): string
    {
        return $this->fint;
    }

    /**
     * @param string $label
     * @return AboraccoBlocage
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setLabel(string $label): AboraccoBlocage
    {
        $this->label = $label;
        return $this;
    }

    /** @return string */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param int $prio
     * @return AboraccoBlocage
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setPrio(int $prio): AboraccoBlocage
    {
        $this->prio = $prio;
        return $this;
    }

    /** @return int */
    public function getPrio(): int
    {
        return $this->prio;
    }
}

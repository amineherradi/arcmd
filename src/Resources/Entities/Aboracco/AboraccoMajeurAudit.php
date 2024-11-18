<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoMajeurAudit extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_majeur_audit';
    const PRIMARY_KEY  = 'aboracco_majeur_audit_id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'aboracco_response',
            self::COLUMN_NAME => 'aboracco_response_id',
        ],
    ];

    const LABEL_ABORACCO_MAJEUR_AUDIT_ID = 'aboracco_majeur_audit_id';
    const LABEL_ABORACCO_RESPONSE_ID = 'aboracco_response_id';
    const LABEL_ACTIF = 'actif';
    const LABEL_DELAI = 'delai';
    const LABEL_FOCUS = 'focus';
    const LABEL_POIDS = 'poids';
    const LABEL_POIDS_QUESTION = 'poids_question';
    const LABEL_PRECONISATION = 'preconisation';
    const LABEL_VALUE = 'value';

    /** @var int $aboraccoMajeurAuditId */
    private int $aboraccoMajeurAuditId;

    /** @var int $aboraccoResponseId */
    private int $aboraccoResponseId;

    /** @var int $actif */
    private int $actif;

    /** @var int $delai */
    private int $delai;

    /** @var string $focus */
    private string $focus;

    /** @var int $poids */
    private int $poids;

    /** @var int $poidsQuestion */
    private int $poidsQuestion;

    /** @var string $preconisation */
    private string $preconisation;

    /** @var string $value */
    private string $value;


    /**
     * @param int $aboraccoMajeurAuditId
     * @return AboraccoMajeurAudit
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoMajeurAuditId(int $aboraccoMajeurAuditId): AboraccoMajeurAudit
    {
        $this->aboraccoMajeurAuditId = $aboraccoMajeurAuditId;
        return $this;
    }

    /** @return int */
    public function getAboraccoMajeurAuditId(): int
    {
        return $this->aboraccoMajeurAuditId;
    }

    /**
     * @param int $aboraccoResponseId
     * @return AboraccoMajeurAudit
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoResponseId(int $aboraccoResponseId): AboraccoMajeurAudit
    {
        $this->aboraccoResponseId = $aboraccoResponseId;
        return $this;
    }

    /** @return int */
    public function getAboraccoResponseId(): int
    {
        return $this->aboraccoResponseId;
    }

    /**
     * @param int $actif
     * @return AboraccoMajeurAudit
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setActif(int $actif): AboraccoMajeurAudit
    {
        $this->actif = $actif;
        return $this;
    }

    /** @return int */
    public function getActif(): int
    {
        return $this->actif;
    }

    /**
     * @param int $delai
     * @return AboraccoMajeurAudit
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDelai(int $delai): AboraccoMajeurAudit
    {
        $this->delai = $delai;
        return $this;
    }

    /** @return int */
    public function getDelai(): int
    {
        return $this->delai;
    }

    /**
     * @param string $focus
     * @return AboraccoMajeurAudit
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setFocus(string $focus): AboraccoMajeurAudit
    {
        $this->focus = $focus;
        return $this;
    }

    /** @return string */
    public function getFocus(): string
    {
        return $this->focus;
    }

    /**
     * @param int $poids
     * @return AboraccoMajeurAudit
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setPoids(int $poids): AboraccoMajeurAudit
    {
        $this->poids = $poids;
        return $this;
    }

    /** @return int */
    public function getPoids(): int
    {
        return $this->poids;
    }

    /**
     * @param int $poidsQuestion
     * @return AboraccoMajeurAudit
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setPoidsQuestion(int $poidsQuestion): AboraccoMajeurAudit
    {
        $this->poidsQuestion = $poidsQuestion;
        return $this;
    }

    /** @return int */
    public function getPoidsQuestion(): int
    {
        return $this->poidsQuestion;
    }

    /**
     * @param string $preconisation
     * @return AboraccoMajeurAudit
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setPreconisation(string $preconisation): AboraccoMajeurAudit
    {
        $this->preconisation = $preconisation;
        return $this;
    }

    /** @return string */
    public function getPreconisation(): string
    {
        return $this->preconisation;
    }

    /**
     * @param string $value
     * @return AboraccoMajeurAudit
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setValue(string $value): AboraccoMajeurAudit
    {
        $this->value = $value;
        return $this;
    }

    /** @return string */
    public function getValue(): string
    {
        return $this->value;
    }
}

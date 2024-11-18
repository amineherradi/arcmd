<?php

namespace Amine\Arcmd\Resources\Entities\Alerte;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AlerteDestinataire extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'alerte_destinataire';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'type_livrable',
            self::COLUMN_NAME => 'type_livrable',
        ],
    ];

    const LABEL_CC = 'cc';
    const LABEL_ID = 'id';
    const LABEL_INTERNE = 'interne';
    const LABEL_MAIL = 'mail';
    const LABEL_OPERATEUR = 'operateur';
    const LABEL_TYPE_LIVRABLE = 'type_livrable';

    /** @var int $cc */
    private int $cc;

    /** @var int $id */
    private int $id;

    /** @var int $interne */
    private int $interne;

    /** @var string $mail */
    private string $mail;

    /** @var int $operateur */
    private int $operateur;

    /** @var int $typeLivrable */
    private int $typeLivrable;


    /**
     * @param int $cc
     * @return AlerteDestinataire
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCc(int $cc): AlerteDestinataire
    {
        $this->cc = $cc;
        return $this;
    }

    /** @return int */
    public function getCc(): int
    {
        return $this->cc;
    }

    /**
     * @param int $id
     * @return AlerteDestinataire
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setId(int $id): AlerteDestinataire
    {
        $this->id = $id;
        return $this;
    }

    /** @return int */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $interne
     * @return AlerteDestinataire
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setInterne(int $interne): AlerteDestinataire
    {
        $this->interne = $interne;
        return $this;
    }

    /** @return int */
    public function getInterne(): int
    {
        return $this->interne;
    }

    /**
     * @param string $mail
     * @return AlerteDestinataire
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setMail(string $mail): AlerteDestinataire
    {
        $this->mail = $mail;
        return $this;
    }

    /** @return string */
    public function getMail(): string
    {
        return $this->mail;
    }

    /**
     * @param int $operateur
     * @return AlerteDestinataire
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setOperateur(int $operateur): AlerteDestinataire
    {
        $this->operateur = $operateur;
        return $this;
    }

    /** @return int */
    public function getOperateur(): int
    {
        return $this->operateur;
    }

    /**
     * @param int $typeLivrable
     * @return AlerteDestinataire
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setTypeLivrable(int $typeLivrable): AlerteDestinataire
    {
        $this->typeLivrable = $typeLivrable;
        return $this;
    }

    /** @return int */
    public function getTypeLivrable(): int
    {
        return $this->typeLivrable;
    }
}

<?php

namespace Amine\Arcmd\Resources\Entities\Alerte;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AlerteLivrable extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'alerte_livrable';
    const PRIMARY_KEY  = 'id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'type_alerte',
            self::COLUMN_NAME => 'type_alerte',
        ],
        [
            self::REFERENCED_TABLE_NAME => 'type_livrable',
            self::COLUMN_NAME => 'type_livrable',
        ],
    ];

    const LABEL_ALERTE_SENT = 'alerte_sent';
    const LABEL_COMMENTAIRE = 'commentaire';
    const LABEL_DATE_CREATION = 'date_creation';
    const LABEL_FILE = 'file';
    const LABEL_ID = 'id';
    const LABEL_NOMBRE_LOGEMENTS = 'nombre_logements';
    const LABEL_OPERATEUR = 'operateur';
    const LABEL_PM = 'pm';
    const LABEL_PM_DATE_INS = 'pm_date_ins';
    const LABEL_PM_DATE_MSC = 'pm_date_msc';
    const LABEL_TYPE_ALERTE = 'type_alerte';
    const LABEL_TYPE_LIVRABLE = 'type_livrable';

    /** @var int $alerteSent */
    private int $alerteSent;

    /** @var string $commentaire */
    private string $commentaire;

    /** @var DateTime $dateCreation */
    private DateTime $dateCreation;

    /** @var string $file */
    private string $file;

    /** @var int $id */
    private int $id;

    /** @var int $nombreLogements */
    private int $nombreLogements;

    /** @var int $operateur */
    private int $operateur;

    /** @var string $pm */
    private string $pm;

    /** @var string $pmDateIns */
    private string $pmDateIns;

    /** @var string $pmDateMsc */
    private string $pmDateMsc;

    /** @var int $typeAlerte */
    private int $typeAlerte;

    /** @var int $typeLivrable */
    private int $typeLivrable;


    /**
     * @param int $alerteSent
     * @return AlerteLivrable
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAlerteSent(int $alerteSent): AlerteLivrable
    {
        $this->alerteSent = $alerteSent;
        return $this;
    }

    /** @return int */
    public function getAlerteSent(): int
    {
        return $this->alerteSent;
    }

    /**
     * @param string $commentaire
     * @return AlerteLivrable
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCommentaire(string $commentaire): AlerteLivrable
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
     * @param DateTime $dateCreation
     * @return AlerteLivrable
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDateCreation(DateTime $dateCreation): AlerteLivrable
    {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /** @return DateTime */
    public function getDateCreation(): DateTime
    {
        return $this->dateCreation;
    }

    /**
     * @param string $file
     * @return AlerteLivrable
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setFile(string $file): AlerteLivrable
    {
        $this->file = $file;
        return $this;
    }

    /** @return string */
    public function getFile(): string
    {
        return $this->file;
    }

    /**
     * @param int $id
     * @return AlerteLivrable
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setId(int $id): AlerteLivrable
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
     * @param int $nombreLogements
     * @return AlerteLivrable
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNombreLogements(int $nombreLogements): AlerteLivrable
    {
        $this->nombreLogements = $nombreLogements;
        return $this;
    }

    /** @return int */
    public function getNombreLogements(): int
    {
        return $this->nombreLogements;
    }

    /**
     * @param int $operateur
     * @return AlerteLivrable
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setOperateur(int $operateur): AlerteLivrable
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
     * @param string $pm
     * @return AlerteLivrable
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setPm(string $pm): AlerteLivrable
    {
        $this->pm = $pm;
        return $this;
    }

    /** @return string */
    public function getPm(): string
    {
        return $this->pm;
    }

    /**
     * @param string $pmDateIns
     * @return AlerteLivrable
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setPmDateIns(string $pmDateIns): AlerteLivrable
    {
        $this->pmDateIns = $pmDateIns;
        return $this;
    }

    /** @return string */
    public function getPmDateIns(): string
    {
        return $this->pmDateIns;
    }

    /**
     * @param string $pmDateMsc
     * @return AlerteLivrable
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setPmDateMsc(string $pmDateMsc): AlerteLivrable
    {
        $this->pmDateMsc = $pmDateMsc;
        return $this;
    }

    /** @return string */
    public function getPmDateMsc(): string
    {
        return $this->pmDateMsc;
    }

    /**
     * @param int $typeAlerte
     * @return AlerteLivrable
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setTypeAlerte(int $typeAlerte): AlerteLivrable
    {
        $this->typeAlerte = $typeAlerte;
        return $this;
    }

    /** @return int */
    public function getTypeAlerte(): int
    {
        return $this->typeAlerte;
    }

    /**
     * @param int $typeLivrable
     * @return AlerteLivrable
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setTypeLivrable(int $typeLivrable): AlerteLivrable
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

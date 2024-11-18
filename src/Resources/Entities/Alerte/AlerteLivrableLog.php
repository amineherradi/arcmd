<?php

namespace Amine\Arcmd\Resources\Entities\Alerte;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AlerteLivrableLog extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'alerte_livrable_log';
    const FOREIGN_KEYS = [
    ];

    const LABEL_ALERTE_SENT = 'alerte_sent';
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
     * @return AlerteLivrableLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAlerteSent(int $alerteSent): AlerteLivrableLog
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
     * @param DateTime $dateCreation
     * @return AlerteLivrableLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDateCreation(DateTime $dateCreation): AlerteLivrableLog
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
     * @return AlerteLivrableLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setFile(string $file): AlerteLivrableLog
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
     * @return AlerteLivrableLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setId(int $id): AlerteLivrableLog
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
     * @return AlerteLivrableLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setNombreLogements(int $nombreLogements): AlerteLivrableLog
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
     * @return AlerteLivrableLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setOperateur(int $operateur): AlerteLivrableLog
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
     * @return AlerteLivrableLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setPm(string $pm): AlerteLivrableLog
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
     * @return AlerteLivrableLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setPmDateIns(string $pmDateIns): AlerteLivrableLog
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
     * @return AlerteLivrableLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setPmDateMsc(string $pmDateMsc): AlerteLivrableLog
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
     * @return AlerteLivrableLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setTypeAlerte(int $typeAlerte): AlerteLivrableLog
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
     * @return AlerteLivrableLog
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setTypeLivrable(int $typeLivrable): AlerteLivrableLog
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

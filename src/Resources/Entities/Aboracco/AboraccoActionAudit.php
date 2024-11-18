<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoActionAudit extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_action_audit';
    const PRIMARY_KEY  = 'aboracco_action_audit_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_ABORACCO_ACTION_AUDIT_ID = 'aboracco_action_audit_id';
    const LABEL_DATE_CREATION = 'date_creation';
    const LABEL_DESCRIPTION = 'description';
    const LABEL_LABEL = 'label';

    /** @var int $aboraccoActionAuditId */
    private int $aboraccoActionAuditId;

    /** @var DateTime $dateCreation */
    private DateTime $dateCreation;

    /** @var string $description */
    private string $description;

    /** @var string $label */
    private string $label;


    /**
     * @param int $aboraccoActionAuditId
     * @return AboraccoActionAudit
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAboraccoActionAuditId(int $aboraccoActionAuditId): AboraccoActionAudit
    {
        $this->aboraccoActionAuditId = $aboraccoActionAuditId;
        return $this;
    }

    /** @return int */
    public function getAboraccoActionAuditId(): int
    {
        return $this->aboraccoActionAuditId;
    }

    /**
     * @param DateTime $dateCreation
     * @return AboraccoActionAudit
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDateCreation(DateTime $dateCreation): AboraccoActionAudit
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
     * @param string $description
     * @return AboraccoActionAudit
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDescription(string $description): AboraccoActionAudit
    {
        $this->description = $description;
        return $this;
    }

    /** @return string */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $label
     * @return AboraccoActionAudit
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setLabel(string $label): AboraccoActionAudit
    {
        $this->label = $label;
        return $this;
    }

    /** @return string */
    public function getLabel(): string
    {
        return $this->label;
    }
}

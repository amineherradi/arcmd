<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoResponseMcra extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_response_mcra';
    const PRIMARY_KEY  = 'response_mcra_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_ACTIONS_A_MENER = 'actions_a_mener';
    const LABEL_ACTIONS_MENEES = 'actions_menees';
    const LABEL_BESOIN_RDV = 'besoin_rdv';
    const LABEL_DELAI_RESOLUTION = 'delai_resolution';
    const LABEL_DELAI_RESOLUTION_MIGRATION = 'delai_resolution_migration';
    const LABEL_PRECISIONS_RDV = 'precisions_rdv';
    const LABEL_RESPONSE_ID = 'response_id';
    const LABEL_RESPONSE_MCRA_ID = 'response_mcra_id';

    /** @var string $actionsAMener */
    private string $actionsAMener;

    /** @var string $actionsMenees */
    private string $actionsMenees;

    /** @var int $besoinRdv */
    private int $besoinRdv;

    /** @var int $delaiResolution */
    private int $delaiResolution;

    /** @var int $delaiResolutionMigration */
    private int $delaiResolutionMigration;

    /** @var string $precisionsRdv */
    private string $precisionsRdv;

    /** @var int $responseId */
    private int $responseId;

    /** @var int $responseMcraId */
    private int $responseMcraId;


    /**
     * @param string $actionsAMener
     * @return AboraccoResponseMcra
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setActionsAMener(string $actionsAMener): AboraccoResponseMcra
    {
        $this->actionsAMener = $actionsAMener;
        return $this;
    }

    /** @return string */
    public function getActionsAMener(): string
    {
        return $this->actionsAMener;
    }

    /**
     * @param string $actionsMenees
     * @return AboraccoResponseMcra
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setActionsMenees(string $actionsMenees): AboraccoResponseMcra
    {
        $this->actionsMenees = $actionsMenees;
        return $this;
    }

    /** @return string */
    public function getActionsMenees(): string
    {
        return $this->actionsMenees;
    }

    /**
     * @param int $besoinRdv
     * @return AboraccoResponseMcra
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setBesoinRdv(int $besoinRdv): AboraccoResponseMcra
    {
        $this->besoinRdv = $besoinRdv;
        return $this;
    }

    /** @return int */
    public function getBesoinRdv(): int
    {
        return $this->besoinRdv;
    }

    /**
     * @param int $delaiResolution
     * @return AboraccoResponseMcra
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDelaiResolution(int $delaiResolution): AboraccoResponseMcra
    {
        $this->delaiResolution = $delaiResolution;
        return $this;
    }

    /** @return int */
    public function getDelaiResolution(): int
    {
        return $this->delaiResolution;
    }

    /**
     * @param int $delaiResolutionMigration
     * @return AboraccoResponseMcra
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDelaiResolutionMigration(int $delaiResolutionMigration): AboraccoResponseMcra
    {
        $this->delaiResolutionMigration = $delaiResolutionMigration;
        return $this;
    }

    /** @return int */
    public function getDelaiResolutionMigration(): int
    {
        return $this->delaiResolutionMigration;
    }

    /**
     * @param string $precisionsRdv
     * @return AboraccoResponseMcra
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setPrecisionsRdv(string $precisionsRdv): AboraccoResponseMcra
    {
        $this->precisionsRdv = $precisionsRdv;
        return $this;
    }

    /** @return string */
    public function getPrecisionsRdv(): string
    {
        return $this->precisionsRdv;
    }

    /**
     * @param int $responseId
     * @return AboraccoResponseMcra
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setResponseId(int $responseId): AboraccoResponseMcra
    {
        $this->responseId = $responseId;
        return $this;
    }

    /** @return int */
    public function getResponseId(): int
    {
        return $this->responseId;
    }

    /**
     * @param int $responseMcraId
     * @return AboraccoResponseMcra
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setResponseMcraId(int $responseMcraId): AboraccoResponseMcra
    {
        $this->responseMcraId = $responseMcraId;
        return $this;
    }

    /** @return int */
    public function getResponseMcraId(): int
    {
        return $this->responseMcraId;
    }
}

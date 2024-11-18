<?php

namespace Amine\Arcmd\Resources\Entities\Aboracco;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AboraccoResponseCdtRappel extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'aboracco_response_cdt_rappel';
    const PRIMARY_KEY  = 'id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_CONDITION = 'condition';
    const LABEL_ID = 'id';
    const LABEL_PRIORITY = 'priority';
    const LABEL_RESPONSE_ID = 'response_id';
    const LABEL_TIME_BEFORE_END = 'time_before_end';
    const LABEL_TIME_BEFORE_RECALL = 'time_before_recall';

    /** @var int $condition */
    private int $condition;

    /** @var int $id */
    private int $id;

    /** @var int $priority */
    private int $priority;

    /** @var int $responseId */
    private int $responseId;

    /** @var int $timeBeforeEnd */
    private int $timeBeforeEnd;

    /** @var int $timeBeforeRecall */
    private int $timeBeforeRecall;


    /**
     * @param int $condition
     * @return AboraccoResponseCdtRappel
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCondition(int $condition): AboraccoResponseCdtRappel
    {
        $this->condition = $condition;
        return $this;
    }

    /** @return int */
    public function getCondition(): int
    {
        return $this->condition;
    }

    /**
     * @param int $id
     * @return AboraccoResponseCdtRappel
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setId(int $id): AboraccoResponseCdtRappel
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
     * @param int $priority
     * @return AboraccoResponseCdtRappel
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setPriority(int $priority): AboraccoResponseCdtRappel
    {
        $this->priority = $priority;
        return $this;
    }

    /** @return int */
    public function getPriority(): int
    {
        return $this->priority;
    }

    /**
     * @param int $responseId
     * @return AboraccoResponseCdtRappel
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setResponseId(int $responseId): AboraccoResponseCdtRappel
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
     * @param int $timeBeforeEnd
     * @return AboraccoResponseCdtRappel
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setTimeBeforeEnd(int $timeBeforeEnd): AboraccoResponseCdtRappel
    {
        $this->timeBeforeEnd = $timeBeforeEnd;
        return $this;
    }

    /** @return int */
    public function getTimeBeforeEnd(): int
    {
        return $this->timeBeforeEnd;
    }

    /**
     * @param int $timeBeforeRecall
     * @return AboraccoResponseCdtRappel
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setTimeBeforeRecall(int $timeBeforeRecall): AboraccoResponseCdtRappel
    {
        $this->timeBeforeRecall = $timeBeforeRecall;
        return $this;
    }

    /** @return int */
    public function getTimeBeforeRecall(): int
    {
        return $this->timeBeforeRecall;
    }
}

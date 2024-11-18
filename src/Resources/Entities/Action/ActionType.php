<?php

namespace Amine\Arcmd\Resources\Entities\Action;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class ActionType extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'action_type';
    const PRIMARY_KEY  = 'id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_ID = 'id';
    const LABEL_LABEL = 'label';

    /** @var int $id */
    private int $id;

    /** @var string $label */
    private string $label;


    /**
     * @param int $id
     * @return ActionType
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setId(int $id): ActionType
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
     * @param string $label
     * @return ActionType
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setLabel(string $label): ActionType
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

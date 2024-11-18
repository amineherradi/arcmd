<?php

namespace Amine\Arcmd\Resources\Entities\Action;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class ActionLogs extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'action_logs';
    const PRIMARY_KEY  = 'action_logs_id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'action_type',
            self::COLUMN_NAME => 'action_id',
        ],
        [
            self::REFERENCED_TABLE_NAME => 'killi_user',
            self::COLUMN_NAME => 'killi_user_id',
        ],
    ];

    const LABEL_ACTION_ID = 'action_id';
    const LABEL_ACTION_LOGS_ID = 'action_logs_id';
    const LABEL_DATA = 'data';
    const LABEL_DATE_CREATION = 'date_creation';
    const LABEL_KILLI_USER_ID = 'killi_user_id';
    const LABEL_OBJECT = 'object';
    const LABEL_OBJECT_ID = 'object_id';

    /** @var int $actionId */
    private int $actionId;

    /** @var int $actionLogsId */
    private int $actionLogsId;

    /** @var string $data */
    private string $data;

    /** @var DateTime $dateCreation */
    private DateTime $dateCreation;

    /** @var int $killiUserId */
    private int $killiUserId;

    /** @var string $object */
    private string $object;

    /** @var int $objectId */
    private int $objectId;


    /**
     * @param int $actionId
     * @return ActionLogs
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setActionId(int $actionId): ActionLogs
    {
        $this->actionId = $actionId;
        return $this;
    }

    /** @return int */
    public function getActionId(): int
    {
        return $this->actionId;
    }

    /**
     * @param int $actionLogsId
     * @return ActionLogs
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setActionLogsId(int $actionLogsId): ActionLogs
    {
        $this->actionLogsId = $actionLogsId;
        return $this;
    }

    /** @return int */
    public function getActionLogsId(): int
    {
        return $this->actionLogsId;
    }

    /**
     * @param string $data
     * @return ActionLogs
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setData(string $data): ActionLogs
    {
        $this->data = $data;
        return $this;
    }

    /** @return string */
    public function getData(): string
    {
        return $this->data;
    }

    /**
     * @param DateTime $dateCreation
     * @return ActionLogs
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setDateCreation(DateTime $dateCreation): ActionLogs
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
     * @param int $killiUserId
     * @return ActionLogs
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setKilliUserId(int $killiUserId): ActionLogs
    {
        $this->killiUserId = $killiUserId;
        return $this;
    }

    /** @return int */
    public function getKilliUserId(): int
    {
        return $this->killiUserId;
    }

    /**
     * @param string $object
     * @return ActionLogs
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setObject(string $object): ActionLogs
    {
        $this->object = $object;
        return $this;
    }

    /** @return string */
    public function getObject(): string
    {
        return $this->object;
    }

    /**
     * @param int $objectId
     * @return ActionLogs
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setObjectId(int $objectId): ActionLogs
    {
        $this->objectId = $objectId;
        return $this;
    }

    /** @return int */
    public function getObjectId(): int
    {
        return $this->objectId;
    }
}

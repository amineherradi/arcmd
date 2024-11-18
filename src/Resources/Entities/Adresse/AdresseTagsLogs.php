<?php

namespace Amine\Arcmd\Resources\Entities\Adresse;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AdresseTagsLogs extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'adresse_tags_logs';
    const PRIMARY_KEY  = 'id';
    const FOREIGN_KEYS = [
        [
            self::REFERENCED_TABLE_NAME => 'adresse',
            self::COLUMN_NAME => 'adresse_id',
        ],
        [
            self::REFERENCED_TABLE_NAME => 'tags',
            self::COLUMN_NAME => 'tag_id',
        ],
    ];

    const LABEL_ACTION = 'action';
    const LABEL_ACTION_USER_ID = 'action_user_id';
    const LABEL_ADRESSE_ID = 'adresse_id';
    const LABEL_ADRESSE_TAG_ID = 'adresse_tag_id';
    const LABEL_CREATED_AT = 'created_at';
    const LABEL_ID = 'id';
    const LABEL_TAG_ID = 'tag_id';

    /** @var string $action */
    private string $action;

    /** @var int $actionUserId */
    private int $actionUserId;

    /** @var int $adresseId */
    private int $adresseId;

    /** @var int $adresseTagId */
    private int $adresseTagId;

    /** @var DateTime $createdAt */
    private DateTime $createdAt;

    /** @var int $id */
    private int $id;

    /** @var int $tagId */
    private int $tagId;


    /**
     * @param string $action
     * @return AdresseTagsLogs
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAction(string $action): AdresseTagsLogs
    {
        $this->action = $action;
        return $this;
    }

    /** @return string */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * @param int $actionUserId
     * @return AdresseTagsLogs
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setActionUserId(int $actionUserId): AdresseTagsLogs
    {
        $this->actionUserId = $actionUserId;
        return $this;
    }

    /** @return int */
    public function getActionUserId(): int
    {
        return $this->actionUserId;
    }

    /**
     * @param int $adresseId
     * @return AdresseTagsLogs
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseId(int $adresseId): AdresseTagsLogs
    {
        $this->adresseId = $adresseId;
        return $this;
    }

    /** @return int */
    public function getAdresseId(): int
    {
        return $this->adresseId;
    }

    /**
     * @param int $adresseTagId
     * @return AdresseTagsLogs
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAdresseTagId(int $adresseTagId): AdresseTagsLogs
    {
        $this->adresseTagId = $adresseTagId;
        return $this;
    }

    /** @return int */
    public function getAdresseTagId(): int
    {
        return $this->adresseTagId;
    }

    /**
     * @param DateTime $createdAt
     * @return AdresseTagsLogs
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setCreatedAt(DateTime $createdAt): AdresseTagsLogs
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /** @return DateTime */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param int $id
     * @return AdresseTagsLogs
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setId(int $id): AdresseTagsLogs
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
     * @param int $tagId
     * @return AdresseTagsLogs
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setTagId(int $tagId): AdresseTagsLogs
    {
        $this->tagId = $tagId;
        return $this;
    }

    /** @return int */
    public function getTagId(): int
    {
        return $this->tagId;
    }
}

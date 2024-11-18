<?php

namespace Amine\Arcmd\Resources\Entities\Alertrecipient;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class Alertrecipient extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'alertrecipient';
    const PRIMARY_KEY  = 'recipient_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_EMAIL = 'email';
    const LABEL_NAME = 'name';
    const LABEL_RECIPIENT_ID = 'recipient_id';

    /** @var string $email */
    private string $email;

    /** @var string $name */
    private string $name;

    /** @var int $recipientId */
    private int $recipientId;


    /**
     * @param string $email
     * @return Alertrecipient
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setEmail(string $email): Alertrecipient
    {
        $this->email = $email;
        return $this;
    }

    /** @return string */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $name
     * @return Alertrecipient
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setName(string $name): Alertrecipient
    {
        $this->name = $name;
        return $this;
    }

    /** @return string */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param int $recipientId
     * @return Alertrecipient
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setRecipientId(int $recipientId): Alertrecipient
    {
        $this->recipientId = $recipientId;
        return $this;
    }

    /** @return int */
    public function getRecipientId(): int
    {
        return $this->recipientId;
    }
}

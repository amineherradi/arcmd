<?php

namespace Amine\Arcmd\Resources\Entities\Alertparam;

use DateTime;
use Amine\Arcmd\Resources\Entities\Abstractions\EntityAbstraction;
use Amine\Arcmd\Resources\Entities\Interfaces\EntityInterface;
use Amine\Arcmd\Resources\Entities\Exceptions\InvalidArgument;
use TypeError;

class AlertparamRecipient extends EntityAbstraction implements EntityInterface {
    const TABLE_NAME   = 'alertparam_recipient';
    const PRIMARY_KEY  = 'alert_recipient_id';
    const FOREIGN_KEYS = [
    ];

    const LABEL_ALERT_ID = 'alert_id';
    const LABEL_ALERT_RECIPIENT_ID = 'alert_recipient_id';
    const LABEL_RECIPIENT_ID = 'recipient_id';
    const LABEL_REMINDER_ONLY = 'reminder_only';
    const LABEL_TYPE_ID = 'type_id';

    /** @var int $alertId */
    private int $alertId;

    /** @var int $alertRecipientId */
    private int $alertRecipientId;

    /** @var int $recipientId */
    private int $recipientId;

    /** @var int $reminderOnly */
    private int $reminderOnly;

    /** @var int $typeId */
    private int $typeId;


    /**
     * @param int $alertId
     * @return AlertparamRecipient
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAlertId(int $alertId): AlertparamRecipient
    {
        $this->alertId = $alertId;
        return $this;
    }

    /** @return int */
    public function getAlertId(): int
    {
        return $this->alertId;
    }

    /**
     * @param int $alertRecipientId
     * @return AlertparamRecipient
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setAlertRecipientId(int $alertRecipientId): AlertparamRecipient
    {
        $this->alertRecipientId = $alertRecipientId;
        return $this;
    }

    /** @return int */
    public function getAlertRecipientId(): int
    {
        return $this->alertRecipientId;
    }

    /**
     * @param int $recipientId
     * @return AlertparamRecipient
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setRecipientId(int $recipientId): AlertparamRecipient
    {
        $this->recipientId = $recipientId;
        return $this;
    }

    /** @return int */
    public function getRecipientId(): int
    {
        return $this->recipientId;
    }

    /**
     * @param int $reminderOnly
     * @return AlertparamRecipient
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setReminderOnly(int $reminderOnly): AlertparamRecipient
    {
        $this->reminderOnly = $reminderOnly;
        return $this;
    }

    /** @return int */
    public function getReminderOnly(): int
    {
        return $this->reminderOnly;
    }

    /**
     * @param int $typeId
     * @return AlertparamRecipient
     * @throws InvalidArgument
     * @throws TypeError
     */
    public function setTypeId(int $typeId): AlertparamRecipient
    {
        $this->typeId = $typeId;
        return $this;
    }

    /** @return int */
    public function getTypeId(): int
    {
        return $this->typeId;
    }
}

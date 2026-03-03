<?php

namespace Appwrite\Enums;

use JsonSerializable;

class DomainTransferStatusStatus implements JsonSerializable
{
    private static DomainTransferStatusStatus $TRANSFERRABLE;
    private static DomainTransferStatusStatus $NOTTRANSFERRABLE;
    private static DomainTransferStatusStatus $PENDINGOWNER;
    private static DomainTransferStatusStatus $PENDINGADMIN;
    private static DomainTransferStatusStatus $PENDINGREGISTRY;
    private static DomainTransferStatusStatus $COMPLETED;
    private static DomainTransferStatusStatus $CANCELLED;
    private static DomainTransferStatusStatus $SERVICEUNAVAILABLE;

    private string $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    public function __toString(): string
    {
        return $this->value;
    }

    public function jsonSerialize(): string
    {
        return $this->value;
    }

    public static function TRANSFERRABLE(): DomainTransferStatusStatus
    {
        if (!isset(self::$TRANSFERRABLE)) {
            self::$TRANSFERRABLE = new DomainTransferStatusStatus('transferrable');
        }
        return self::$TRANSFERRABLE;
    }
    public static function NOTTRANSFERRABLE(): DomainTransferStatusStatus
    {
        if (!isset(self::$NOTTRANSFERRABLE)) {
            self::$NOTTRANSFERRABLE = new DomainTransferStatusStatus('not_transferrable');
        }
        return self::$NOTTRANSFERRABLE;
    }
    public static function PENDINGOWNER(): DomainTransferStatusStatus
    {
        if (!isset(self::$PENDINGOWNER)) {
            self::$PENDINGOWNER = new DomainTransferStatusStatus('pending_owner');
        }
        return self::$PENDINGOWNER;
    }
    public static function PENDINGADMIN(): DomainTransferStatusStatus
    {
        if (!isset(self::$PENDINGADMIN)) {
            self::$PENDINGADMIN = new DomainTransferStatusStatus('pending_admin');
        }
        return self::$PENDINGADMIN;
    }
    public static function PENDINGREGISTRY(): DomainTransferStatusStatus
    {
        if (!isset(self::$PENDINGREGISTRY)) {
            self::$PENDINGREGISTRY = new DomainTransferStatusStatus('pending_registry');
        }
        return self::$PENDINGREGISTRY;
    }
    public static function COMPLETED(): DomainTransferStatusStatus
    {
        if (!isset(self::$COMPLETED)) {
            self::$COMPLETED = new DomainTransferStatusStatus('completed');
        }
        return self::$COMPLETED;
    }
    public static function CANCELLED(): DomainTransferStatusStatus
    {
        if (!isset(self::$CANCELLED)) {
            self::$CANCELLED = new DomainTransferStatusStatus('cancelled');
        }
        return self::$CANCELLED;
    }
    public static function SERVICEUNAVAILABLE(): DomainTransferStatusStatus
    {
        if (!isset(self::$SERVICEUNAVAILABLE)) {
            self::$SERVICEUNAVAILABLE = new DomainTransferStatusStatus('service_unavailable');
        }
        return self::$SERVICEUNAVAILABLE;
    }
}
<?php

namespace Appwrite\Enums;

use JsonSerializable;

class RegistrationType implements JsonSerializable
{
    private static RegistrationType $NEW;
    private static RegistrationType $TRANSFER;
    private static RegistrationType $RENEWAL;
    private static RegistrationType $TRADE;

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

    public static function NEW(): RegistrationType
    {
        if (!isset(self::$NEW)) {
            self::$NEW = new RegistrationType('new');
        }
        return self::$NEW;
    }
    public static function TRANSFER(): RegistrationType
    {
        if (!isset(self::$TRANSFER)) {
            self::$TRANSFER = new RegistrationType('transfer');
        }
        return self::$TRANSFER;
    }
    public static function RENEWAL(): RegistrationType
    {
        if (!isset(self::$RENEWAL)) {
            self::$RENEWAL = new RegistrationType('renewal');
        }
        return self::$RENEWAL;
    }
    public static function TRADE(): RegistrationType
    {
        if (!isset(self::$TRADE)) {
            self::$TRADE = new RegistrationType('trade');
        }
        return self::$TRADE;
    }
}
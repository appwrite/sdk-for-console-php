<?php

namespace Appwrite\Enums;

use JsonSerializable;

class Status implements JsonSerializable
{
    private static Status $ACTIVE;

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

    public static function ACTIVE(): Status
    {
        if (!isset(self::$ACTIVE)) {
            self::$ACTIVE = new Status('active');
        }
        return self::$ACTIVE;
    }
}
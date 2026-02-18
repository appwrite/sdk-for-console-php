<?php

namespace Appwrite\Enums;

use JsonSerializable;

class FilterType implements JsonSerializable
{
    private static FilterType $PREMIUM;
    private static FilterType $SUGGESTION;

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

    public static function PREMIUM(): FilterType
    {
        if (!isset(self::$PREMIUM)) {
            self::$PREMIUM = new FilterType('premium');
        }
        return self::$PREMIUM;
    }
    public static function SUGGESTION(): FilterType
    {
        if (!isset(self::$SUGGESTION)) {
            self::$SUGGESTION = new FilterType('suggestion');
        }
        return self::$SUGGESTION;
    }
}
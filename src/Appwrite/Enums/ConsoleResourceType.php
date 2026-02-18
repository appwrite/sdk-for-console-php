<?php

namespace Appwrite\Enums;

use JsonSerializable;

class ConsoleResourceType implements JsonSerializable
{
    private static ConsoleResourceType $RULES;

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

    public static function RULES(): ConsoleResourceType
    {
        if (!isset(self::$RULES)) {
            self::$RULES = new ConsoleResourceType('rules');
        }
        return self::$RULES;
    }
}
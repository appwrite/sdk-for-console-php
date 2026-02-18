<?php

namespace Appwrite\Enums;

use JsonSerializable;

class Region implements JsonSerializable
{
    private static Region $DEFAULT;

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

    public static function DEFAULT(): Region
    {
        if (!isset(self::$DEFAULT)) {
            self::$DEFAULT = new Region('default');
        }
        return self::$DEFAULT;
    }
}
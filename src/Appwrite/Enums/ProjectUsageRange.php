<?php

namespace Appwrite\Enums;

use JsonSerializable;

class ProjectUsageRange implements JsonSerializable
{
    private static ProjectUsageRange $ONEHOUR;
    private static ProjectUsageRange $ONEDAY;

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

    public static function ONEHOUR(): ProjectUsageRange
    {
        if (!isset(self::$ONEHOUR)) {
            self::$ONEHOUR = new ProjectUsageRange('1h');
        }
        return self::$ONEHOUR;
    }
    public static function ONEDAY(): ProjectUsageRange
    {
        if (!isset(self::$ONEDAY)) {
            self::$ONEDAY = new ProjectUsageRange('1d');
        }
        return self::$ONEDAY;
    }
}
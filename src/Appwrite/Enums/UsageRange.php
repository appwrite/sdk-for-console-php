<?php

namespace Appwrite\Enums;

use JsonSerializable;

class UsageRange implements JsonSerializable
{
    private static UsageRange $TWENTYFOURHOURS;
    private static UsageRange $THIRTYDAYS;
    private static UsageRange $NINETYDAYS;

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

    public static function TWENTYFOURHOURS(): UsageRange
    {
        if (!isset(self::$TWENTYFOURHOURS)) {
            self::$TWENTYFOURHOURS = new UsageRange('24h');
        }
        return self::$TWENTYFOURHOURS;
    }
    public static function THIRTYDAYS(): UsageRange
    {
        if (!isset(self::$THIRTYDAYS)) {
            self::$THIRTYDAYS = new UsageRange('30d');
        }
        return self::$THIRTYDAYS;
    }
    public static function NINETYDAYS(): UsageRange
    {
        if (!isset(self::$NINETYDAYS)) {
            self::$NINETYDAYS = new UsageRange('90d');
        }
        return self::$NINETYDAYS;
    }
}
<?php

namespace Appwrite\Enums;

use JsonSerializable;

class VCSDetectionType implements JsonSerializable
{
    private static VCSDetectionType $RUNTIME;
    private static VCSDetectionType $FRAMEWORK;

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

    public static function RUNTIME(): VCSDetectionType
    {
        if (!isset(self::$RUNTIME)) {
            self::$RUNTIME = new VCSDetectionType('runtime');
        }
        return self::$RUNTIME;
    }
    public static function FRAMEWORK(): VCSDetectionType
    {
        if (!isset(self::$FRAMEWORK)) {
            self::$FRAMEWORK = new VCSDetectionType('framework');
        }
        return self::$FRAMEWORK;
    }
}
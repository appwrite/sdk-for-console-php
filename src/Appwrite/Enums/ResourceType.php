<?php

namespace Appwrite\Enums;

use JsonSerializable;

class ResourceType implements JsonSerializable
{
    private static ResourceType $FUNCTION;
    private static ResourceType $EXECUTION;
    private static ResourceType $MESSAGE;

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

    public static function FUNCTION(): ResourceType
    {
        if (!isset(self::$FUNCTION)) {
            self::$FUNCTION = new ResourceType('function');
        }
        return self::$FUNCTION;
    }
    public static function EXECUTION(): ResourceType
    {
        if (!isset(self::$EXECUTION)) {
            self::$EXECUTION = new ResourceType('execution');
        }
        return self::$EXECUTION;
    }
    public static function MESSAGE(): ResourceType
    {
        if (!isset(self::$MESSAGE)) {
            self::$MESSAGE = new ResourceType('message');
        }
        return self::$MESSAGE;
    }
}
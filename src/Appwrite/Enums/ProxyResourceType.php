<?php

namespace Appwrite\Enums;

use JsonSerializable;

class ProxyResourceType implements JsonSerializable
{
    private static ProxyResourceType $SITE;
    private static ProxyResourceType $FUNCTION;

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

    public static function SITE(): ProxyResourceType
    {
        if (!isset(self::$SITE)) {
            self::$SITE = new ProxyResourceType('site');
        }
        return self::$SITE;
    }
    public static function FUNCTION(): ProxyResourceType
    {
        if (!isset(self::$FUNCTION)) {
            self::$FUNCTION = new ProxyResourceType('function');
        }
        return self::$FUNCTION;
    }
}
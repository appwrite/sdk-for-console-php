<?php

namespace Appwrite\Enums;

use JsonSerializable;

class Platform implements JsonSerializable
{
    private static Platform $APPWRITE;
    private static Platform $IMAGINE;

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

    public static function APPWRITE(): Platform
    {
        if (!isset(self::$APPWRITE)) {
            self::$APPWRITE = new Platform('appwrite');
        }
        return self::$APPWRITE;
    }
    public static function IMAGINE(): Platform
    {
        if (!isset(self::$IMAGINE)) {
            self::$IMAGINE = new Platform('imagine');
        }
        return self::$IMAGINE;
    }
}
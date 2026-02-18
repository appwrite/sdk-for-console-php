<?php

namespace Appwrite\Enums;

use JsonSerializable;

class SMTPSecure implements JsonSerializable
{
    private static SMTPSecure $TLS;
    private static SMTPSecure $SSL;

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

    public static function TLS(): SMTPSecure
    {
        if (!isset(self::$TLS)) {
            self::$TLS = new SMTPSecure('tls');
        }
        return self::$TLS;
    }
    public static function SSL(): SMTPSecure
    {
        if (!isset(self::$SSL)) {
            self::$SSL = new SMTPSecure('ssl');
        }
        return self::$SSL;
    }
}
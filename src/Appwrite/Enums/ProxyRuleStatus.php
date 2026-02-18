<?php

namespace Appwrite\Enums;

use JsonSerializable;

class ProxyRuleStatus implements JsonSerializable
{
    private static ProxyRuleStatus $CREATED;
    private static ProxyRuleStatus $VERIFYING;
    private static ProxyRuleStatus $VERIFIED;
    private static ProxyRuleStatus $UNVERIFIED;

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

    public static function CREATED(): ProxyRuleStatus
    {
        if (!isset(self::$CREATED)) {
            self::$CREATED = new ProxyRuleStatus('created');
        }
        return self::$CREATED;
    }
    public static function VERIFYING(): ProxyRuleStatus
    {
        if (!isset(self::$VERIFYING)) {
            self::$VERIFYING = new ProxyRuleStatus('verifying');
        }
        return self::$VERIFYING;
    }
    public static function VERIFIED(): ProxyRuleStatus
    {
        if (!isset(self::$VERIFIED)) {
            self::$VERIFIED = new ProxyRuleStatus('verified');
        }
        return self::$VERIFIED;
    }
    public static function UNVERIFIED(): ProxyRuleStatus
    {
        if (!isset(self::$UNVERIFIED)) {
            self::$UNVERIFIED = new ProxyRuleStatus('unverified');
        }
        return self::$UNVERIFIED;
    }
}
<?php

namespace Appwrite\Enums;

use JsonSerializable;

class SmsTemplateType implements JsonSerializable
{
    private static SmsTemplateType $VERIFICATION;
    private static SmsTemplateType $LOGIN;
    private static SmsTemplateType $INVITATION;
    private static SmsTemplateType $MFACHALLENGE;

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

    public static function VERIFICATION(): SmsTemplateType
    {
        if (!isset(self::$VERIFICATION)) {
            self::$VERIFICATION = new SmsTemplateType('verification');
        }
        return self::$VERIFICATION;
    }
    public static function LOGIN(): SmsTemplateType
    {
        if (!isset(self::$LOGIN)) {
            self::$LOGIN = new SmsTemplateType('login');
        }
        return self::$LOGIN;
    }
    public static function INVITATION(): SmsTemplateType
    {
        if (!isset(self::$INVITATION)) {
            self::$INVITATION = new SmsTemplateType('invitation');
        }
        return self::$INVITATION;
    }
    public static function MFACHALLENGE(): SmsTemplateType
    {
        if (!isset(self::$MFACHALLENGE)) {
            self::$MFACHALLENGE = new SmsTemplateType('mfachallenge');
        }
        return self::$MFACHALLENGE;
    }
}
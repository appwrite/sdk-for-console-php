<?php

namespace Appwrite\Enums;

use JsonSerializable;

class Api implements JsonSerializable
{
    private static Api $REST;
    private static Api $GRAPHQL;
    private static Api $REALTIME;

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

    public static function REST(): Api
    {
        if (!isset(self::$REST)) {
            self::$REST = new Api('rest');
        }
        return self::$REST;
    }
    public static function GRAPHQL(): Api
    {
        if (!isset(self::$GRAPHQL)) {
            self::$GRAPHQL = new Api('graphql');
        }
        return self::$GRAPHQL;
    }
    public static function REALTIME(): Api
    {
        if (!isset(self::$REALTIME)) {
            self::$REALTIME = new Api('realtime');
        }
        return self::$REALTIME;
    }
}
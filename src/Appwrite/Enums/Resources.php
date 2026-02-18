<?php

namespace Appwrite\Enums;

use JsonSerializable;

class Resources implements JsonSerializable
{
    private static Resources $USER;
    private static Resources $DATABASE;
    private static Resources $TABLE;
    private static Resources $COLUMN;
    private static Resources $INDEX;
    private static Resources $ROW;
    private static Resources $DOCUMENT;
    private static Resources $ATTRIBUTE;
    private static Resources $COLLECTION;
    private static Resources $BUCKET;
    private static Resources $FILE;

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

    public static function USER(): Resources
    {
        if (!isset(self::$USER)) {
            self::$USER = new Resources('user');
        }
        return self::$USER;
    }
    public static function DATABASE(): Resources
    {
        if (!isset(self::$DATABASE)) {
            self::$DATABASE = new Resources('database');
        }
        return self::$DATABASE;
    }
    public static function TABLE(): Resources
    {
        if (!isset(self::$TABLE)) {
            self::$TABLE = new Resources('table');
        }
        return self::$TABLE;
    }
    public static function COLUMN(): Resources
    {
        if (!isset(self::$COLUMN)) {
            self::$COLUMN = new Resources('column');
        }
        return self::$COLUMN;
    }
    public static function INDEX(): Resources
    {
        if (!isset(self::$INDEX)) {
            self::$INDEX = new Resources('index');
        }
        return self::$INDEX;
    }
    public static function ROW(): Resources
    {
        if (!isset(self::$ROW)) {
            self::$ROW = new Resources('row');
        }
        return self::$ROW;
    }
    public static function DOCUMENT(): Resources
    {
        if (!isset(self::$DOCUMENT)) {
            self::$DOCUMENT = new Resources('document');
        }
        return self::$DOCUMENT;
    }
    public static function ATTRIBUTE(): Resources
    {
        if (!isset(self::$ATTRIBUTE)) {
            self::$ATTRIBUTE = new Resources('attribute');
        }
        return self::$ATTRIBUTE;
    }
    public static function COLLECTION(): Resources
    {
        if (!isset(self::$COLLECTION)) {
            self::$COLLECTION = new Resources('collection');
        }
        return self::$COLLECTION;
    }
    public static function BUCKET(): Resources
    {
        if (!isset(self::$BUCKET)) {
            self::$BUCKET = new Resources('bucket');
        }
        return self::$BUCKET;
    }
    public static function FILE(): Resources
    {
        if (!isset(self::$FILE)) {
            self::$FILE = new Resources('file');
        }
        return self::$FILE;
    }
}
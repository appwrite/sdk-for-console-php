<?php

namespace Appwrite\Enums;

use JsonSerializable;

class NHostMigrationResource implements JsonSerializable
{
    private static NHostMigrationResource $USER;
    private static NHostMigrationResource $DATABASE;
    private static NHostMigrationResource $TABLE;
    private static NHostMigrationResource $COLUMN;
    private static NHostMigrationResource $INDEX;
    private static NHostMigrationResource $ROW;
    private static NHostMigrationResource $DOCUMENT;
    private static NHostMigrationResource $ATTRIBUTE;
    private static NHostMigrationResource $COLLECTION;
    private static NHostMigrationResource $BUCKET;
    private static NHostMigrationResource $FILE;

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

    public static function USER(): NHostMigrationResource
    {
        if (!isset(self::$USER)) {
            self::$USER = new NHostMigrationResource('user');
        }
        return self::$USER;
    }
    public static function DATABASE(): NHostMigrationResource
    {
        if (!isset(self::$DATABASE)) {
            self::$DATABASE = new NHostMigrationResource('database');
        }
        return self::$DATABASE;
    }
    public static function TABLE(): NHostMigrationResource
    {
        if (!isset(self::$TABLE)) {
            self::$TABLE = new NHostMigrationResource('table');
        }
        return self::$TABLE;
    }
    public static function COLUMN(): NHostMigrationResource
    {
        if (!isset(self::$COLUMN)) {
            self::$COLUMN = new NHostMigrationResource('column');
        }
        return self::$COLUMN;
    }
    public static function INDEX(): NHostMigrationResource
    {
        if (!isset(self::$INDEX)) {
            self::$INDEX = new NHostMigrationResource('index');
        }
        return self::$INDEX;
    }
    public static function ROW(): NHostMigrationResource
    {
        if (!isset(self::$ROW)) {
            self::$ROW = new NHostMigrationResource('row');
        }
        return self::$ROW;
    }
    public static function DOCUMENT(): NHostMigrationResource
    {
        if (!isset(self::$DOCUMENT)) {
            self::$DOCUMENT = new NHostMigrationResource('document');
        }
        return self::$DOCUMENT;
    }
    public static function ATTRIBUTE(): NHostMigrationResource
    {
        if (!isset(self::$ATTRIBUTE)) {
            self::$ATTRIBUTE = new NHostMigrationResource('attribute');
        }
        return self::$ATTRIBUTE;
    }
    public static function COLLECTION(): NHostMigrationResource
    {
        if (!isset(self::$COLLECTION)) {
            self::$COLLECTION = new NHostMigrationResource('collection');
        }
        return self::$COLLECTION;
    }
    public static function BUCKET(): NHostMigrationResource
    {
        if (!isset(self::$BUCKET)) {
            self::$BUCKET = new NHostMigrationResource('bucket');
        }
        return self::$BUCKET;
    }
    public static function FILE(): NHostMigrationResource
    {
        if (!isset(self::$FILE)) {
            self::$FILE = new NHostMigrationResource('file');
        }
        return self::$FILE;
    }
}
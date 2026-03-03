<?php

namespace Appwrite\Enums;

use JsonSerializable;

class SupabaseMigrationResource implements JsonSerializable
{
    private static SupabaseMigrationResource $USER;
    private static SupabaseMigrationResource $DATABASE;
    private static SupabaseMigrationResource $TABLE;
    private static SupabaseMigrationResource $COLUMN;
    private static SupabaseMigrationResource $INDEX;
    private static SupabaseMigrationResource $ROW;
    private static SupabaseMigrationResource $DOCUMENT;
    private static SupabaseMigrationResource $ATTRIBUTE;
    private static SupabaseMigrationResource $COLLECTION;
    private static SupabaseMigrationResource $BUCKET;
    private static SupabaseMigrationResource $FILE;

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

    public static function USER(): SupabaseMigrationResource
    {
        if (!isset(self::$USER)) {
            self::$USER = new SupabaseMigrationResource('user');
        }
        return self::$USER;
    }
    public static function DATABASE(): SupabaseMigrationResource
    {
        if (!isset(self::$DATABASE)) {
            self::$DATABASE = new SupabaseMigrationResource('database');
        }
        return self::$DATABASE;
    }
    public static function TABLE(): SupabaseMigrationResource
    {
        if (!isset(self::$TABLE)) {
            self::$TABLE = new SupabaseMigrationResource('table');
        }
        return self::$TABLE;
    }
    public static function COLUMN(): SupabaseMigrationResource
    {
        if (!isset(self::$COLUMN)) {
            self::$COLUMN = new SupabaseMigrationResource('column');
        }
        return self::$COLUMN;
    }
    public static function INDEX(): SupabaseMigrationResource
    {
        if (!isset(self::$INDEX)) {
            self::$INDEX = new SupabaseMigrationResource('index');
        }
        return self::$INDEX;
    }
    public static function ROW(): SupabaseMigrationResource
    {
        if (!isset(self::$ROW)) {
            self::$ROW = new SupabaseMigrationResource('row');
        }
        return self::$ROW;
    }
    public static function DOCUMENT(): SupabaseMigrationResource
    {
        if (!isset(self::$DOCUMENT)) {
            self::$DOCUMENT = new SupabaseMigrationResource('document');
        }
        return self::$DOCUMENT;
    }
    public static function ATTRIBUTE(): SupabaseMigrationResource
    {
        if (!isset(self::$ATTRIBUTE)) {
            self::$ATTRIBUTE = new SupabaseMigrationResource('attribute');
        }
        return self::$ATTRIBUTE;
    }
    public static function COLLECTION(): SupabaseMigrationResource
    {
        if (!isset(self::$COLLECTION)) {
            self::$COLLECTION = new SupabaseMigrationResource('collection');
        }
        return self::$COLLECTION;
    }
    public static function BUCKET(): SupabaseMigrationResource
    {
        if (!isset(self::$BUCKET)) {
            self::$BUCKET = new SupabaseMigrationResource('bucket');
        }
        return self::$BUCKET;
    }
    public static function FILE(): SupabaseMigrationResource
    {
        if (!isset(self::$FILE)) {
            self::$FILE = new SupabaseMigrationResource('file');
        }
        return self::$FILE;
    }
}
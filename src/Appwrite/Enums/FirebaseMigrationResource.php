<?php

namespace Appwrite\Enums;

use JsonSerializable;

class FirebaseMigrationResource implements JsonSerializable
{
    private static FirebaseMigrationResource $USER;
    private static FirebaseMigrationResource $DATABASE;
    private static FirebaseMigrationResource $TABLE;
    private static FirebaseMigrationResource $COLUMN;
    private static FirebaseMigrationResource $ROW;
    private static FirebaseMigrationResource $DOCUMENT;
    private static FirebaseMigrationResource $ATTRIBUTE;
    private static FirebaseMigrationResource $COLLECTION;
    private static FirebaseMigrationResource $BUCKET;
    private static FirebaseMigrationResource $FILE;

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

    public static function USER(): FirebaseMigrationResource
    {
        if (!isset(self::$USER)) {
            self::$USER = new FirebaseMigrationResource('user');
        }
        return self::$USER;
    }
    public static function DATABASE(): FirebaseMigrationResource
    {
        if (!isset(self::$DATABASE)) {
            self::$DATABASE = new FirebaseMigrationResource('database');
        }
        return self::$DATABASE;
    }
    public static function TABLE(): FirebaseMigrationResource
    {
        if (!isset(self::$TABLE)) {
            self::$TABLE = new FirebaseMigrationResource('table');
        }
        return self::$TABLE;
    }
    public static function COLUMN(): FirebaseMigrationResource
    {
        if (!isset(self::$COLUMN)) {
            self::$COLUMN = new FirebaseMigrationResource('column');
        }
        return self::$COLUMN;
    }
    public static function ROW(): FirebaseMigrationResource
    {
        if (!isset(self::$ROW)) {
            self::$ROW = new FirebaseMigrationResource('row');
        }
        return self::$ROW;
    }
    public static function DOCUMENT(): FirebaseMigrationResource
    {
        if (!isset(self::$DOCUMENT)) {
            self::$DOCUMENT = new FirebaseMigrationResource('document');
        }
        return self::$DOCUMENT;
    }
    public static function ATTRIBUTE(): FirebaseMigrationResource
    {
        if (!isset(self::$ATTRIBUTE)) {
            self::$ATTRIBUTE = new FirebaseMigrationResource('attribute');
        }
        return self::$ATTRIBUTE;
    }
    public static function COLLECTION(): FirebaseMigrationResource
    {
        if (!isset(self::$COLLECTION)) {
            self::$COLLECTION = new FirebaseMigrationResource('collection');
        }
        return self::$COLLECTION;
    }
    public static function BUCKET(): FirebaseMigrationResource
    {
        if (!isset(self::$BUCKET)) {
            self::$BUCKET = new FirebaseMigrationResource('bucket');
        }
        return self::$BUCKET;
    }
    public static function FILE(): FirebaseMigrationResource
    {
        if (!isset(self::$FILE)) {
            self::$FILE = new FirebaseMigrationResource('file');
        }
        return self::$FILE;
    }
}
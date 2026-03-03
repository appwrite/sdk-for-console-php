<?php

namespace Appwrite\Enums;

use JsonSerializable;

class AppwriteMigrationResource implements JsonSerializable
{
    private static AppwriteMigrationResource $USER;
    private static AppwriteMigrationResource $TEAM;
    private static AppwriteMigrationResource $MEMBERSHIP;
    private static AppwriteMigrationResource $DATABASE;
    private static AppwriteMigrationResource $TABLE;
    private static AppwriteMigrationResource $COLUMN;
    private static AppwriteMigrationResource $INDEX;
    private static AppwriteMigrationResource $ROW;
    private static AppwriteMigrationResource $DOCUMENT;
    private static AppwriteMigrationResource $ATTRIBUTE;
    private static AppwriteMigrationResource $COLLECTION;
    private static AppwriteMigrationResource $BUCKET;
    private static AppwriteMigrationResource $FILE;
    private static AppwriteMigrationResource $FUNCTION;
    private static AppwriteMigrationResource $DEPLOYMENT;
    private static AppwriteMigrationResource $ENVIRONMENTVARIABLE;
    private static AppwriteMigrationResource $SITE;
    private static AppwriteMigrationResource $SITEDEPLOYMENT;
    private static AppwriteMigrationResource $SITEVARIABLE;

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

    public static function USER(): AppwriteMigrationResource
    {
        if (!isset(self::$USER)) {
            self::$USER = new AppwriteMigrationResource('user');
        }
        return self::$USER;
    }
    public static function TEAM(): AppwriteMigrationResource
    {
        if (!isset(self::$TEAM)) {
            self::$TEAM = new AppwriteMigrationResource('team');
        }
        return self::$TEAM;
    }
    public static function MEMBERSHIP(): AppwriteMigrationResource
    {
        if (!isset(self::$MEMBERSHIP)) {
            self::$MEMBERSHIP = new AppwriteMigrationResource('membership');
        }
        return self::$MEMBERSHIP;
    }
    public static function DATABASE(): AppwriteMigrationResource
    {
        if (!isset(self::$DATABASE)) {
            self::$DATABASE = new AppwriteMigrationResource('database');
        }
        return self::$DATABASE;
    }
    public static function TABLE(): AppwriteMigrationResource
    {
        if (!isset(self::$TABLE)) {
            self::$TABLE = new AppwriteMigrationResource('table');
        }
        return self::$TABLE;
    }
    public static function COLUMN(): AppwriteMigrationResource
    {
        if (!isset(self::$COLUMN)) {
            self::$COLUMN = new AppwriteMigrationResource('column');
        }
        return self::$COLUMN;
    }
    public static function INDEX(): AppwriteMigrationResource
    {
        if (!isset(self::$INDEX)) {
            self::$INDEX = new AppwriteMigrationResource('index');
        }
        return self::$INDEX;
    }
    public static function ROW(): AppwriteMigrationResource
    {
        if (!isset(self::$ROW)) {
            self::$ROW = new AppwriteMigrationResource('row');
        }
        return self::$ROW;
    }
    public static function DOCUMENT(): AppwriteMigrationResource
    {
        if (!isset(self::$DOCUMENT)) {
            self::$DOCUMENT = new AppwriteMigrationResource('document');
        }
        return self::$DOCUMENT;
    }
    public static function ATTRIBUTE(): AppwriteMigrationResource
    {
        if (!isset(self::$ATTRIBUTE)) {
            self::$ATTRIBUTE = new AppwriteMigrationResource('attribute');
        }
        return self::$ATTRIBUTE;
    }
    public static function COLLECTION(): AppwriteMigrationResource
    {
        if (!isset(self::$COLLECTION)) {
            self::$COLLECTION = new AppwriteMigrationResource('collection');
        }
        return self::$COLLECTION;
    }
    public static function BUCKET(): AppwriteMigrationResource
    {
        if (!isset(self::$BUCKET)) {
            self::$BUCKET = new AppwriteMigrationResource('bucket');
        }
        return self::$BUCKET;
    }
    public static function FILE(): AppwriteMigrationResource
    {
        if (!isset(self::$FILE)) {
            self::$FILE = new AppwriteMigrationResource('file');
        }
        return self::$FILE;
    }
    public static function FUNCTION(): AppwriteMigrationResource
    {
        if (!isset(self::$FUNCTION)) {
            self::$FUNCTION = new AppwriteMigrationResource('function');
        }
        return self::$FUNCTION;
    }
    public static function DEPLOYMENT(): AppwriteMigrationResource
    {
        if (!isset(self::$DEPLOYMENT)) {
            self::$DEPLOYMENT = new AppwriteMigrationResource('deployment');
        }
        return self::$DEPLOYMENT;
    }
    public static function ENVIRONMENTVARIABLE(): AppwriteMigrationResource
    {
        if (!isset(self::$ENVIRONMENTVARIABLE)) {
            self::$ENVIRONMENTVARIABLE = new AppwriteMigrationResource('environment-variable');
        }
        return self::$ENVIRONMENTVARIABLE;
    }
    public static function SITE(): AppwriteMigrationResource
    {
        if (!isset(self::$SITE)) {
            self::$SITE = new AppwriteMigrationResource('site');
        }
        return self::$SITE;
    }
    public static function SITEDEPLOYMENT(): AppwriteMigrationResource
    {
        if (!isset(self::$SITEDEPLOYMENT)) {
            self::$SITEDEPLOYMENT = new AppwriteMigrationResource('site-deployment');
        }
        return self::$SITEDEPLOYMENT;
    }
    public static function SITEVARIABLE(): AppwriteMigrationResource
    {
        if (!isset(self::$SITEVARIABLE)) {
            self::$SITEVARIABLE = new AppwriteMigrationResource('site-variable');
        }
        return self::$SITEVARIABLE;
    }
}
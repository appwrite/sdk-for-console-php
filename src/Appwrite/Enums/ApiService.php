<?php

namespace Appwrite\Enums;

use JsonSerializable;

class ApiService implements JsonSerializable
{
    private static ApiService $ACCOUNT;
    private static ApiService $AVATARS;
    private static ApiService $DATABASES;
    private static ApiService $TABLESDB;
    private static ApiService $LOCALE;
    private static ApiService $HEALTH;
    private static ApiService $STORAGE;
    private static ApiService $TEAMS;
    private static ApiService $USERS;
    private static ApiService $SITES;
    private static ApiService $FUNCTIONS;
    private static ApiService $GRAPHQL;
    private static ApiService $MESSAGING;

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

    public static function ACCOUNT(): ApiService
    {
        if (!isset(self::$ACCOUNT)) {
            self::$ACCOUNT = new ApiService('account');
        }
        return self::$ACCOUNT;
    }
    public static function AVATARS(): ApiService
    {
        if (!isset(self::$AVATARS)) {
            self::$AVATARS = new ApiService('avatars');
        }
        return self::$AVATARS;
    }
    public static function DATABASES(): ApiService
    {
        if (!isset(self::$DATABASES)) {
            self::$DATABASES = new ApiService('databases');
        }
        return self::$DATABASES;
    }
    public static function TABLESDB(): ApiService
    {
        if (!isset(self::$TABLESDB)) {
            self::$TABLESDB = new ApiService('tablesdb');
        }
        return self::$TABLESDB;
    }
    public static function LOCALE(): ApiService
    {
        if (!isset(self::$LOCALE)) {
            self::$LOCALE = new ApiService('locale');
        }
        return self::$LOCALE;
    }
    public static function HEALTH(): ApiService
    {
        if (!isset(self::$HEALTH)) {
            self::$HEALTH = new ApiService('health');
        }
        return self::$HEALTH;
    }
    public static function STORAGE(): ApiService
    {
        if (!isset(self::$STORAGE)) {
            self::$STORAGE = new ApiService('storage');
        }
        return self::$STORAGE;
    }
    public static function TEAMS(): ApiService
    {
        if (!isset(self::$TEAMS)) {
            self::$TEAMS = new ApiService('teams');
        }
        return self::$TEAMS;
    }
    public static function USERS(): ApiService
    {
        if (!isset(self::$USERS)) {
            self::$USERS = new ApiService('users');
        }
        return self::$USERS;
    }
    public static function SITES(): ApiService
    {
        if (!isset(self::$SITES)) {
            self::$SITES = new ApiService('sites');
        }
        return self::$SITES;
    }
    public static function FUNCTIONS(): ApiService
    {
        if (!isset(self::$FUNCTIONS)) {
            self::$FUNCTIONS = new ApiService('functions');
        }
        return self::$FUNCTIONS;
    }
    public static function GRAPHQL(): ApiService
    {
        if (!isset(self::$GRAPHQL)) {
            self::$GRAPHQL = new ApiService('graphql');
        }
        return self::$GRAPHQL;
    }
    public static function MESSAGING(): ApiService
    {
        if (!isset(self::$MESSAGING)) {
            self::$MESSAGING = new ApiService('messaging');
        }
        return self::$MESSAGING;
    }
}
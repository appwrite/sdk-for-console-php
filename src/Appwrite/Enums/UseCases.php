<?php

namespace Appwrite\Enums;

use JsonSerializable;

class UseCases implements JsonSerializable
{
    private static UseCases $PORTFOLIO;
    private static UseCases $STARTER;
    private static UseCases $EVENTS;
    private static UseCases $ECOMMERCE;
    private static UseCases $DOCUMENTATION;
    private static UseCases $BLOG;
    private static UseCases $AI;
    private static UseCases $FORMS;
    private static UseCases $DASHBOARD;

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

    public static function PORTFOLIO(): UseCases
    {
        if (!isset(self::$PORTFOLIO)) {
            self::$PORTFOLIO = new UseCases('portfolio');
        }
        return self::$PORTFOLIO;
    }
    public static function STARTER(): UseCases
    {
        if (!isset(self::$STARTER)) {
            self::$STARTER = new UseCases('starter');
        }
        return self::$STARTER;
    }
    public static function EVENTS(): UseCases
    {
        if (!isset(self::$EVENTS)) {
            self::$EVENTS = new UseCases('events');
        }
        return self::$EVENTS;
    }
    public static function ECOMMERCE(): UseCases
    {
        if (!isset(self::$ECOMMERCE)) {
            self::$ECOMMERCE = new UseCases('ecommerce');
        }
        return self::$ECOMMERCE;
    }
    public static function DOCUMENTATION(): UseCases
    {
        if (!isset(self::$DOCUMENTATION)) {
            self::$DOCUMENTATION = new UseCases('documentation');
        }
        return self::$DOCUMENTATION;
    }
    public static function BLOG(): UseCases
    {
        if (!isset(self::$BLOG)) {
            self::$BLOG = new UseCases('blog');
        }
        return self::$BLOG;
    }
    public static function AI(): UseCases
    {
        if (!isset(self::$AI)) {
            self::$AI = new UseCases('ai');
        }
        return self::$AI;
    }
    public static function FORMS(): UseCases
    {
        if (!isset(self::$FORMS)) {
            self::$FORMS = new UseCases('forms');
        }
        return self::$FORMS;
    }
    public static function DASHBOARD(): UseCases
    {
        if (!isset(self::$DASHBOARD)) {
            self::$DASHBOARD = new UseCases('dashboard');
        }
        return self::$DASHBOARD;
    }
}
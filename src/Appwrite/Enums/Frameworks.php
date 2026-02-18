<?php

namespace Appwrite\Enums;

use JsonSerializable;

class Frameworks implements JsonSerializable
{
    private static Frameworks $ANALOG;
    private static Frameworks $ANGULAR;
    private static Frameworks $NEXTJS;
    private static Frameworks $REACT;
    private static Frameworks $NUXT;
    private static Frameworks $VUE;
    private static Frameworks $SVELTEKIT;
    private static Frameworks $ASTRO;
    private static Frameworks $TANSTACKSTART;
    private static Frameworks $REMIX;
    private static Frameworks $LYNX;
    private static Frameworks $FLUTTER;
    private static Frameworks $REACTNATIVE;
    private static Frameworks $VITE;
    private static Frameworks $OTHER;

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

    public static function ANALOG(): Frameworks
    {
        if (!isset(self::$ANALOG)) {
            self::$ANALOG = new Frameworks('analog');
        }
        return self::$ANALOG;
    }
    public static function ANGULAR(): Frameworks
    {
        if (!isset(self::$ANGULAR)) {
            self::$ANGULAR = new Frameworks('angular');
        }
        return self::$ANGULAR;
    }
    public static function NEXTJS(): Frameworks
    {
        if (!isset(self::$NEXTJS)) {
            self::$NEXTJS = new Frameworks('nextjs');
        }
        return self::$NEXTJS;
    }
    public static function REACT(): Frameworks
    {
        if (!isset(self::$REACT)) {
            self::$REACT = new Frameworks('react');
        }
        return self::$REACT;
    }
    public static function NUXT(): Frameworks
    {
        if (!isset(self::$NUXT)) {
            self::$NUXT = new Frameworks('nuxt');
        }
        return self::$NUXT;
    }
    public static function VUE(): Frameworks
    {
        if (!isset(self::$VUE)) {
            self::$VUE = new Frameworks('vue');
        }
        return self::$VUE;
    }
    public static function SVELTEKIT(): Frameworks
    {
        if (!isset(self::$SVELTEKIT)) {
            self::$SVELTEKIT = new Frameworks('sveltekit');
        }
        return self::$SVELTEKIT;
    }
    public static function ASTRO(): Frameworks
    {
        if (!isset(self::$ASTRO)) {
            self::$ASTRO = new Frameworks('astro');
        }
        return self::$ASTRO;
    }
    public static function TANSTACKSTART(): Frameworks
    {
        if (!isset(self::$TANSTACKSTART)) {
            self::$TANSTACKSTART = new Frameworks('tanstack-start');
        }
        return self::$TANSTACKSTART;
    }
    public static function REMIX(): Frameworks
    {
        if (!isset(self::$REMIX)) {
            self::$REMIX = new Frameworks('remix');
        }
        return self::$REMIX;
    }
    public static function LYNX(): Frameworks
    {
        if (!isset(self::$LYNX)) {
            self::$LYNX = new Frameworks('lynx');
        }
        return self::$LYNX;
    }
    public static function FLUTTER(): Frameworks
    {
        if (!isset(self::$FLUTTER)) {
            self::$FLUTTER = new Frameworks('flutter');
        }
        return self::$FLUTTER;
    }
    public static function REACTNATIVE(): Frameworks
    {
        if (!isset(self::$REACTNATIVE)) {
            self::$REACTNATIVE = new Frameworks('react-native');
        }
        return self::$REACTNATIVE;
    }
    public static function VITE(): Frameworks
    {
        if (!isset(self::$VITE)) {
            self::$VITE = new Frameworks('vite');
        }
        return self::$VITE;
    }
    public static function OTHER(): Frameworks
    {
        if (!isset(self::$OTHER)) {
            self::$OTHER = new Frameworks('other');
        }
        return self::$OTHER;
    }
}
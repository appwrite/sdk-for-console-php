<?php

namespace Appwrite\Enums;

use JsonSerializable;

class PlatformType implements JsonSerializable
{
    private static PlatformType $WEB;
    private static PlatformType $FLUTTERWEB;
    private static PlatformType $FLUTTERIOS;
    private static PlatformType $FLUTTERANDROID;
    private static PlatformType $FLUTTERLINUX;
    private static PlatformType $FLUTTERMACOS;
    private static PlatformType $FLUTTERWINDOWS;
    private static PlatformType $APPLEIOS;
    private static PlatformType $APPLEMACOS;
    private static PlatformType $APPLEWATCHOS;
    private static PlatformType $APPLETVOS;
    private static PlatformType $ANDROID;
    private static PlatformType $UNITY;
    private static PlatformType $REACTNATIVEIOS;
    private static PlatformType $REACTNATIVEANDROID;

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

    public static function WEB(): PlatformType
    {
        if (!isset(self::$WEB)) {
            self::$WEB = new PlatformType('web');
        }
        return self::$WEB;
    }
    public static function FLUTTERWEB(): PlatformType
    {
        if (!isset(self::$FLUTTERWEB)) {
            self::$FLUTTERWEB = new PlatformType('flutter-web');
        }
        return self::$FLUTTERWEB;
    }
    public static function FLUTTERIOS(): PlatformType
    {
        if (!isset(self::$FLUTTERIOS)) {
            self::$FLUTTERIOS = new PlatformType('flutter-ios');
        }
        return self::$FLUTTERIOS;
    }
    public static function FLUTTERANDROID(): PlatformType
    {
        if (!isset(self::$FLUTTERANDROID)) {
            self::$FLUTTERANDROID = new PlatformType('flutter-android');
        }
        return self::$FLUTTERANDROID;
    }
    public static function FLUTTERLINUX(): PlatformType
    {
        if (!isset(self::$FLUTTERLINUX)) {
            self::$FLUTTERLINUX = new PlatformType('flutter-linux');
        }
        return self::$FLUTTERLINUX;
    }
    public static function FLUTTERMACOS(): PlatformType
    {
        if (!isset(self::$FLUTTERMACOS)) {
            self::$FLUTTERMACOS = new PlatformType('flutter-macos');
        }
        return self::$FLUTTERMACOS;
    }
    public static function FLUTTERWINDOWS(): PlatformType
    {
        if (!isset(self::$FLUTTERWINDOWS)) {
            self::$FLUTTERWINDOWS = new PlatformType('flutter-windows');
        }
        return self::$FLUTTERWINDOWS;
    }
    public static function APPLEIOS(): PlatformType
    {
        if (!isset(self::$APPLEIOS)) {
            self::$APPLEIOS = new PlatformType('apple-ios');
        }
        return self::$APPLEIOS;
    }
    public static function APPLEMACOS(): PlatformType
    {
        if (!isset(self::$APPLEMACOS)) {
            self::$APPLEMACOS = new PlatformType('apple-macos');
        }
        return self::$APPLEMACOS;
    }
    public static function APPLEWATCHOS(): PlatformType
    {
        if (!isset(self::$APPLEWATCHOS)) {
            self::$APPLEWATCHOS = new PlatformType('apple-watchos');
        }
        return self::$APPLEWATCHOS;
    }
    public static function APPLETVOS(): PlatformType
    {
        if (!isset(self::$APPLETVOS)) {
            self::$APPLETVOS = new PlatformType('apple-tvos');
        }
        return self::$APPLETVOS;
    }
    public static function ANDROID(): PlatformType
    {
        if (!isset(self::$ANDROID)) {
            self::$ANDROID = new PlatformType('android');
        }
        return self::$ANDROID;
    }
    public static function UNITY(): PlatformType
    {
        if (!isset(self::$UNITY)) {
            self::$UNITY = new PlatformType('unity');
        }
        return self::$UNITY;
    }
    public static function REACTNATIVEIOS(): PlatformType
    {
        if (!isset(self::$REACTNATIVEIOS)) {
            self::$REACTNATIVEIOS = new PlatformType('react-native-ios');
        }
        return self::$REACTNATIVEIOS;
    }
    public static function REACTNATIVEANDROID(): PlatformType
    {
        if (!isset(self::$REACTNATIVEANDROID)) {
            self::$REACTNATIVEANDROID = new PlatformType('react-native-android');
        }
        return self::$REACTNATIVEANDROID;
    }
}
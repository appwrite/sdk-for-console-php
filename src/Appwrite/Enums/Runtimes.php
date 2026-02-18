<?php

namespace Appwrite\Enums;

use JsonSerializable;

class Runtimes implements JsonSerializable
{
    private static Runtimes $NODE145;
    private static Runtimes $NODE160;
    private static Runtimes $NODE180;
    private static Runtimes $NODE190;
    private static Runtimes $NODE200;
    private static Runtimes $NODE210;
    private static Runtimes $NODE22;
    private static Runtimes $PHP80;
    private static Runtimes $PHP81;
    private static Runtimes $PHP82;
    private static Runtimes $PHP83;
    private static Runtimes $RUBY30;
    private static Runtimes $RUBY31;
    private static Runtimes $RUBY32;
    private static Runtimes $RUBY33;
    private static Runtimes $PYTHON38;
    private static Runtimes $PYTHON39;
    private static Runtimes $PYTHON310;
    private static Runtimes $PYTHON311;
    private static Runtimes $PYTHON312;
    private static Runtimes $PYTHONML311;
    private static Runtimes $PYTHONML312;
    private static Runtimes $DENO121;
    private static Runtimes $DENO124;
    private static Runtimes $DENO135;
    private static Runtimes $DENO140;
    private static Runtimes $DENO146;
    private static Runtimes $DENO20;
    private static Runtimes $DART215;
    private static Runtimes $DART216;
    private static Runtimes $DART217;
    private static Runtimes $DART218;
    private static Runtimes $DART219;
    private static Runtimes $DART30;
    private static Runtimes $DART31;
    private static Runtimes $DART33;
    private static Runtimes $DART35;
    private static Runtimes $DART38;
    private static Runtimes $DART39;
    private static Runtimes $DART310;
    private static Runtimes $DOTNET60;
    private static Runtimes $DOTNET70;
    private static Runtimes $DOTNET80;
    private static Runtimes $JAVA80;
    private static Runtimes $JAVA110;
    private static Runtimes $JAVA170;
    private static Runtimes $JAVA180;
    private static Runtimes $JAVA210;
    private static Runtimes $JAVA22;
    private static Runtimes $SWIFT55;
    private static Runtimes $SWIFT58;
    private static Runtimes $SWIFT59;
    private static Runtimes $SWIFT510;
    private static Runtimes $KOTLIN16;
    private static Runtimes $KOTLIN18;
    private static Runtimes $KOTLIN19;
    private static Runtimes $KOTLIN20;
    private static Runtimes $CPP17;
    private static Runtimes $CPP20;
    private static Runtimes $BUN10;
    private static Runtimes $BUN11;
    private static Runtimes $GO123;
    private static Runtimes $STATIC1;
    private static Runtimes $FLUTTER324;
    private static Runtimes $FLUTTER327;
    private static Runtimes $FLUTTER329;
    private static Runtimes $FLUTTER332;
    private static Runtimes $FLUTTER335;
    private static Runtimes $FLUTTER338;

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

    public static function NODE145(): Runtimes
    {
        if (!isset(self::$NODE145)) {
            self::$NODE145 = new Runtimes('node-14.5');
        }
        return self::$NODE145;
    }
    public static function NODE160(): Runtimes
    {
        if (!isset(self::$NODE160)) {
            self::$NODE160 = new Runtimes('node-16.0');
        }
        return self::$NODE160;
    }
    public static function NODE180(): Runtimes
    {
        if (!isset(self::$NODE180)) {
            self::$NODE180 = new Runtimes('node-18.0');
        }
        return self::$NODE180;
    }
    public static function NODE190(): Runtimes
    {
        if (!isset(self::$NODE190)) {
            self::$NODE190 = new Runtimes('node-19.0');
        }
        return self::$NODE190;
    }
    public static function NODE200(): Runtimes
    {
        if (!isset(self::$NODE200)) {
            self::$NODE200 = new Runtimes('node-20.0');
        }
        return self::$NODE200;
    }
    public static function NODE210(): Runtimes
    {
        if (!isset(self::$NODE210)) {
            self::$NODE210 = new Runtimes('node-21.0');
        }
        return self::$NODE210;
    }
    public static function NODE22(): Runtimes
    {
        if (!isset(self::$NODE22)) {
            self::$NODE22 = new Runtimes('node-22');
        }
        return self::$NODE22;
    }
    public static function PHP80(): Runtimes
    {
        if (!isset(self::$PHP80)) {
            self::$PHP80 = new Runtimes('php-8.0');
        }
        return self::$PHP80;
    }
    public static function PHP81(): Runtimes
    {
        if (!isset(self::$PHP81)) {
            self::$PHP81 = new Runtimes('php-8.1');
        }
        return self::$PHP81;
    }
    public static function PHP82(): Runtimes
    {
        if (!isset(self::$PHP82)) {
            self::$PHP82 = new Runtimes('php-8.2');
        }
        return self::$PHP82;
    }
    public static function PHP83(): Runtimes
    {
        if (!isset(self::$PHP83)) {
            self::$PHP83 = new Runtimes('php-8.3');
        }
        return self::$PHP83;
    }
    public static function RUBY30(): Runtimes
    {
        if (!isset(self::$RUBY30)) {
            self::$RUBY30 = new Runtimes('ruby-3.0');
        }
        return self::$RUBY30;
    }
    public static function RUBY31(): Runtimes
    {
        if (!isset(self::$RUBY31)) {
            self::$RUBY31 = new Runtimes('ruby-3.1');
        }
        return self::$RUBY31;
    }
    public static function RUBY32(): Runtimes
    {
        if (!isset(self::$RUBY32)) {
            self::$RUBY32 = new Runtimes('ruby-3.2');
        }
        return self::$RUBY32;
    }
    public static function RUBY33(): Runtimes
    {
        if (!isset(self::$RUBY33)) {
            self::$RUBY33 = new Runtimes('ruby-3.3');
        }
        return self::$RUBY33;
    }
    public static function PYTHON38(): Runtimes
    {
        if (!isset(self::$PYTHON38)) {
            self::$PYTHON38 = new Runtimes('python-3.8');
        }
        return self::$PYTHON38;
    }
    public static function PYTHON39(): Runtimes
    {
        if (!isset(self::$PYTHON39)) {
            self::$PYTHON39 = new Runtimes('python-3.9');
        }
        return self::$PYTHON39;
    }
    public static function PYTHON310(): Runtimes
    {
        if (!isset(self::$PYTHON310)) {
            self::$PYTHON310 = new Runtimes('python-3.10');
        }
        return self::$PYTHON310;
    }
    public static function PYTHON311(): Runtimes
    {
        if (!isset(self::$PYTHON311)) {
            self::$PYTHON311 = new Runtimes('python-3.11');
        }
        return self::$PYTHON311;
    }
    public static function PYTHON312(): Runtimes
    {
        if (!isset(self::$PYTHON312)) {
            self::$PYTHON312 = new Runtimes('python-3.12');
        }
        return self::$PYTHON312;
    }
    public static function PYTHONML311(): Runtimes
    {
        if (!isset(self::$PYTHONML311)) {
            self::$PYTHONML311 = new Runtimes('python-ml-3.11');
        }
        return self::$PYTHONML311;
    }
    public static function PYTHONML312(): Runtimes
    {
        if (!isset(self::$PYTHONML312)) {
            self::$PYTHONML312 = new Runtimes('python-ml-3.12');
        }
        return self::$PYTHONML312;
    }
    public static function DENO121(): Runtimes
    {
        if (!isset(self::$DENO121)) {
            self::$DENO121 = new Runtimes('deno-1.21');
        }
        return self::$DENO121;
    }
    public static function DENO124(): Runtimes
    {
        if (!isset(self::$DENO124)) {
            self::$DENO124 = new Runtimes('deno-1.24');
        }
        return self::$DENO124;
    }
    public static function DENO135(): Runtimes
    {
        if (!isset(self::$DENO135)) {
            self::$DENO135 = new Runtimes('deno-1.35');
        }
        return self::$DENO135;
    }
    public static function DENO140(): Runtimes
    {
        if (!isset(self::$DENO140)) {
            self::$DENO140 = new Runtimes('deno-1.40');
        }
        return self::$DENO140;
    }
    public static function DENO146(): Runtimes
    {
        if (!isset(self::$DENO146)) {
            self::$DENO146 = new Runtimes('deno-1.46');
        }
        return self::$DENO146;
    }
    public static function DENO20(): Runtimes
    {
        if (!isset(self::$DENO20)) {
            self::$DENO20 = new Runtimes('deno-2.0');
        }
        return self::$DENO20;
    }
    public static function DART215(): Runtimes
    {
        if (!isset(self::$DART215)) {
            self::$DART215 = new Runtimes('dart-2.15');
        }
        return self::$DART215;
    }
    public static function DART216(): Runtimes
    {
        if (!isset(self::$DART216)) {
            self::$DART216 = new Runtimes('dart-2.16');
        }
        return self::$DART216;
    }
    public static function DART217(): Runtimes
    {
        if (!isset(self::$DART217)) {
            self::$DART217 = new Runtimes('dart-2.17');
        }
        return self::$DART217;
    }
    public static function DART218(): Runtimes
    {
        if (!isset(self::$DART218)) {
            self::$DART218 = new Runtimes('dart-2.18');
        }
        return self::$DART218;
    }
    public static function DART219(): Runtimes
    {
        if (!isset(self::$DART219)) {
            self::$DART219 = new Runtimes('dart-2.19');
        }
        return self::$DART219;
    }
    public static function DART30(): Runtimes
    {
        if (!isset(self::$DART30)) {
            self::$DART30 = new Runtimes('dart-3.0');
        }
        return self::$DART30;
    }
    public static function DART31(): Runtimes
    {
        if (!isset(self::$DART31)) {
            self::$DART31 = new Runtimes('dart-3.1');
        }
        return self::$DART31;
    }
    public static function DART33(): Runtimes
    {
        if (!isset(self::$DART33)) {
            self::$DART33 = new Runtimes('dart-3.3');
        }
        return self::$DART33;
    }
    public static function DART35(): Runtimes
    {
        if (!isset(self::$DART35)) {
            self::$DART35 = new Runtimes('dart-3.5');
        }
        return self::$DART35;
    }
    public static function DART38(): Runtimes
    {
        if (!isset(self::$DART38)) {
            self::$DART38 = new Runtimes('dart-3.8');
        }
        return self::$DART38;
    }
    public static function DART39(): Runtimes
    {
        if (!isset(self::$DART39)) {
            self::$DART39 = new Runtimes('dart-3.9');
        }
        return self::$DART39;
    }
    public static function DART310(): Runtimes
    {
        if (!isset(self::$DART310)) {
            self::$DART310 = new Runtimes('dart-3.10');
        }
        return self::$DART310;
    }
    public static function DOTNET60(): Runtimes
    {
        if (!isset(self::$DOTNET60)) {
            self::$DOTNET60 = new Runtimes('dotnet-6.0');
        }
        return self::$DOTNET60;
    }
    public static function DOTNET70(): Runtimes
    {
        if (!isset(self::$DOTNET70)) {
            self::$DOTNET70 = new Runtimes('dotnet-7.0');
        }
        return self::$DOTNET70;
    }
    public static function DOTNET80(): Runtimes
    {
        if (!isset(self::$DOTNET80)) {
            self::$DOTNET80 = new Runtimes('dotnet-8.0');
        }
        return self::$DOTNET80;
    }
    public static function JAVA80(): Runtimes
    {
        if (!isset(self::$JAVA80)) {
            self::$JAVA80 = new Runtimes('java-8.0');
        }
        return self::$JAVA80;
    }
    public static function JAVA110(): Runtimes
    {
        if (!isset(self::$JAVA110)) {
            self::$JAVA110 = new Runtimes('java-11.0');
        }
        return self::$JAVA110;
    }
    public static function JAVA170(): Runtimes
    {
        if (!isset(self::$JAVA170)) {
            self::$JAVA170 = new Runtimes('java-17.0');
        }
        return self::$JAVA170;
    }
    public static function JAVA180(): Runtimes
    {
        if (!isset(self::$JAVA180)) {
            self::$JAVA180 = new Runtimes('java-18.0');
        }
        return self::$JAVA180;
    }
    public static function JAVA210(): Runtimes
    {
        if (!isset(self::$JAVA210)) {
            self::$JAVA210 = new Runtimes('java-21.0');
        }
        return self::$JAVA210;
    }
    public static function JAVA22(): Runtimes
    {
        if (!isset(self::$JAVA22)) {
            self::$JAVA22 = new Runtimes('java-22');
        }
        return self::$JAVA22;
    }
    public static function SWIFT55(): Runtimes
    {
        if (!isset(self::$SWIFT55)) {
            self::$SWIFT55 = new Runtimes('swift-5.5');
        }
        return self::$SWIFT55;
    }
    public static function SWIFT58(): Runtimes
    {
        if (!isset(self::$SWIFT58)) {
            self::$SWIFT58 = new Runtimes('swift-5.8');
        }
        return self::$SWIFT58;
    }
    public static function SWIFT59(): Runtimes
    {
        if (!isset(self::$SWIFT59)) {
            self::$SWIFT59 = new Runtimes('swift-5.9');
        }
        return self::$SWIFT59;
    }
    public static function SWIFT510(): Runtimes
    {
        if (!isset(self::$SWIFT510)) {
            self::$SWIFT510 = new Runtimes('swift-5.10');
        }
        return self::$SWIFT510;
    }
    public static function KOTLIN16(): Runtimes
    {
        if (!isset(self::$KOTLIN16)) {
            self::$KOTLIN16 = new Runtimes('kotlin-1.6');
        }
        return self::$KOTLIN16;
    }
    public static function KOTLIN18(): Runtimes
    {
        if (!isset(self::$KOTLIN18)) {
            self::$KOTLIN18 = new Runtimes('kotlin-1.8');
        }
        return self::$KOTLIN18;
    }
    public static function KOTLIN19(): Runtimes
    {
        if (!isset(self::$KOTLIN19)) {
            self::$KOTLIN19 = new Runtimes('kotlin-1.9');
        }
        return self::$KOTLIN19;
    }
    public static function KOTLIN20(): Runtimes
    {
        if (!isset(self::$KOTLIN20)) {
            self::$KOTLIN20 = new Runtimes('kotlin-2.0');
        }
        return self::$KOTLIN20;
    }
    public static function CPP17(): Runtimes
    {
        if (!isset(self::$CPP17)) {
            self::$CPP17 = new Runtimes('cpp-17');
        }
        return self::$CPP17;
    }
    public static function CPP20(): Runtimes
    {
        if (!isset(self::$CPP20)) {
            self::$CPP20 = new Runtimes('cpp-20');
        }
        return self::$CPP20;
    }
    public static function BUN10(): Runtimes
    {
        if (!isset(self::$BUN10)) {
            self::$BUN10 = new Runtimes('bun-1.0');
        }
        return self::$BUN10;
    }
    public static function BUN11(): Runtimes
    {
        if (!isset(self::$BUN11)) {
            self::$BUN11 = new Runtimes('bun-1.1');
        }
        return self::$BUN11;
    }
    public static function GO123(): Runtimes
    {
        if (!isset(self::$GO123)) {
            self::$GO123 = new Runtimes('go-1.23');
        }
        return self::$GO123;
    }
    public static function STATIC1(): Runtimes
    {
        if (!isset(self::$STATIC1)) {
            self::$STATIC1 = new Runtimes('static-1');
        }
        return self::$STATIC1;
    }
    public static function FLUTTER324(): Runtimes
    {
        if (!isset(self::$FLUTTER324)) {
            self::$FLUTTER324 = new Runtimes('flutter-3.24');
        }
        return self::$FLUTTER324;
    }
    public static function FLUTTER327(): Runtimes
    {
        if (!isset(self::$FLUTTER327)) {
            self::$FLUTTER327 = new Runtimes('flutter-3.27');
        }
        return self::$FLUTTER327;
    }
    public static function FLUTTER329(): Runtimes
    {
        if (!isset(self::$FLUTTER329)) {
            self::$FLUTTER329 = new Runtimes('flutter-3.29');
        }
        return self::$FLUTTER329;
    }
    public static function FLUTTER332(): Runtimes
    {
        if (!isset(self::$FLUTTER332)) {
            self::$FLUTTER332 = new Runtimes('flutter-3.32');
        }
        return self::$FLUTTER332;
    }
    public static function FLUTTER335(): Runtimes
    {
        if (!isset(self::$FLUTTER335)) {
            self::$FLUTTER335 = new Runtimes('flutter-3.35');
        }
        return self::$FLUTTER335;
    }
    public static function FLUTTER338(): Runtimes
    {
        if (!isset(self::$FLUTTER338)) {
            self::$FLUTTER338 = new Runtimes('flutter-3.38');
        }
        return self::$FLUTTER338;
    }
}
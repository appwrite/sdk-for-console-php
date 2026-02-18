<?php

namespace Appwrite\Enums;

use JsonSerializable;

class SmsTemplateLocale implements JsonSerializable
{
    private static SmsTemplateLocale $AF;
    private static SmsTemplateLocale $ARAE;
    private static SmsTemplateLocale $ARBH;
    private static SmsTemplateLocale $ARDZ;
    private static SmsTemplateLocale $AREG;
    private static SmsTemplateLocale $ARIQ;
    private static SmsTemplateLocale $ARJO;
    private static SmsTemplateLocale $ARKW;
    private static SmsTemplateLocale $ARLB;
    private static SmsTemplateLocale $ARLY;
    private static SmsTemplateLocale $ARMA;
    private static SmsTemplateLocale $AROM;
    private static SmsTemplateLocale $ARQA;
    private static SmsTemplateLocale $ARSA;
    private static SmsTemplateLocale $ARSY;
    private static SmsTemplateLocale $ARTN;
    private static SmsTemplateLocale $ARYE;
    private static SmsTemplateLocale $AS;
    private static SmsTemplateLocale $AZ;
    private static SmsTemplateLocale $BE;
    private static SmsTemplateLocale $BG;
    private static SmsTemplateLocale $BH;
    private static SmsTemplateLocale $BN;
    private static SmsTemplateLocale $BS;
    private static SmsTemplateLocale $CA;
    private static SmsTemplateLocale $CS;
    private static SmsTemplateLocale $CY;
    private static SmsTemplateLocale $DA;
    private static SmsTemplateLocale $DE;
    private static SmsTemplateLocale $DEAT;
    private static SmsTemplateLocale $DECH;
    private static SmsTemplateLocale $DELI;
    private static SmsTemplateLocale $DELU;
    private static SmsTemplateLocale $EL;
    private static SmsTemplateLocale $EN;
    private static SmsTemplateLocale $ENAU;
    private static SmsTemplateLocale $ENBZ;
    private static SmsTemplateLocale $ENCA;
    private static SmsTemplateLocale $ENGB;
    private static SmsTemplateLocale $ENIE;
    private static SmsTemplateLocale $ENJM;
    private static SmsTemplateLocale $ENNZ;
    private static SmsTemplateLocale $ENTT;
    private static SmsTemplateLocale $ENUS;
    private static SmsTemplateLocale $ENZA;
    private static SmsTemplateLocale $EO;
    private static SmsTemplateLocale $ES;
    private static SmsTemplateLocale $ESAR;
    private static SmsTemplateLocale $ESBO;
    private static SmsTemplateLocale $ESCL;
    private static SmsTemplateLocale $ESCO;
    private static SmsTemplateLocale $ESCR;
    private static SmsTemplateLocale $ESDO;
    private static SmsTemplateLocale $ESEC;
    private static SmsTemplateLocale $ESGT;
    private static SmsTemplateLocale $ESHN;
    private static SmsTemplateLocale $ESMX;
    private static SmsTemplateLocale $ESNI;
    private static SmsTemplateLocale $ESPA;
    private static SmsTemplateLocale $ESPE;
    private static SmsTemplateLocale $ESPR;
    private static SmsTemplateLocale $ESPY;
    private static SmsTemplateLocale $ESSV;
    private static SmsTemplateLocale $ESUY;
    private static SmsTemplateLocale $ESVE;
    private static SmsTemplateLocale $ET;
    private static SmsTemplateLocale $EU;
    private static SmsTemplateLocale $FA;
    private static SmsTemplateLocale $FI;
    private static SmsTemplateLocale $FO;
    private static SmsTemplateLocale $FR;
    private static SmsTemplateLocale $FRBE;
    private static SmsTemplateLocale $FRCA;
    private static SmsTemplateLocale $FRCH;
    private static SmsTemplateLocale $FRLU;
    private static SmsTemplateLocale $GA;
    private static SmsTemplateLocale $GD;
    private static SmsTemplateLocale $HE;
    private static SmsTemplateLocale $HI;
    private static SmsTemplateLocale $HR;
    private static SmsTemplateLocale $HU;
    private static SmsTemplateLocale $ID;
    private static SmsTemplateLocale $IS;
    private static SmsTemplateLocale $IT;
    private static SmsTemplateLocale $ITCH;
    private static SmsTemplateLocale $JA;
    private static SmsTemplateLocale $JI;
    private static SmsTemplateLocale $KO;
    private static SmsTemplateLocale $KU;
    private static SmsTemplateLocale $LT;
    private static SmsTemplateLocale $LV;
    private static SmsTemplateLocale $MK;
    private static SmsTemplateLocale $ML;
    private static SmsTemplateLocale $MS;
    private static SmsTemplateLocale $MT;
    private static SmsTemplateLocale $NB;
    private static SmsTemplateLocale $NE;
    private static SmsTemplateLocale $NL;
    private static SmsTemplateLocale $NLBE;
    private static SmsTemplateLocale $NN;
    private static SmsTemplateLocale $NO;
    private static SmsTemplateLocale $PA;
    private static SmsTemplateLocale $PL;
    private static SmsTemplateLocale $PT;
    private static SmsTemplateLocale $PTBR;
    private static SmsTemplateLocale $RM;
    private static SmsTemplateLocale $RO;
    private static SmsTemplateLocale $ROMD;
    private static SmsTemplateLocale $RU;
    private static SmsTemplateLocale $RUMD;
    private static SmsTemplateLocale $SB;
    private static SmsTemplateLocale $SK;
    private static SmsTemplateLocale $SL;
    private static SmsTemplateLocale $SQ;
    private static SmsTemplateLocale $SR;
    private static SmsTemplateLocale $SV;
    private static SmsTemplateLocale $SVFI;
    private static SmsTemplateLocale $TH;
    private static SmsTemplateLocale $TN;
    private static SmsTemplateLocale $TR;
    private static SmsTemplateLocale $TS;
    private static SmsTemplateLocale $UA;
    private static SmsTemplateLocale $UR;
    private static SmsTemplateLocale $VE;
    private static SmsTemplateLocale $VI;
    private static SmsTemplateLocale $XH;
    private static SmsTemplateLocale $ZHCN;
    private static SmsTemplateLocale $ZHHK;
    private static SmsTemplateLocale $ZHSG;
    private static SmsTemplateLocale $ZHTW;
    private static SmsTemplateLocale $ZU;

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

    public static function AF(): SmsTemplateLocale
    {
        if (!isset(self::$AF)) {
            self::$AF = new SmsTemplateLocale('af');
        }
        return self::$AF;
    }
    public static function ARAE(): SmsTemplateLocale
    {
        if (!isset(self::$ARAE)) {
            self::$ARAE = new SmsTemplateLocale('ar-ae');
        }
        return self::$ARAE;
    }
    public static function ARBH(): SmsTemplateLocale
    {
        if (!isset(self::$ARBH)) {
            self::$ARBH = new SmsTemplateLocale('ar-bh');
        }
        return self::$ARBH;
    }
    public static function ARDZ(): SmsTemplateLocale
    {
        if (!isset(self::$ARDZ)) {
            self::$ARDZ = new SmsTemplateLocale('ar-dz');
        }
        return self::$ARDZ;
    }
    public static function AREG(): SmsTemplateLocale
    {
        if (!isset(self::$AREG)) {
            self::$AREG = new SmsTemplateLocale('ar-eg');
        }
        return self::$AREG;
    }
    public static function ARIQ(): SmsTemplateLocale
    {
        if (!isset(self::$ARIQ)) {
            self::$ARIQ = new SmsTemplateLocale('ar-iq');
        }
        return self::$ARIQ;
    }
    public static function ARJO(): SmsTemplateLocale
    {
        if (!isset(self::$ARJO)) {
            self::$ARJO = new SmsTemplateLocale('ar-jo');
        }
        return self::$ARJO;
    }
    public static function ARKW(): SmsTemplateLocale
    {
        if (!isset(self::$ARKW)) {
            self::$ARKW = new SmsTemplateLocale('ar-kw');
        }
        return self::$ARKW;
    }
    public static function ARLB(): SmsTemplateLocale
    {
        if (!isset(self::$ARLB)) {
            self::$ARLB = new SmsTemplateLocale('ar-lb');
        }
        return self::$ARLB;
    }
    public static function ARLY(): SmsTemplateLocale
    {
        if (!isset(self::$ARLY)) {
            self::$ARLY = new SmsTemplateLocale('ar-ly');
        }
        return self::$ARLY;
    }
    public static function ARMA(): SmsTemplateLocale
    {
        if (!isset(self::$ARMA)) {
            self::$ARMA = new SmsTemplateLocale('ar-ma');
        }
        return self::$ARMA;
    }
    public static function AROM(): SmsTemplateLocale
    {
        if (!isset(self::$AROM)) {
            self::$AROM = new SmsTemplateLocale('ar-om');
        }
        return self::$AROM;
    }
    public static function ARQA(): SmsTemplateLocale
    {
        if (!isset(self::$ARQA)) {
            self::$ARQA = new SmsTemplateLocale('ar-qa');
        }
        return self::$ARQA;
    }
    public static function ARSA(): SmsTemplateLocale
    {
        if (!isset(self::$ARSA)) {
            self::$ARSA = new SmsTemplateLocale('ar-sa');
        }
        return self::$ARSA;
    }
    public static function ARSY(): SmsTemplateLocale
    {
        if (!isset(self::$ARSY)) {
            self::$ARSY = new SmsTemplateLocale('ar-sy');
        }
        return self::$ARSY;
    }
    public static function ARTN(): SmsTemplateLocale
    {
        if (!isset(self::$ARTN)) {
            self::$ARTN = new SmsTemplateLocale('ar-tn');
        }
        return self::$ARTN;
    }
    public static function ARYE(): SmsTemplateLocale
    {
        if (!isset(self::$ARYE)) {
            self::$ARYE = new SmsTemplateLocale('ar-ye');
        }
        return self::$ARYE;
    }
    public static function AS(): SmsTemplateLocale
    {
        if (!isset(self::$AS)) {
            self::$AS = new SmsTemplateLocale('as');
        }
        return self::$AS;
    }
    public static function AZ(): SmsTemplateLocale
    {
        if (!isset(self::$AZ)) {
            self::$AZ = new SmsTemplateLocale('az');
        }
        return self::$AZ;
    }
    public static function BE(): SmsTemplateLocale
    {
        if (!isset(self::$BE)) {
            self::$BE = new SmsTemplateLocale('be');
        }
        return self::$BE;
    }
    public static function BG(): SmsTemplateLocale
    {
        if (!isset(self::$BG)) {
            self::$BG = new SmsTemplateLocale('bg');
        }
        return self::$BG;
    }
    public static function BH(): SmsTemplateLocale
    {
        if (!isset(self::$BH)) {
            self::$BH = new SmsTemplateLocale('bh');
        }
        return self::$BH;
    }
    public static function BN(): SmsTemplateLocale
    {
        if (!isset(self::$BN)) {
            self::$BN = new SmsTemplateLocale('bn');
        }
        return self::$BN;
    }
    public static function BS(): SmsTemplateLocale
    {
        if (!isset(self::$BS)) {
            self::$BS = new SmsTemplateLocale('bs');
        }
        return self::$BS;
    }
    public static function CA(): SmsTemplateLocale
    {
        if (!isset(self::$CA)) {
            self::$CA = new SmsTemplateLocale('ca');
        }
        return self::$CA;
    }
    public static function CS(): SmsTemplateLocale
    {
        if (!isset(self::$CS)) {
            self::$CS = new SmsTemplateLocale('cs');
        }
        return self::$CS;
    }
    public static function CY(): SmsTemplateLocale
    {
        if (!isset(self::$CY)) {
            self::$CY = new SmsTemplateLocale('cy');
        }
        return self::$CY;
    }
    public static function DA(): SmsTemplateLocale
    {
        if (!isset(self::$DA)) {
            self::$DA = new SmsTemplateLocale('da');
        }
        return self::$DA;
    }
    public static function DE(): SmsTemplateLocale
    {
        if (!isset(self::$DE)) {
            self::$DE = new SmsTemplateLocale('de');
        }
        return self::$DE;
    }
    public static function DEAT(): SmsTemplateLocale
    {
        if (!isset(self::$DEAT)) {
            self::$DEAT = new SmsTemplateLocale('de-at');
        }
        return self::$DEAT;
    }
    public static function DECH(): SmsTemplateLocale
    {
        if (!isset(self::$DECH)) {
            self::$DECH = new SmsTemplateLocale('de-ch');
        }
        return self::$DECH;
    }
    public static function DELI(): SmsTemplateLocale
    {
        if (!isset(self::$DELI)) {
            self::$DELI = new SmsTemplateLocale('de-li');
        }
        return self::$DELI;
    }
    public static function DELU(): SmsTemplateLocale
    {
        if (!isset(self::$DELU)) {
            self::$DELU = new SmsTemplateLocale('de-lu');
        }
        return self::$DELU;
    }
    public static function EL(): SmsTemplateLocale
    {
        if (!isset(self::$EL)) {
            self::$EL = new SmsTemplateLocale('el');
        }
        return self::$EL;
    }
    public static function EN(): SmsTemplateLocale
    {
        if (!isset(self::$EN)) {
            self::$EN = new SmsTemplateLocale('en');
        }
        return self::$EN;
    }
    public static function ENAU(): SmsTemplateLocale
    {
        if (!isset(self::$ENAU)) {
            self::$ENAU = new SmsTemplateLocale('en-au');
        }
        return self::$ENAU;
    }
    public static function ENBZ(): SmsTemplateLocale
    {
        if (!isset(self::$ENBZ)) {
            self::$ENBZ = new SmsTemplateLocale('en-bz');
        }
        return self::$ENBZ;
    }
    public static function ENCA(): SmsTemplateLocale
    {
        if (!isset(self::$ENCA)) {
            self::$ENCA = new SmsTemplateLocale('en-ca');
        }
        return self::$ENCA;
    }
    public static function ENGB(): SmsTemplateLocale
    {
        if (!isset(self::$ENGB)) {
            self::$ENGB = new SmsTemplateLocale('en-gb');
        }
        return self::$ENGB;
    }
    public static function ENIE(): SmsTemplateLocale
    {
        if (!isset(self::$ENIE)) {
            self::$ENIE = new SmsTemplateLocale('en-ie');
        }
        return self::$ENIE;
    }
    public static function ENJM(): SmsTemplateLocale
    {
        if (!isset(self::$ENJM)) {
            self::$ENJM = new SmsTemplateLocale('en-jm');
        }
        return self::$ENJM;
    }
    public static function ENNZ(): SmsTemplateLocale
    {
        if (!isset(self::$ENNZ)) {
            self::$ENNZ = new SmsTemplateLocale('en-nz');
        }
        return self::$ENNZ;
    }
    public static function ENTT(): SmsTemplateLocale
    {
        if (!isset(self::$ENTT)) {
            self::$ENTT = new SmsTemplateLocale('en-tt');
        }
        return self::$ENTT;
    }
    public static function ENUS(): SmsTemplateLocale
    {
        if (!isset(self::$ENUS)) {
            self::$ENUS = new SmsTemplateLocale('en-us');
        }
        return self::$ENUS;
    }
    public static function ENZA(): SmsTemplateLocale
    {
        if (!isset(self::$ENZA)) {
            self::$ENZA = new SmsTemplateLocale('en-za');
        }
        return self::$ENZA;
    }
    public static function EO(): SmsTemplateLocale
    {
        if (!isset(self::$EO)) {
            self::$EO = new SmsTemplateLocale('eo');
        }
        return self::$EO;
    }
    public static function ES(): SmsTemplateLocale
    {
        if (!isset(self::$ES)) {
            self::$ES = new SmsTemplateLocale('es');
        }
        return self::$ES;
    }
    public static function ESAR(): SmsTemplateLocale
    {
        if (!isset(self::$ESAR)) {
            self::$ESAR = new SmsTemplateLocale('es-ar');
        }
        return self::$ESAR;
    }
    public static function ESBO(): SmsTemplateLocale
    {
        if (!isset(self::$ESBO)) {
            self::$ESBO = new SmsTemplateLocale('es-bo');
        }
        return self::$ESBO;
    }
    public static function ESCL(): SmsTemplateLocale
    {
        if (!isset(self::$ESCL)) {
            self::$ESCL = new SmsTemplateLocale('es-cl');
        }
        return self::$ESCL;
    }
    public static function ESCO(): SmsTemplateLocale
    {
        if (!isset(self::$ESCO)) {
            self::$ESCO = new SmsTemplateLocale('es-co');
        }
        return self::$ESCO;
    }
    public static function ESCR(): SmsTemplateLocale
    {
        if (!isset(self::$ESCR)) {
            self::$ESCR = new SmsTemplateLocale('es-cr');
        }
        return self::$ESCR;
    }
    public static function ESDO(): SmsTemplateLocale
    {
        if (!isset(self::$ESDO)) {
            self::$ESDO = new SmsTemplateLocale('es-do');
        }
        return self::$ESDO;
    }
    public static function ESEC(): SmsTemplateLocale
    {
        if (!isset(self::$ESEC)) {
            self::$ESEC = new SmsTemplateLocale('es-ec');
        }
        return self::$ESEC;
    }
    public static function ESGT(): SmsTemplateLocale
    {
        if (!isset(self::$ESGT)) {
            self::$ESGT = new SmsTemplateLocale('es-gt');
        }
        return self::$ESGT;
    }
    public static function ESHN(): SmsTemplateLocale
    {
        if (!isset(self::$ESHN)) {
            self::$ESHN = new SmsTemplateLocale('es-hn');
        }
        return self::$ESHN;
    }
    public static function ESMX(): SmsTemplateLocale
    {
        if (!isset(self::$ESMX)) {
            self::$ESMX = new SmsTemplateLocale('es-mx');
        }
        return self::$ESMX;
    }
    public static function ESNI(): SmsTemplateLocale
    {
        if (!isset(self::$ESNI)) {
            self::$ESNI = new SmsTemplateLocale('es-ni');
        }
        return self::$ESNI;
    }
    public static function ESPA(): SmsTemplateLocale
    {
        if (!isset(self::$ESPA)) {
            self::$ESPA = new SmsTemplateLocale('es-pa');
        }
        return self::$ESPA;
    }
    public static function ESPE(): SmsTemplateLocale
    {
        if (!isset(self::$ESPE)) {
            self::$ESPE = new SmsTemplateLocale('es-pe');
        }
        return self::$ESPE;
    }
    public static function ESPR(): SmsTemplateLocale
    {
        if (!isset(self::$ESPR)) {
            self::$ESPR = new SmsTemplateLocale('es-pr');
        }
        return self::$ESPR;
    }
    public static function ESPY(): SmsTemplateLocale
    {
        if (!isset(self::$ESPY)) {
            self::$ESPY = new SmsTemplateLocale('es-py');
        }
        return self::$ESPY;
    }
    public static function ESSV(): SmsTemplateLocale
    {
        if (!isset(self::$ESSV)) {
            self::$ESSV = new SmsTemplateLocale('es-sv');
        }
        return self::$ESSV;
    }
    public static function ESUY(): SmsTemplateLocale
    {
        if (!isset(self::$ESUY)) {
            self::$ESUY = new SmsTemplateLocale('es-uy');
        }
        return self::$ESUY;
    }
    public static function ESVE(): SmsTemplateLocale
    {
        if (!isset(self::$ESVE)) {
            self::$ESVE = new SmsTemplateLocale('es-ve');
        }
        return self::$ESVE;
    }
    public static function ET(): SmsTemplateLocale
    {
        if (!isset(self::$ET)) {
            self::$ET = new SmsTemplateLocale('et');
        }
        return self::$ET;
    }
    public static function EU(): SmsTemplateLocale
    {
        if (!isset(self::$EU)) {
            self::$EU = new SmsTemplateLocale('eu');
        }
        return self::$EU;
    }
    public static function FA(): SmsTemplateLocale
    {
        if (!isset(self::$FA)) {
            self::$FA = new SmsTemplateLocale('fa');
        }
        return self::$FA;
    }
    public static function FI(): SmsTemplateLocale
    {
        if (!isset(self::$FI)) {
            self::$FI = new SmsTemplateLocale('fi');
        }
        return self::$FI;
    }
    public static function FO(): SmsTemplateLocale
    {
        if (!isset(self::$FO)) {
            self::$FO = new SmsTemplateLocale('fo');
        }
        return self::$FO;
    }
    public static function FR(): SmsTemplateLocale
    {
        if (!isset(self::$FR)) {
            self::$FR = new SmsTemplateLocale('fr');
        }
        return self::$FR;
    }
    public static function FRBE(): SmsTemplateLocale
    {
        if (!isset(self::$FRBE)) {
            self::$FRBE = new SmsTemplateLocale('fr-be');
        }
        return self::$FRBE;
    }
    public static function FRCA(): SmsTemplateLocale
    {
        if (!isset(self::$FRCA)) {
            self::$FRCA = new SmsTemplateLocale('fr-ca');
        }
        return self::$FRCA;
    }
    public static function FRCH(): SmsTemplateLocale
    {
        if (!isset(self::$FRCH)) {
            self::$FRCH = new SmsTemplateLocale('fr-ch');
        }
        return self::$FRCH;
    }
    public static function FRLU(): SmsTemplateLocale
    {
        if (!isset(self::$FRLU)) {
            self::$FRLU = new SmsTemplateLocale('fr-lu');
        }
        return self::$FRLU;
    }
    public static function GA(): SmsTemplateLocale
    {
        if (!isset(self::$GA)) {
            self::$GA = new SmsTemplateLocale('ga');
        }
        return self::$GA;
    }
    public static function GD(): SmsTemplateLocale
    {
        if (!isset(self::$GD)) {
            self::$GD = new SmsTemplateLocale('gd');
        }
        return self::$GD;
    }
    public static function HE(): SmsTemplateLocale
    {
        if (!isset(self::$HE)) {
            self::$HE = new SmsTemplateLocale('he');
        }
        return self::$HE;
    }
    public static function HI(): SmsTemplateLocale
    {
        if (!isset(self::$HI)) {
            self::$HI = new SmsTemplateLocale('hi');
        }
        return self::$HI;
    }
    public static function HR(): SmsTemplateLocale
    {
        if (!isset(self::$HR)) {
            self::$HR = new SmsTemplateLocale('hr');
        }
        return self::$HR;
    }
    public static function HU(): SmsTemplateLocale
    {
        if (!isset(self::$HU)) {
            self::$HU = new SmsTemplateLocale('hu');
        }
        return self::$HU;
    }
    public static function ID(): SmsTemplateLocale
    {
        if (!isset(self::$ID)) {
            self::$ID = new SmsTemplateLocale('id');
        }
        return self::$ID;
    }
    public static function IS(): SmsTemplateLocale
    {
        if (!isset(self::$IS)) {
            self::$IS = new SmsTemplateLocale('is');
        }
        return self::$IS;
    }
    public static function IT(): SmsTemplateLocale
    {
        if (!isset(self::$IT)) {
            self::$IT = new SmsTemplateLocale('it');
        }
        return self::$IT;
    }
    public static function ITCH(): SmsTemplateLocale
    {
        if (!isset(self::$ITCH)) {
            self::$ITCH = new SmsTemplateLocale('it-ch');
        }
        return self::$ITCH;
    }
    public static function JA(): SmsTemplateLocale
    {
        if (!isset(self::$JA)) {
            self::$JA = new SmsTemplateLocale('ja');
        }
        return self::$JA;
    }
    public static function JI(): SmsTemplateLocale
    {
        if (!isset(self::$JI)) {
            self::$JI = new SmsTemplateLocale('ji');
        }
        return self::$JI;
    }
    public static function KO(): SmsTemplateLocale
    {
        if (!isset(self::$KO)) {
            self::$KO = new SmsTemplateLocale('ko');
        }
        return self::$KO;
    }
    public static function KU(): SmsTemplateLocale
    {
        if (!isset(self::$KU)) {
            self::$KU = new SmsTemplateLocale('ku');
        }
        return self::$KU;
    }
    public static function LT(): SmsTemplateLocale
    {
        if (!isset(self::$LT)) {
            self::$LT = new SmsTemplateLocale('lt');
        }
        return self::$LT;
    }
    public static function LV(): SmsTemplateLocale
    {
        if (!isset(self::$LV)) {
            self::$LV = new SmsTemplateLocale('lv');
        }
        return self::$LV;
    }
    public static function MK(): SmsTemplateLocale
    {
        if (!isset(self::$MK)) {
            self::$MK = new SmsTemplateLocale('mk');
        }
        return self::$MK;
    }
    public static function ML(): SmsTemplateLocale
    {
        if (!isset(self::$ML)) {
            self::$ML = new SmsTemplateLocale('ml');
        }
        return self::$ML;
    }
    public static function MS(): SmsTemplateLocale
    {
        if (!isset(self::$MS)) {
            self::$MS = new SmsTemplateLocale('ms');
        }
        return self::$MS;
    }
    public static function MT(): SmsTemplateLocale
    {
        if (!isset(self::$MT)) {
            self::$MT = new SmsTemplateLocale('mt');
        }
        return self::$MT;
    }
    public static function NB(): SmsTemplateLocale
    {
        if (!isset(self::$NB)) {
            self::$NB = new SmsTemplateLocale('nb');
        }
        return self::$NB;
    }
    public static function NE(): SmsTemplateLocale
    {
        if (!isset(self::$NE)) {
            self::$NE = new SmsTemplateLocale('ne');
        }
        return self::$NE;
    }
    public static function NL(): SmsTemplateLocale
    {
        if (!isset(self::$NL)) {
            self::$NL = new SmsTemplateLocale('nl');
        }
        return self::$NL;
    }
    public static function NLBE(): SmsTemplateLocale
    {
        if (!isset(self::$NLBE)) {
            self::$NLBE = new SmsTemplateLocale('nl-be');
        }
        return self::$NLBE;
    }
    public static function NN(): SmsTemplateLocale
    {
        if (!isset(self::$NN)) {
            self::$NN = new SmsTemplateLocale('nn');
        }
        return self::$NN;
    }
    public static function NO(): SmsTemplateLocale
    {
        if (!isset(self::$NO)) {
            self::$NO = new SmsTemplateLocale('no');
        }
        return self::$NO;
    }
    public static function PA(): SmsTemplateLocale
    {
        if (!isset(self::$PA)) {
            self::$PA = new SmsTemplateLocale('pa');
        }
        return self::$PA;
    }
    public static function PL(): SmsTemplateLocale
    {
        if (!isset(self::$PL)) {
            self::$PL = new SmsTemplateLocale('pl');
        }
        return self::$PL;
    }
    public static function PT(): SmsTemplateLocale
    {
        if (!isset(self::$PT)) {
            self::$PT = new SmsTemplateLocale('pt');
        }
        return self::$PT;
    }
    public static function PTBR(): SmsTemplateLocale
    {
        if (!isset(self::$PTBR)) {
            self::$PTBR = new SmsTemplateLocale('pt-br');
        }
        return self::$PTBR;
    }
    public static function RM(): SmsTemplateLocale
    {
        if (!isset(self::$RM)) {
            self::$RM = new SmsTemplateLocale('rm');
        }
        return self::$RM;
    }
    public static function RO(): SmsTemplateLocale
    {
        if (!isset(self::$RO)) {
            self::$RO = new SmsTemplateLocale('ro');
        }
        return self::$RO;
    }
    public static function ROMD(): SmsTemplateLocale
    {
        if (!isset(self::$ROMD)) {
            self::$ROMD = new SmsTemplateLocale('ro-md');
        }
        return self::$ROMD;
    }
    public static function RU(): SmsTemplateLocale
    {
        if (!isset(self::$RU)) {
            self::$RU = new SmsTemplateLocale('ru');
        }
        return self::$RU;
    }
    public static function RUMD(): SmsTemplateLocale
    {
        if (!isset(self::$RUMD)) {
            self::$RUMD = new SmsTemplateLocale('ru-md');
        }
        return self::$RUMD;
    }
    public static function SB(): SmsTemplateLocale
    {
        if (!isset(self::$SB)) {
            self::$SB = new SmsTemplateLocale('sb');
        }
        return self::$SB;
    }
    public static function SK(): SmsTemplateLocale
    {
        if (!isset(self::$SK)) {
            self::$SK = new SmsTemplateLocale('sk');
        }
        return self::$SK;
    }
    public static function SL(): SmsTemplateLocale
    {
        if (!isset(self::$SL)) {
            self::$SL = new SmsTemplateLocale('sl');
        }
        return self::$SL;
    }
    public static function SQ(): SmsTemplateLocale
    {
        if (!isset(self::$SQ)) {
            self::$SQ = new SmsTemplateLocale('sq');
        }
        return self::$SQ;
    }
    public static function SR(): SmsTemplateLocale
    {
        if (!isset(self::$SR)) {
            self::$SR = new SmsTemplateLocale('sr');
        }
        return self::$SR;
    }
    public static function SV(): SmsTemplateLocale
    {
        if (!isset(self::$SV)) {
            self::$SV = new SmsTemplateLocale('sv');
        }
        return self::$SV;
    }
    public static function SVFI(): SmsTemplateLocale
    {
        if (!isset(self::$SVFI)) {
            self::$SVFI = new SmsTemplateLocale('sv-fi');
        }
        return self::$SVFI;
    }
    public static function TH(): SmsTemplateLocale
    {
        if (!isset(self::$TH)) {
            self::$TH = new SmsTemplateLocale('th');
        }
        return self::$TH;
    }
    public static function TN(): SmsTemplateLocale
    {
        if (!isset(self::$TN)) {
            self::$TN = new SmsTemplateLocale('tn');
        }
        return self::$TN;
    }
    public static function TR(): SmsTemplateLocale
    {
        if (!isset(self::$TR)) {
            self::$TR = new SmsTemplateLocale('tr');
        }
        return self::$TR;
    }
    public static function TS(): SmsTemplateLocale
    {
        if (!isset(self::$TS)) {
            self::$TS = new SmsTemplateLocale('ts');
        }
        return self::$TS;
    }
    public static function UA(): SmsTemplateLocale
    {
        if (!isset(self::$UA)) {
            self::$UA = new SmsTemplateLocale('ua');
        }
        return self::$UA;
    }
    public static function UR(): SmsTemplateLocale
    {
        if (!isset(self::$UR)) {
            self::$UR = new SmsTemplateLocale('ur');
        }
        return self::$UR;
    }
    public static function VE(): SmsTemplateLocale
    {
        if (!isset(self::$VE)) {
            self::$VE = new SmsTemplateLocale('ve');
        }
        return self::$VE;
    }
    public static function VI(): SmsTemplateLocale
    {
        if (!isset(self::$VI)) {
            self::$VI = new SmsTemplateLocale('vi');
        }
        return self::$VI;
    }
    public static function XH(): SmsTemplateLocale
    {
        if (!isset(self::$XH)) {
            self::$XH = new SmsTemplateLocale('xh');
        }
        return self::$XH;
    }
    public static function ZHCN(): SmsTemplateLocale
    {
        if (!isset(self::$ZHCN)) {
            self::$ZHCN = new SmsTemplateLocale('zh-cn');
        }
        return self::$ZHCN;
    }
    public static function ZHHK(): SmsTemplateLocale
    {
        if (!isset(self::$ZHHK)) {
            self::$ZHHK = new SmsTemplateLocale('zh-hk');
        }
        return self::$ZHHK;
    }
    public static function ZHSG(): SmsTemplateLocale
    {
        if (!isset(self::$ZHSG)) {
            self::$ZHSG = new SmsTemplateLocale('zh-sg');
        }
        return self::$ZHSG;
    }
    public static function ZHTW(): SmsTemplateLocale
    {
        if (!isset(self::$ZHTW)) {
            self::$ZHTW = new SmsTemplateLocale('zh-tw');
        }
        return self::$ZHTW;
    }
    public static function ZU(): SmsTemplateLocale
    {
        if (!isset(self::$ZU)) {
            self::$ZU = new SmsTemplateLocale('zu');
        }
        return self::$ZU;
    }
}
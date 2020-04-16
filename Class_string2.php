<?php

abstract class stringSlovak {

    public static function substrSlovak($stringKterýmNahrazuji = 'auto', $stringKterýNahrazuji = 'motorka') {
        return substr($stringKterýNahrazuji, $stringKterýmNahrazuji);
    }

    public static function substr_replaceSlovak($stringKterýmNahrazuji1 = 'auto', $stringKterýNahrazuji1 = 'motorka', $začátečníBit = 0) {
        return substr_replace($stringKterýNahrazuji1, $stringKterýmNahrazuji1, $začátečníBit);
    }

    public static function strtrSlovak($slovoKterýmNahrazuji = 'pes', $slovoKterýNahrazuji = 'kočka', $věta = 'Přejel jsem omylem kočka') {
        return strtr($věta, $slovoKterýNahrazuji, $slovoKterýmNahrazuji);
    }

    public static function stroupperSlovak($velkéPísmeno = 'ASDFFGGHJKLGBF') {
        return strtoupper($velkéPísmeno);
    }

    public static function strtlowerSlovak($maléPísmeno = 'dgjkukeetrezre') {
        return strtolower($maléPísmeno);
    }

    public static function strrposSlovak($bit1 = 8, $bit2 = 7) {
        return strrpos($bit1, $bit2, $offset = 0);
    }

    public static function strriposSlovak($přesněNajdi, $bit = '2B') {
        return strripos($přesněNajdi, $bit, $offset = 0);
    }

    public static function strlenSlovak($délkaŘetězce = 20) {
        return strlen($délkaŘetězce);
    }

    public static function str_replaceSlovak($odstraníPísmeno = 'a', $nahradíPísmenem = 'b', $veVětě = 'Tohle je hřeaík') {
        return str_replace($odstraníPísmeno, $nahradíPísmenem, $veVětě, $count = NULL);
    }

    public static function md5Slovak($zakódujeHeslo = 'jjs5dswsa') {
        return md5($zakódujeHeslo);
    }

    public static function implodeSlovak($čárka = ',') {
        return implode('...věděl', $čárka, 'ale...');
    }

    public static function explodeSlovak($rozdělíString) {
        return explode('', $rozdělíString);
    }
    
    public static function addslashesSlovak($přidejLomeno = '/') {
        return addslashes($přidejLomeno);
    }
    
    public static function trimSlovak($vynechKusŘetězce) {
        return trim($vynechKusŘetězce);
    }
    
    public static function ucfirstSlovak ($prvníPísmenoVelké) {
    return ucfirst($prvníPísmenoVelké);
    }
    
    public static function ucwordsSlovak ($každéPrvníPísmenoVeVětěVelké) {
        return ucwords($každéPrvníPísmenoVeVětěVelké);
    }

}

var_dump(substrSlovak);

?> 


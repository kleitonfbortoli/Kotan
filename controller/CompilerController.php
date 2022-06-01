<?php

namespace Controller;

class CompilerController {
    private static string $genetatedCode;
    private static string $ident;

    public function __construct()
    {
        self::$genetatedCode = "";
        self::$ident = "";
    }

    public static function addCode(string $code) : void {
        self::$genetatedCode .= $code."\n";
    }

    public static function getCode() : string {
        return self::$genetatedCode;
    }

    public static function addLvlIdentation() {
        self::$ident = "\t";
    }

    public static function removeLvlIdentation() {
        if(strlen(self::$ident)) {
            self::$ident = substr(self::$ident, 0, -1);
        }
    }

    public static function printCode() {
        echo "\n";
        echo "\n";
        echo "\n";
        echo "\n";
        echo "\n";
        echo self::$genetatedCode;
    }
}
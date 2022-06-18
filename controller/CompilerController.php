<?php

namespace Controller;

class CompilerController {
    private static string $genetatedCode;
    private static string $genetatedVars;
    private static string $ident;

    public function __construct()
    {
        self::$genetatedCode = "";
        self::$genetatedVars = "";
        self::$ident = "\t";
    }

    public static function addCode(string $code) : void {
        self::$genetatedCode .= self::$ident . $code . "\n";
    }

    public static function addComment(string $comment) : void {
        self::$genetatedCode .= self::$ident . "#" . $comment . "\n";
    }

    public static function addEmptyLine() : void {
        self::$genetatedCode .= "\n";
    }

    public static function addMarkLabel(string $label) : void {
        self::$genetatedCode .= self::$ident . "{$label}:\n";
    }

    private static function getCode() : string {
        return self::$genetatedCode;
    }

    public static function addVar(string $code) : void {
        self::$genetatedVars .= "\t" . $code."\n";
    }

    private static function getVar() : string {
        return self::$genetatedVars;
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

        VarsController::compile();

        echo ".data";
        echo "\n";
        echo self::getVar();
        echo "\n";
        echo "\n";
        echo ".text";
        echo "\n";
        echo self::getCode();
    }
}
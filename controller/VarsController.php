<?php

namespace Controller;

use Assembly\Register;
use Assembly\Variable;
use Exception;

class VarsController {
    private static array $registredVars;
    private static int $systemVarCont;

    public function __construct()
    {
        self::$registredVars = [];
        self::$systemVarCont = 0;
    }

    public static function addVar(Variable $var) {
        $name = $var->getName();

        if(!empty(self::$registredVars[$name])) {
            throw new Exception("Variável já declarada", 1);
        }

        if($var instanceof Register) {
            throw new Exception("Variavel de memória n pode ser salva na ran diretamente", 1);
        }

        self::$registredVars[$name] = $var;
    }

    public static function getVar(string $varName) : Variable {

        if(empty(self::$registredVars[$varName])) {
            throw new Exception("Variável {$varName} não declarada", 1);
        }

        return self::$registredVars[$varName];
    }

    public static function compile() : void {

        if(empty(self::$registredVars)) {
            return;
        }

        foreach (self::$registredVars as $data) {
            $data->compile();
        }

    }

    public static function nextSystemData() : string {
        self::$systemVarCont++;
        return "SYSTEM_" . self::$systemVarCont;
    }
}
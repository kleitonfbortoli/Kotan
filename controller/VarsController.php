<?php

namespace Controller;

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

        if(!empty($registredVars[$name])) {
            throw new Exception("Variável já declarada", 1);
        }

        $registredVars[$name] = $var;
    }

    public static function compile() : void {

        if(empty($registredVars)) {
            return;
        }

        foreach ($registredVars as $data) {
            $data->compile();
        }

    }

    public static function nextSystemData() : string {
        self::$systemVarCont++;
        return "SYSTEM_" . self::$systemVarCont;
    }
}
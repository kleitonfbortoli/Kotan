<?php

namespace Controller;

use Assembly\Variable;
use Lib\Stack\Stack;

class CompilerMemoryVarsController {
    private static Stack $registersStack;

    public static function printStack() {
        echo "\n\n";
        var_dump(self::$registersStack);
        echo "\n\n";
    }

    public function __construct() {
        self::$registersStack = new Stack();
    }

    public static function addVarToStack(Variable $element) : void {
        self::$registersStack->add($element);
    }

    public static function getVarOnStack() : ?Variable {
        return self::$registersStack->get();
    }
}
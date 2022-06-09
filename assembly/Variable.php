<?php

namespace Assembly;

use Controller\CompilerController;
use Controller\RegisterController;
use Enum\EnumVariableDefault;
use Enum\EnumVariableType;

abstract class Variable {
    public function __construct(
        private string $name,
        private string $type,
        private mixed $value = '',
    )
    {}

    public function getType() : string
    {
        return $this->type;
    }

    public function getName() : string {
        return $this->name;
    }

    public function getValue() : mixed {
        return $this->value;
    }

    public function isRegister() : bool {
        return false;
    }

    public function clean() {}

    public function compile() : void {
        CompilerController::addVar("{$this->name}: {$this->type} {$this->value}");
    }

    public static function createStringVar(string $name, string | null $value) : Variable {
        if(empty($value)) {
            $value = EnumVariableDefault::String;
        }

        $var = new Variable(
            $name,
            EnumVariableType::String,
            '"'.$value.'"'
        );

        return $var;
    }
}
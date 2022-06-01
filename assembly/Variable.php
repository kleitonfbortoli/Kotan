<?php

namespace Assembly;

use Controller\CompilerController;
use Enum\EnumVariableDefault;
use Enum\EnumVariableType;

class Variable {
    public function __construct(
        private string $type,
        private string $name,
        private mixed $value,
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

    public function compile() : void {
        $compiled = "";

        CompilerController::addCode("{$this->name}: {$this->type} {$this->value}");
    }

    public static function createStringData(string $name, string | null $value) : Variable {
        if(empty($value)) {
            $value = EnumVariableDefault::String;
        }

        $var = new Variable(
            EnumVariableType::String,
            $name,
            '"'.$value.'"'
        );

        return $var;
    }
}
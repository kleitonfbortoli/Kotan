<?php

namespace Assembly;

use Controller\RegisterController;

class Register extends Variable {
    public function clean() {
        RegisterController::liberateRegister($this->getName());
    }

    public function isRegister() : bool {
        return true;
    }

    public static function getTVar(mixed $value, string $type) {
        $registerName = RegisterController::getTRegister();

        $var = new Register(
            $registerName,
            $type,
            $value,
        );

        return $var;
    }

    public static function getSVar(mixed $value, string $type) : Variable {
        $registerName = RegisterController::getSRegister();

        $var = new Register(
            $registerName,
            $type,
            $value,
        );

        return $var;
    }
}
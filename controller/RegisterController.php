<?php

namespace Controller;

use Assembly\SRegistrador;
use Assembly\TRegistrador;
use Exception;

class RegisterController {
    private static array $inUseRegisters;

    private static array $tRegister;
    private static array $sRegister;

    public function __construct()
    {
        self::$tRegister = TRegistrador::getList();
        self::$sRegister = SRegistrador::getList();
        self::$inUseRegisters = [];
    }

    public static function getTRegister() : string {
        $dispRegisters = array_diff(self::$tRegister, self::$inUseRegisters);

        return self::getRegister($dispRegisters);    }

    public static function getSRegister() : string {
        $dispRegisters = array_diff(self::$sRegister, self::$inUseRegisters);

        return self::getRegister($dispRegisters);
    }

    public static function liberateRegister(string $registerName) : void {
        $func = function($value) use ($registerName) {
            return $value !== $registerName;
        };
        self::$inUseRegisters = array_filter(self::$inUseRegisters, $func);
    }

    private static function getRegister(array $dispRegisters) : string {
        if(empty($dispRegisters)) {
            throw new Exception("Máximo de registradores atingidos", -1);
        }

        $register = array_pop($dispRegisters);

        self::$inUseRegisters[] = $register;

        return $register;
    }
}
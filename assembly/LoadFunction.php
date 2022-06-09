<?php
namespace Assembly;

use Enum\EnumVariableType;
use Exception;

class LoadFunction {
    public static function getLoadValueFunction(Variable $var) : string {
        $loadF = "";

        switch ($var->getType()) {
            case !$var->isRegister():
                $loadF = "la";
                break;

            case EnumVariableType::Num:
                $loadF = "li";
                break;

            default:
                throw new Exception("o tipo {$var->getType()} não tem um tipo de atribuição definido", 1);
                break;
        }

        return $loadF;
    }

    public static function getMoveFunction(Variable $var) : string {
        $moveF = $var->isRegister() ? "move" : "la";

        return $moveF;
    }
}
<?php

namespace Controller;

use Enum\EnumLogicalOperators;
use Exception;

class ConditionalController {
    public static function getCommand(string $conditionType) : string {
        $condition = "";
        switch ($conditionType) {
            case EnumLogicalOperators::Big:
                $condition = "ble";
                break;
            case EnumLogicalOperators::BigOrEqual:
                $condition = "blt";
                break;
            case EnumLogicalOperators::Equal:
                $condition = "bne";
                break;
            case EnumLogicalOperators::NotEqual:
                $condition = "beq";
                break;
            case EnumLogicalOperators::Low:
                $condition = "bge";
                break;
            case EnumLogicalOperators::LowOrEqual:
                $condition = "bgt";
                break;
            default:
                throw new Exception("Comparador lógico n aceito.", 1);
                break;
        }

        return $condition;
    }
}
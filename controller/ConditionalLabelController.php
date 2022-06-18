<?php

namespace Controller;

class ConditionalLabelController {
    private static array $registredConditions;
    private static int $systemConditionCount;

    public function __construct()
    {
        self::$registredConditions = [];
        self::$systemConditionCount = 0;
    }

    public static function endCondition() : string {
        return array_pop(self::$registredConditions);
    }

    public static function startCondition() : string {
        $conditionName = "CONDITION_" . self::$systemConditionCount;
        self::$systemConditionCount++;
        array_push(self::$registredConditions, $conditionName);
        return $conditionName;
    }

    public static function getCurrentCondition() : string {
        return end(self::$registredConditions);
    }
}
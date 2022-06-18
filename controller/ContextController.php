<?php
namespace Controller;

use Basic\Element;
use Utils\UtilsElement;

class ContextController {
    private static Element $currentElement;

    public function __construct() {
        new CompilerController();
        new CompilerMemoryVarsController();
        new ElementStackController();
        new RegisterController();
        new VarsController();
        new ConditionalLabelController();
    }

    // toda vez que começar um if ou coisa do tipo ele vai dar um start context
    public static function startContext(string $context) {
        echo "startContext {$context}\n";

        if(!empty(self::$currentElement)) {
            ElementStackController::addElement(self::$currentElement);
        }

        $element = UtilsElement::getElementContext($context);

        self::$currentElement = $element;
    }

    // Ao chegar no final do contexto atual, é chamado essa e sobe a stack
    // Quando a stack retornar null, é o momento de compilar o código
    public static function endContext()
    {
        echo "endContext\n";
        $fatherElement = ElementStackController::getElement();

        if(empty($fatherElement)) {
            self::compile();
            die;
        }

        $fatherElement->addChild(self::$currentElement);

        self::$currentElement = $fatherElement;
    }

    // Ao chegar no final do contexto atual, é chamado essa e sobe a stack
    // Quando a stack retornar null, é o momento de compilar o código
    public static function rollbackContext()
    {
        echo "rollbackContext\n";

        // $fatherElement = ElementStackController::getElement();

        // self::$currentElement = $fatherElement;
    }

    public static function shortContext(string $context) {
        self::startContext($context);
        self::endContext();
    }

    public static function setValue(string $value) : void {
        self::$currentElement->setValue($value);
    }

    public static function setLogicalOperator(string $value) : void {
        self::$currentElement->setLogicalOperator($value);
    }

    public static function setName(string $value) : void {
        self::$currentElement->setName($value);
    }

    private static function compile() {
        self::$currentElement->compile();
        CompilerController::printCode();
    }
}
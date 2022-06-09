<?php
namespace Controller;

use Basic\Element;
use Basic\Propertie;
use Enum\EnumElements;
use Exception;
use Utils\UtilsElement;

class ContextController {
    private static Element $currentElement;
    private static array $propertieType;

    public function __construct() {
        new CompilerController();
        new CompilerMemoryVarsController();
        new ElementStackController();
        new RegisterController();
        new VarsController();
        self::$propertieType = [];
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

        // verifica se a ação deve ser adicionar uma propriedade
        if(self::$currentElement instanceof Propertie) {
            $fatherElement->addPropertie(array_pop(self::$propertieType),self::$currentElement);
        } else {
            $fatherElement->addChild(self::$currentElement);
        }

        self::$currentElement = $fatherElement;
    }

    public static function shortContext(string $context) {
        self::startContext($context);
        self::endContext();
    }

    public static function startPropertieContext(string $propertieType) {
        array_push(self::$propertieType, $propertieType);

        self::startContext('Propertie');
    }

    public static function endPropertieContext() {
        self::endContext();
    }

    public static function setValue(string $value) : void {
        self::$currentElement->setValue($value);
    }

    private static function compile() {
        self::$currentElement->compile();
        CompilerController::printCode();
    }
}
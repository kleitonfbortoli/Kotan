<?php
namespace Controller;

use Enum\EnumElements;
use Interface\InterfaceElement;
use LinkedListElements;
use List\LinkedListElement;
use List\ListElement;
use Utils\UtilsElement;

class ContextController {
    private static LinkedListElement $linkedList;
    private static InterfaceElement $currentElement;

    // toda vez que começar um if ou coisa do tipo ele vai dar um start context
    // Consequentemente chegando no fim do if tbm
    public static function startContext(string $class) {
        echo "startContext {$class}";
        if(!empty(self::$currentElement)) {
            self::$linkedList->add(self::$currentElement);
        }

        $context = UtilsElement::instanceElement($class); //Aqui tem que buscar o elemento do contexto

        self::$currentElement = $context;
    }

    public static function endContext()
    {
        $next_element = self::$linkedList->getNext();

        if(empty($next_element)) {
            echo "Cheguei no compile";
        }

        $next_element->addChild(self::$currentElement);
        self::$currentElement = $next_element;
    }
}
<?php
namespace Controller;

use Interface\InterfaceElement;
use LinkedListElements;
use List\LinkedListElement;
use List\ListElement;

class ContextController {
    private static LinkedListElement $linkedList;
    private static ListElement $elementsList;
    private static InterfaceElement $currentElement;

    // toda vez que começar um if ou coisa do tipo ele vai dar um start context
    // Consequentemente chegando no fim do if tbm
    public static function startContext(string $elementName) {
        if(!empty(self::$currentElement)) {
            self::$linkedList->add(self::$currentElement);
        }

        $newElement = null; //Aqui tem que buscar o elemento do contexto

        self::$currentElement = $newElement;
    }

    public static function endContext()
    {
        $next_element = self::$linkedList->getNext();

        if(empty($next_element)) {
            //Aqui vai gerar a compilação do código
        }

        $next_element->addChild(self::$currentElement);
        self::$currentElement = $next_element;
    }
}
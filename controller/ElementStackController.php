<?php

namespace Controller;

use Basic\Element;
use Lib\Stack\Stack;

class ElementStackController {
    private static Stack $elementsStack;

    public static function printStack() {
        echo "\n\n";
        var_dump(self::$elementsStack);
        echo "\n\n";
    }

    public function __construct() {
        self::$elementsStack = new Stack();
    }

    public static function addElement(Element $element) : void {
        self::$elementsStack->add($element);
    }

    public static function getElement() : ?Element {
        return self::$elementsStack->get();
    }
}
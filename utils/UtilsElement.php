<?php
namespace Utils;

use Basic\Element;
use Enum\EnumElements;
use Exception;

class UtilsElement {
    public static function getElementContext(string $context) : Element {

        $elementName = self::getElementNameByContext($context);

        if(!class_exists($elementName)) {
            throw new Exception("Elemento {$elementName} não existente!", -1);
        }

        $instance = new $elementName();

        return $instance;
    }

    private static function getElementNameByContext(string $context) : string {
        $elementName = constant("Enum\EnumElements::{$context}");

        if(!$elementName) {
            throw new Exception("O contexto {$context} não possui um elemento.", -1);
        }

        return $elementName;
    }
}
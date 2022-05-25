<?php
namespace Utils;

use Abstract\AbstractElement;
use Element\ProgranElement;
use Exception;

class UtilsElement {
    public static function instanceElement(string $class) : AbstractElement {
        if(class_exists($class)) {
            $instance = new $class();

            if(is_subclass_of($instance, AbstractElement::class)) {
                return $instance;
            }
            throw new Exception("A classe {$class} não é um Elemnt válido!", -1);
        }
        throw new Exception("Elemento {$class} não existente!", -1);
    }
}
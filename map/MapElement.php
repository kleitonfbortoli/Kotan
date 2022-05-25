<?php
namespace Map;

use Abstract\AbstractMap;
use Interface\InterfaceElement;

class MapElement extends AbstractMap {

    public function add(string $name, InterfaceElement $element)
    {
        parent::add($name, $element);
    }

    public function get(string $name) : InterfaceElement
    {
        return parent::get($name);
    }
}
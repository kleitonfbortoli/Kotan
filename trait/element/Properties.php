<?php
namespace Trait\Element;

use Interface\InterfaceProperties;

trait Properties{
    private array $properties;

    public function __construct() {
        $this->properties = array();
    }

    public function addPropertie(string $propertieType, InterfaceProperties $propertie) {
        array_push($this->properties[$propertieType], $propertie);
    }

    public function getPropertie(string $propertieType) : InterfaceProperties | null {
        return array_pop($this->properties[$propertieType]);
    }
}
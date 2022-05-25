<?php
namespace Abstract;

use Interface\InterfaceElement;
use Interface\InterfaceProperties;

abstract class AbstractElement implements InterfaceElement{
    private AbstractList $childrens;
    private AbstractMap $properties;

    protected function instanceChildrenList(AbstractList $list) {
        $this->childrens = $list;
    }

    protected function instancePropertiesMap(AbstractMap $map) {
        $this->properties = $map;
    }

    public function addProp(string $name, InterfaceProperties $propertie) {
        $this->properties->add($name, $propertie);
    }

    public function addChild(InterfaceElement $child) {
        $this->childrens->push($child);
    }

    public function removeLastChild() {
        $this->childrens->pop();
    }

    public function compileChildrensCode() : string {
        $compiledCod = "";

        if(!empty($childrens)) {
            foreach ($childrens as $key => $child) {
                $compiledCod = $child->generateCompiledCode();
            }
        }

        return $compiledCod;
    }
}
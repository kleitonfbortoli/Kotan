<?php
namespace Abstract;

use Interface\InterfaceElement;
use List\ListElement;

abstract class AbstractElement implements InterfaceElement{
    private $childrens;

    protected function instanceChildrenList(ListElement $list) {
        $this->childrens = $list;
    }

    public function addChild(InterfaceElement $child) {
        $this->childrens->push($child);
    }

    public function removeLastChild() {
        $this->childrens->pop();
    }

    public function compileChildrenCode() : string {
        $compiledCod = "";

        if(!empty($childrens)) {
            foreach ($childrens as $key => $child) {
                $compiledCod = $child->generateCompiledCode();
            }
        }

        return $compiledCod;
    }
}
<?php
namespace Trait\Element;

use Basic\Element;

trait Childreens {
    protected array $childs = array();

    public function addChild(Element $child) {
        array_push($this->childs, $child);
    }

    public function getChild() : Element {
        return array_pop($this->childs);
    }

    public function compileChilds() : void {
        if(!empty($this->childs)) {
            foreach($this->childs as $child) {
                $child->compile();
            }
        }
    }
}
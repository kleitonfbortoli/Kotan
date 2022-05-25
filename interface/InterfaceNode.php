<?php
namespace Interface;

interface InterfaceNode {
    public function getChild() : InterfaceNode;
    public function setChild(InterfaceNode $child);
    public function getValue() : Object;
    public function setValue(Object $value);
}

?>
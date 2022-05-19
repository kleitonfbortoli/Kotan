<?php
namespace Interface;

interface InterfaceElement {
    public function generateCompiledCode() : string;
    public function compileChildrenCode() : string;

    public function addChild(InterfaceElement $child);
    public function removeLastChild();
}
?>
<?php
namespace Interface;

interface InterfaceElement {
    public function addProp(string $name, InterfaceProperties $propertie);
    public function generateCompiledCode() : string;
    public function compileChildrensCode() : string;
    public function addChild(InterfaceElement $child);

}
?>
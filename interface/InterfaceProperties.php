<?php
namespace Interface;

interface InterfaceProperties {
    public function setElement(InterfaceElement $element);
    public function getCompiledCode() : string;
}
<?php
namespace Interface;

use Assembly\Registrador;
use Basic\Element;

interface InterfaceProperties {
    public function setElement(Element $element);
    public function compile() : Registrador | null;
}
<?php
namespace Basic;

use Assembly\Registrador;
use Exception;
use Interface\InterfaceElement;

abstract class Element implements InterfaceElement {
    public function addChild(Element $child) {
        throw new Exception("Elemento não pode ter elementos fihos", -1);
    }

    public function setValue(string $pvalue) {
        throw new Exception("Elemento não pode ter values", -1);
    }

    public function setName(string $pvalue) {
        throw new Exception("Elemento não pode ter names", -1);
    }

    public function setLogicalOperator(string $pvalue) {
        throw new Exception("Elemento não pode ter operadores lógicos", -1);
    }

    public function compile() : void {
        throw new Exception("Não foi definido um modelo de compilação", -1);
    }
}
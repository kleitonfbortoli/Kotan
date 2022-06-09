<?php
namespace Element;

use Basic\Element;
use Controller\CompilerMemoryVarsController;
use Controller\VarsController;
use Assembly\Variable;
use Interface\InterfaceElement;
use Trait\Element\Values;

class VarElement extends Element implements InterfaceElement {
    use Values;

    public function compile(): void
    {
        $var = VarsController::getVar($this->getValue());

        CompilerMemoryVarsController::addVarToStack($var);
    }

}
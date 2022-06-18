<?php
namespace Element;

use Assembly\LoadFunction;
use Assembly\Register;
use Basic\Element;
use Controller\CompilerController;
use Controller\CompilerMemoryVarsController;
use Controller\VarsController;
use Interface\InterfaceElement;
use Trait\Element\Value;

class VarElement extends Element implements InterfaceElement {
    use Value;

    public function compile(): void
    {
        $varMemory = VarsController::getVar($this->getValue());

        if(!($varMemory instanceof Register)) {
            $loaFunc = LoadFunction::getMoveFunction($varMemory);

            $var = Register::getTVar($this->getValue(),$varMemory->getType());

            CompilerController::addCode("{$loaFunc} {$var->getName()},  {$varMemory->getName()}");
        } else {
            $var =  $varMemory;
        }

        CompilerMemoryVarsController::addVarToStack($var);
    }

}
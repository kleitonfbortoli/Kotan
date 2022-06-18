<?php
namespace Element;

use Assembly\LoadFunction;
use Assembly\Register;
use Assembly\Variable;
use Basic\Element;
use Controller\CompilerController;
use Controller\CompilerMemoryVarsController;
use Controller\VarsController;
use Exception;
use Interface\InterfaceElement;
use Trait\Element\Childreens;
use Trait\Element\Name;

class ReAssignmentElement extends Element implements InterfaceElement {
    use Name;
    use Childreens;


    public function compile(): void
    {
        $this->compileChilds();

        $varMemory = VarsController::getVar($this->getName());
        $varNewValue = CompilerMemoryVarsController::getVarOnStack(); //value

        if($varMemory instanceof Register) {
            throw new Exception("Não é possível reatribuir registradores", 1);
        }

        $moveFunc = LoadFunction::getMoveFunction($varNewValue);


        CompilerController::addCode("la \$a0, {$varMemory->getName()}");
        CompilerController::addCode("{$moveFunc} \$a1, {$varNewValue->getName()}");
        CompilerController::addCode("sw \$a1, 0(\$a0)");
    }

}
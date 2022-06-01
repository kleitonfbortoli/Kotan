<?php
namespace Element;

use Basic\Element;
use Controller\CompilerController;
use Controller\CompilerMemoryVarsController;
use Exception;
use Interface\InterfaceElement;
use Trait\Element\Childreens;

class ShowElement extends Element implements InterfaceElement {
    use Childreens;

    public function compile(): void
    {
        $this->compileChilds();

        $var = CompilerMemoryVarsController::getVarOnStack();

        if(!isset($var)) {
            throw new Exception("É necessário parrar um parametro para a função SHOW", 1);

        }

        CompilerController::addCode("#SHOW element");
        $cod = $this->getCodByType($var->getType());
        CompilerController::addCode('li $v0, ' + $cod);
        CompilerController::addCode('la $a0, ' + $var->getName());
        CompilerController::addCode('syscall');

    }

    public function getCodByType(string $type) : int {
        $value = 0;
        switch ($type) {
            case '.asciiz':
                $value = 4;
                break;

            default:
                throw new Exception("Não é possível imprimir esse elemento", -1);
                break;
        }
        return $value;
    }

}
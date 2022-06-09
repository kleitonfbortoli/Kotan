<?php
namespace Element;

use Assembly\LoadFunction;
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

        $cod = $this->getCodByType($var->getType());
        $loaFunc = LoadFunction::getMoveFunction($var);
        CompilerController::addComment("SHOW element");
        CompilerController::addCode('li $v0, ' . $cod);
        CompilerController::addCode($loaFunc.' $a0, ' . $var->getName());
        CompilerController::addCode('syscall');
        CompilerController::addEmptyLine();

    }

    public function getCodByType(string $type) : int {
        $value = 0;
        switch ($type) {
            case '.asciiz':
                $value = 4;
                break;
            case '.word':
                $value = 1;
                break;
            default:
                throw new Exception("Não é possível imprimir um elemento do tipo {$type}", -1);
                break;
        }
        return $value;
    }
}
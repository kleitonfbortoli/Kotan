<?php
namespace Element;

use Assembly\Register;
use Basic\Element;
use Controller\CompilerController;
use Controller\CompilerMemoryVarsController;
use Controller\RegisterController;
use Enum\EnumVariableType;
use Exception;
use Interface\InterfaceElement;

class MultiplicationElement extends Element implements InterfaceElement {
    public function compile(): void
    {
        // para garantir que os registros que são usados na multiplicação não sejam reutilizados pro result
        $registerResult = Register::getSVar(null, EnumVariableType::Num);

        $var1 = CompilerMemoryVarsController::getVarOnStack();
        $var2 = CompilerMemoryVarsController::getVarOnStack();

        if(!isset($var1) OR !isset($var2)) {
            throw new Exception("É necessário parrar um parametro para a função SHOW", 1);
        }

        $type1 = $var1->getType();
        $type2 = $var2->getType();

        if($type1 !== EnumVariableType::Num OR $type2 !== EnumVariableType::Num) {
            throw new Exception("Para realizar a soma são necessários dois valores inteiros", 1);
        }

        CompilerController::addComment("Sum element");
        // orden primeiro 1 depois dois por causa da ordem da stac, a ultima a adicionar é a primeira a tirar
        CompilerController::addCode("mul {$registerResult->getname()}, {$var2->getName()}, {$var1->getName()}");
        CompilerController::addEmptyLine();

        CompilerMemoryVarsController::addVarToStack($registerResult);
    }
}
<?php
namespace Element;

use Assembly\LoadFunction;
use Assembly\Register;
use Assembly\Variable;
use Basic\Element;
use Controller\CompilerController;
use Controller\CompilerMemoryVarsController;
use Controller\RegisterController;
use Controller\VarsController;
use Enum\EnumVariableType;
use Exception;
use Interface\InterfaceElement;
use Trait\Element\Childreens;

class SubtractionElement extends Element implements InterfaceElement {
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

        CompilerController::addComment("Subtraction element");
        // orden primeiro 1 depois dois por causa da ordem da stac, a ultima a adicionar é a primeira a tirar
        CompilerController::addCode("sub {$registerResult->getName()}, {$var2->getName()}, {$var1->getName()}");
        CompilerController::addEmptyLine();

        CompilerMemoryVarsController::addVarToStack($registerResult);
    }
}
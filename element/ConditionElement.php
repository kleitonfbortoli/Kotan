<?php
namespace Element;

use Basic\Element;
use Controller\CompilerController;
use Controller\CompilerMemoryVarsController;
use Controller\ConditionalController;
use Controller\ConditionalLabelController;
use Exception;
use Interface\InterfaceElement;
use Trait\Element\Childreens;
use Trait\Element\LogicalOperator;

class ConditionElement extends Element implements InterfaceElement {
    use LogicalOperator, Childreens;

    public function compile(): void
    {
        // para garantir que os registros que são usados na multiplicação não sejam reutilizados pro result

        $this->compileChilds();

        $var1 = CompilerMemoryVarsController::getVarOnStack();
        $var2 = CompilerMemoryVarsController::getVarOnStack();

        if(!isset($var1) OR !isset($var2)) {
            throw new Exception("São necessários dois parametros para uma condição", 1);
        }

        $function = ConditionalController::getCommand($this->getLogicalOperator());

        $label = ConditionalLabelController::getCurrentCondition();

        CompilerController::addComment("Condition");
        // orden primeiro 1 depois dois por causa da ordem da stac, a ultima a adicionar é a primeira a tirar
        CompilerController::addCode("{$function} {$var2->getName()}, {$var1->getName()}, $label");
        CompilerController::addEmptyLine();
    }

}
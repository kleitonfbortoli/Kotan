<?php
namespace Element;

use Basic\Element;
use Controller\CompilerController;
use Controller\ConditionalLabelController;
use Interface\InterfaceElement;
use Trait\Element\Childreens;

class LacoElement extends Element implements InterfaceElement {
    use Childreens;

    public function compile(): void
    {
        $lacoName = ConditionalLabelController::startCondition();
        CompilerController::addComment("Laco {$lacoName} Start");
        CompilerController::addMarkLabel($lacoName);

        $conditionName = ConditionalLabelController::startCondition();
        CompilerController::addComment("Condition {$conditionName} Start");
        CompilerController::addEmptyLine();

        $this->compileChilds();

        // code to return start laco
        CompilerController::addComment("Laco {$lacoName} to start");
        CompilerController::addCode("j $lacoName");

        CompilerController::addComment("Laco {$conditionName} Jump");
        CompilerController::addMarkLabel($conditionName);

        ConditionalLabelController::endCondition();
        ConditionalLabelController::endCondition();
    }

}
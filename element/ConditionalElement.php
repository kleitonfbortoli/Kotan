<?php
namespace Element;

use Basic\Element;
use Controller\CompilerController;
use Controller\ConditionalController;
use Controller\ConditionalLabelController;
use Interface\InterfaceElement;
use Trait\Element\Childreens;

class ConditionalElement extends Element implements InterfaceElement {
    use Childreens;

    public function compile(): void
    {
        $conditionName = ConditionalLabelController::startCondition();
        CompilerController::addComment("Condition {$conditionName} Start");
        CompilerController::addEmptyLine();

        $this->compileChilds();

        CompilerController::addComment("Condition {$conditionName} Jump");
        CompilerController::addMarkLabel($conditionName);

        ConditionalLabelController::endCondition();
    }

}
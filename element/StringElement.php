<?php
namespace Element;

use Assembly\CompilationVar;
use Basic\Element;
use Controller\CompilerMemoryVarsController;
use Controller\VarsController;
use Assembly\Variable;
use Interface\InterfaceElement;
use Trait\Element\StringValue;

class StringElement extends Element implements InterfaceElement {
    use StringValue;

    public function compile(): void
    {
        $dataSystemName = VarsController::nextSystemData();

        $var = Variable::createStringData($dataSystemName, $this->getStringValue());

        VarsController::addVar($var);

        CompilerMemoryVarsController::addVarToStack($var);
    }

}
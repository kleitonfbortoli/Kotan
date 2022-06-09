<?php
namespace Element;

use Basic\Element;
use Controller\CompilerMemoryVarsController;
use Controller\VarsController;
use Assembly\Variable;
use Interface\InterfaceElement;
use Trait\Element\Values;

class StringElement extends Element implements InterfaceElement {
    use Values;

    public function compile(): void
    {
        $dataSystemName = VarsController::nextSystemData();

        $var = Variable::createStringVar($dataSystemName, $this->getValue());

        VarsController::addVar($var);

        CompilerMemoryVarsController::addVarToStack($var);
    }

}
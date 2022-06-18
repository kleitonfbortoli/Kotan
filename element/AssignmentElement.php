<?php
namespace Element;

use Assembly\Variable;
use Basic\Element;
use Controller\VarsController;
use Enum\EnumVariableType;
use Interface\InterfaceElement;
use Trait\Element\Name;
use Trait\Element\Value;

class AssignmentElement extends Element implements InterfaceElement {
    use Value;
    use Name;


    public function compile(): void
    {
        $var = new Variable(
            $this->getName(),
            EnumVariableType::Num,
            $this->getValue()
        );

        VarsController::addVar($var);

    }

}
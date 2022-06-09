<?php
namespace Element;

use Assembly\LoadFunction;
use Assembly\Register;
use Basic\Element;
use Controller\CompilerMemoryVarsController;
use Controller\VarsController;
use Assembly\Variable;
use Controller\CompilerController;
use Enum\EnumVariableType;
use Interface\InterfaceElement;
use Trait\Element\Values;

class NumElement extends Element implements InterfaceElement {
    use Values;

    public function compile(): void
    {
        $var = Register::getTVar($this->getValue(), EnumVariableType::Num);

        $func = LoadFunction::getLoadValueFunction($var);
        $nameVar = $var->getName();
        $value = $this->getValue();

        CompilerController::addComment("Num Value attr");
        CompilerController::addCode("{$func} {$nameVar} {$value}");
        CompilerController::addEmptyLine();

        CompilerMemoryVarsController::addVarToStack($var);
    }

}
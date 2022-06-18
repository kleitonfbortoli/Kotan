<?php
namespace Element;

use Assembly\LoadFunction;
use Assembly\Register;
use Basic\Element;
use Controller\CompilerMemoryVarsController;
use Controller\CompilerController;
use Enum\EnumVariableType;
use Interface\InterfaceElement;
use Trait\Element\Value;

class NumElement extends Element implements InterfaceElement {
    use Value;

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
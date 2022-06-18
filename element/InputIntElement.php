<?php
namespace Element;

use Assembly\LoadFunction;
use Assembly\Register;
use Basic\Element;
use CompileError;
use Controller\CompilerMemoryVarsController;
use Controller\CompilerController;
use Controller\RegisterController;
use Enum\EnumVariableType;
use Interface\InterfaceElement;

class InputIntElement extends Element implements InterfaceElement {

    public function compile(): void
    {
        $registerName = RegisterController::getTRegister();
        $var = new Register(
            $registerName,
            EnumVariableType::Num
        );
        CompilerMemoryVarsController::addVarToStack($var);

        CompilerController::addComment("Entrada de inteiros");
        CompilerController::addCode("li \$v0, 5"); // leitura de inteiro
        CompilerController::addCode("syscall");
        CompilerController::addCode("move {$var->getName()}, \$v0");
        CompilerController::addEmptyLine();

    }

}
<?php
namespace Element;

use Assembly\Registrador;
use Basic\Element;
use Interface\InterfaceElement;
use Trait\Element\Childreens;

class ExpressionElement extends Element implements InterfaceElement {
    use Childreens;

    public function compile(): void
    {
        $this->compileChilds();
    }

}
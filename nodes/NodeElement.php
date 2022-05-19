<?php
namespace Node;

use Abstract\AbstractNode;
use Interface\InterfaceElement;

class NodeElement extends AbstractNode {
    private InterfaceElement $value;

    public function getValue(): InterfaceElement
    {
        return $this->value;
    }

    public function setValue(InterfaceElement $value)
    {
        $this->value = $value;
    }
}
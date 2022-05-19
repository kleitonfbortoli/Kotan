<?php
namespace Abstract;

use Interface\InterfaceNode;

abstract class AbstractNode implements InterfaceNode {
    private InterfaceNode $child;

    public function setChild(InterfaceNode $child)
    {
        $this->child = $child;
    }

    public function getChild(): InterfaceNode
    {
        return $this->child;
    }
}
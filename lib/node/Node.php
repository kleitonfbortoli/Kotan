<?php
namespace Lib\Node;

use Lib\Interface\Node\InterfaceNode;

class Node implements InterfaceNode {
    private Node $child;
    private mixed $value;

    public function setChild(Node $child)
    {
        $this->child = $child;
    }

    public function getChild(): ?Node
    {
        return $this->child ?? null;
    }

    public function getValue() : mixed
    {
        return $this->value ?? null;
    }

    public function setValue(mixed $value) {
        $this->value = $value;
    }
}
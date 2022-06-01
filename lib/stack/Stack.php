<?php
namespace Lib\Stack;

use Lib\Interface\Stack\InterfaceStack;
use Lib\Node\Node;

class Stack implements InterfaceStack {
    protected ?Node $node;

    public function __construct()
    {
        $this->node = new Node();
    }

    public function add(mixed $element) {
        $newNode = new Node();
        $newNode->setValue($element);

        if(!empty($this->node))
        {
            $newNode->setChild($this->node);
        }

        $this->node = $newNode;
    }

    public function get() : mixed {
        if(empty($this->node)) {
            return null;
        }

        $element = $this->node->getValue();
        $this->node = $this->node->getChild();

        return $element;
    }
}
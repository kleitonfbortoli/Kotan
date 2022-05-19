<?php
namespace List;

use AbstractLinkedList;
use Interface\InterfaceElement;
use Node\NodeElement;

class LinkedListElement extends AbstractLinkedList {
    public function add(InterfaceElement $element) {
        $newNode = new NodeElement();
        $newNode->setValue($element);
        $newNode->setChild($this->node);
        $this->node = $newNode;
    }

    public function getNext() : InterfaceElement {
        if(empty($this->node)) {
            return null;
        }

        $element = $this->node->getValue();
        $this->node = $this->node->getChild();

        return $element;
    }
}
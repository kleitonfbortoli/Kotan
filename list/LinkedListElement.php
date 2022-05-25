<?php
namespace List;

use Abstract\AbstractElement;
use AbstractLinkedList;
use Node\NodeElement;

class LinkedListElement extends AbstractLinkedList {
    public function add(AbstractElement $element) {
        $newNode = new NodeElement();
        $newNode->setValue($element);

        if(!empty($this->node))
        {
            $newNode->setChild($this->node);
        }

        $this->node = $newNode;
    }

    public function getNext() : AbstractElement {
        if(empty($this->node)) {
            return null;
        }

        $element = $this->node->getValue();
        $this->node = $this->node->getChild();

        return $element;
    }
}
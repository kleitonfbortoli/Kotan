<?php

use Interface\InterfaceNode;

interface InterfaceLinkedList {
    public function add(object $element);
    public function getNext() : object;
}
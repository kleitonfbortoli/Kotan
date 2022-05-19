<?php
namespace List;

use Abstract\AbstractList;
use Interface\InterfaceElement;

class ListElement extends AbstractList {

    public function push(InterfaceElement $value) {
        array_push($this->list, $value);
    }

    public function pop() : InterfaceElement {
        return array_pop($this->list);
    }
}
?>
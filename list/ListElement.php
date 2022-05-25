<?php
namespace List;

use Abstract\AbstractElement;
use Abstract\AbstractList;

class ListElement extends AbstractList {

    public function push(AbstractElement $value) {
        array_push($this->list, $value);
    }

    public function pop() : AbstractElement {
        return array_pop($this->list);
    }
}
?>
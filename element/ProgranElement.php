<?php
namespace Element;

use Abstract\AbstractElement;
use List\ListElement;
use Map\MapElement;

class ProgranElement extends AbstractElement {

    public function __construct()
    {
        $this->instanceChildrenList(new ListElement());
        $this->instancePropertiesMap(new MapElement());
    }

    public function generateCompiledCode(): string
    {
        return "";
    }

}
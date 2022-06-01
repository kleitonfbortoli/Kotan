<?php
namespace Lib\Interface\Node;

use Lib\Node\Node;

interface InterfaceNode {
    public function getChild() : ?Node;
    public function setChild(Node $child);
    public function getValue() : mixed;
    public function setValue(mixed $value);
}

?>
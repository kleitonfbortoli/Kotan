<?php
namespace Trait\Element;

trait Values {
    private string $valueVar;

    public function __construct() {
        $this->valueVar = "";
    }

    public function setValue(string $valueVar) {
        $this->valueVar = $valueVar;
    }

    public function getValue() : string | null {
        return $this->valueVar;
    }
}
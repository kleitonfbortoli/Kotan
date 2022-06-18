<?php
namespace Trait\Element;

trait Value {
    private string $valueVar = "";

    public function setValue(string $valueVar) {
        $this->valueVar = $valueVar;
    }

    public function getValue() : string | null {
        return $this->valueVar;
    }
}
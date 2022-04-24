<?php

namespace DataStructures;

class KotanVariable extends AbstractKotanSymbol {
    public function __construct(
        string $name,
        private int $id,
        private string $value,
    ) {
        parent::__construct($name);
    }

    public function getId() : int {
        return $this->id;
    }

    public function getValue() : string {
        return $this->value;
    }

    public function toString() : string {
        return "KotanVariable [Name = {$this->getName()}, Id = {$this->id}, Value = {$this->vale}]";
    }
}
?>
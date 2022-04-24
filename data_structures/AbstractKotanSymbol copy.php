<?php

namespace DataStructures;

abstract class AbstractKotanSymbol {
    public function __construct(
        private string $name,
    ) {}

    public function getName() {
        return $this->name;
    }

    public function toString() {
        return "KotanSymbol [Name = {$this->name}]";
    }
}
?>
<?php
namespace Trait\Element;

trait Name {
    private string $name = "";

    public function setName(string $name) {
        $this->name = $name;
    }

    public function getName() : string | null {
        return $this->name;
    }
}
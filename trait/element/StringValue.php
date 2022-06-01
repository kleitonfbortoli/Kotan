<?php
namespace Trait\Element;

trait StringValue {
    private string $value;

    public function __construct() {
        $this->value = "";
    }

    public function setStringValue(string $pvalue) {
        $this->value = $pvalue;
    }

    public function getStringValue() : string | null {
        return $this->value;
    }
}
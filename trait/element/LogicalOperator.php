<?php
namespace Trait\Element;

trait LogicalOperator {
    private string $logicalOperator = "";

    public function setLogicalOperator(string $logicalOperator) {
        $this->logicalOperator = $logicalOperator;
    }

    public function getLogicalOperator() : string | null {
        return $this->logicalOperator;
    }
}
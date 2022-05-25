<?php
namespace Interface;

interface InterfaceList {
    public function push(Object $value);
    public function pop();

    public function rewind();
    public function current();
    public function key();
    public function next();
    public function valid();
}

?>
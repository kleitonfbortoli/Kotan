<?php
namespace Interface;

interface InterfaceMap {
    public function add(string $name, Object $value);
    public function get(string $name) : Object;
    public function has(string $name) : bool;

    public function rewind();
    public function current();
    public function key();
    public function next();
    public function valid();
}
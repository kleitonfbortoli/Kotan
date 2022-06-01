<?php
namespace Lib\Interface\Map;

use Iterator;

interface InterfaceMap extends Iterator {
    public function add(string $name, mixed $value);
    public function get(string $name) : mixed;
    public function has(string $name) : bool;
    public function remove(string $name) : void;
}
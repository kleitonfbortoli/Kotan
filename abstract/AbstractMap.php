<?php
namespace Abstract;

use Exception;
use Interface\InterfaceMap;

abstract class AbstractMap implements InterfaceMap {
    private array $map;

    public function add(string $name, Object $value)
    {
        $this->map[$name] = $value;
    }

    public function get(string $name) : Object
    {
        if(!$this->has($name)) {
            throw new Exception("Não esxiste a propriedade {$name}", -1);
        }

        return $this->map[$name];
    }

    public function has(string $name) : bool
    {
        return !empty($this->map[$name]);
    }

    public function rewind()
    {
        reset($this->map);
    }

    public function current()
    {
        $value = current($this->map);
        return $value;
    }

    public function key()
    {
        $key = key($this->map);
        return $key;
    }

    public function next()
    {
        $value = next($this->map);
        return $value;
    }

    public function valid()
    {
        $key = key($this->map);
        $valid = ($key !== NULL && $key !== FALSE);
        return $valid;
    }
}
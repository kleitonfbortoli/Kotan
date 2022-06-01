<?php
namespace Lib\Map;

use Exception;
use Lib\Interface\Map\InterfaceMap;

class Map implements InterfaceMap {
    private array $map;
    private int $currentPosition;
    private array $arrayKeys;

    public function __construct() {
        $this->position = 0;
    }

    private function updateKeys() : void
    {
        $this->arrayKeys = array_keys($this->map);
    }

    public function add(string $name, mixed $value)
    {
        $this->map[$name] = $value;
        $this->updateKeys();
    }

    public function get(string $name) : mixed
    {
        if(!$this->has($name)) {
            throw new Exception("Não esxiste a propriedade {$name}", -1);
        }

        return $this->map[$name];
    }

    public function remove(string $name) : void
    {
        if(!$this->has($name)) {
            throw new Exception("Não esxiste a propriedade {$name}", -1);
        }

        unset ($this->map[$name]);
        $this->map = array_values( $this->map );
        $this->updateKeys();
    }

    public function has(string $name) : bool
    {
        return !empty($this->map[$name]);
    }

    public function rewind() : void
    {
        $this->currentPosition = 0;
    }

    public function current()
    {
        return $this->map[$this->arrayKeys[$this->currentPosition]];
    }

    public function key()
    {
        return $this->currentPosition;
    }

    public function next() : void
    {
        ++$this->position;
    }

    public function valid() : bool
    {
        return !empty($this->map[$this->arrayKeys[$this->currentPosition]]);
    }
}
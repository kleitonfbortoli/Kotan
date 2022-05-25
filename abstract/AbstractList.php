<?php
namespace Abstract;

use Interface\InterfaceList;

abstract class AbstractList implements InterfaceList {
    protected $list = [];

    public function rewind()
    {
        reset($this->list);
    }

    public function current()
    {
        $value = current($this->list);
        return $value;
    }

    public function key()
    {
        $key = key($this->list);
        return $key;
    }

    public function next()
    {
        $value = next($this->list);
        return $value;
    }

    public function valid()
    {
        $key = key($this->list);
        $valid = ($key !== NULL && $key !== FALSE);
        return $valid;
    }
}
?>
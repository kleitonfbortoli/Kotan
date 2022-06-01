<?php

namespace Lib\Interface\Stack;

interface InterfaceStack {
    public function add(mixed $element);
    public function get() : mixed;
}
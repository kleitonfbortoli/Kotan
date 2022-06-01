<?php
namespace Basic;

use Exception;

abstract class Propertie {
    public function getString() {
        throw new Exception("Não é uma propriedade do tipo string", 1);
    }
    public function getInt() {
        throw new Exception("Não é uma propriedade do tipo string", 1);
    }

}
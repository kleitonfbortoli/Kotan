<?php
namespace CException;

use Exception;

class KotaSemanticExeption extends Exception {
    public function __construct(string $message = "", int $code = 0)
    {
        parent::__construct($message, $code);
    }
}
?>
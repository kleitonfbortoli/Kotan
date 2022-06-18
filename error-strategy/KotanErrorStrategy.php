<?php

namespace ErrorStrategy;

use Antlr\Antlr4\Runtime\Error\DefaultErrorStrategy;
use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
use Antlr\Antlr4\Runtime\Parser;
use Controller\ContextController;

class KotanErrorStrategy extends DefaultErrorStrategy
{
    public function reportError(Parser $recognizer, RecognitionException $e): void
    {
        ContextController::rollbackContext();
        parent::reportError($recognizer, $e);
    }
}

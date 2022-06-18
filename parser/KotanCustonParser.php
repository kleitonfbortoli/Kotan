<?php

namespace Parser;

use Antlr\Antlr4\Runtime\Parser;
use Antlr\Antlr4\Runtime\TokenStream;
use Controller\ContextController;
use Error\CustonErrorListener;
use ErrorStrategy\KotanErrorStrategy;

abstract class KotanCustonParser extends Parser {
    public function __construct(TokenStream $input)
    {
        parent::__construct($input);

        new ContextController();

        $this->errorHandler = new KotanErrorStrategy();

        $this->addErrorListener(new CustonErrorListener());
    }
}
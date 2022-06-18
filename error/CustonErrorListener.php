<?php

namespace Error;

use Antlr\Antlr4\Runtime\Atn\ATNConfigSet;
use Antlr\Antlr4\Runtime\Dfa\DFA;
use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
use Antlr\Antlr4\Runtime\Error\Listeners\BaseErrorListener;
use Antlr\Antlr4\Runtime\Parser;
use Antlr\Antlr4\Runtime\Recognizer;
use Antlr\Antlr4\Runtime\Utils\BitSet;
use Exception;

class CustonErrorListener extends BaseErrorListener {
    public function syntaxError(
        Recognizer $recognizer,
        ?object $offendingSymbol,
        int $line,
        int $charPositionInLine,
        string $msg,
        ?RecognitionException $exception,
    ): void {
        throw new Exception("{$msg} \n Line:{$line}", 1);
    }

    public function reportAmbiguity(
        Parser $recognizer,
        DFA $dfa,
        int $startIndex,
        int $stopIndex,
        bool $exact,
        ?BitSet $ambigAlts,
        ATNConfigSet $configs,
    ): void {
        echo "AmbiError";
    }

    public function reportAttemptingFullContext(
        Parser $recognizer,
        DFA $dfa,
        int $startIndex,
        int $stopIndex,
        ?BitSet $conflictingAlts,
        ATNConfigSet $configs,
    ): void {
        echo "AmbiErrorATT";
        // Do nothing by default
    }

    public function reportContextSensitivity(
        Parser $recognizer,
        DFA $dfa,
        int $startIndex,
        int $stopIndex,
        int $prediction,
        ATNConfigSet $configs,
    ): void {
        echo "AmbiErrorContex";
        // Do nothing by default
    }
}
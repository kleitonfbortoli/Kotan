<?php

require 'vendor/autoload.php';

use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\Error\Listeners\DiagnosticErrorListener;
use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Tree\ErrorNode;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\ParseTreeWalker;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;

use Gramatic\KotanLexer;
use Gramatic\KotanParser;

final class TreeShapeListener implements ParseTreeListener {
    public function visitTerminal(TerminalNode $node) : void {}
    public function visitErrorNode(ErrorNode $node) : void {}
    public function exitEveryRule(ParserRuleContext $ctx) : void {}

    public function enterEveryRule(ParserRuleContext $ctx) : void {
        echo $ctx->getText() . "\n";
    }
}
try {
    $input = InputStream::fromPath($argv[1]);
    $lexer = new KotanLexer($input);
    $tokens = new CommonTokenStream($lexer);
    $parser = new KotanParser($tokens);
    $parser->addErrorListener(new DiagnosticErrorListener());
    $parser->setBuildParseTree(true);
    $tree = $parser->prog();

    ParseTreeWalker::default()->walk(new TreeShapeListener(), $tree);
} catch(Exception $e) {
    var_dump($e->getMessage());
}
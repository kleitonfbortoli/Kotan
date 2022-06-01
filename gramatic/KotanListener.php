<?php

/*
 * Generated from Kotan.g by ANTLR 4.10.1
 */

namespace Gramatic;

	require_once 'vendor/autoload.php';

	use \Controller\ContextController;

	new ContextController();

use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;

/**
 * This interface defines a complete listener for a parse tree produced by
 * {@see KotanParser}.
 */
interface KotanListener extends ParseTreeListener {
	/**
	 * Enter a parse tree produced by {@see KotanParser::prog()}.
	 * @param $context The parse tree.
	 */
	public function enterProg(Context\ProgContext $context): void;
	/**
	 * Exit a parse tree produced by {@see KotanParser::prog()}.
	 * @param $context The parse tree.
	 */
	public function exitProg(Context\ProgContext $context): void;
	/**
	 * Enter a parse tree produced by {@see KotanParser::prog_script()}.
	 * @param $context The parse tree.
	 */
	public function enterProg_script(Context\Prog_scriptContext $context): void;
	/**
	 * Exit a parse tree produced by {@see KotanParser::prog_script()}.
	 * @param $context The parse tree.
	 */
	public function exitProg_script(Context\Prog_scriptContext $context): void;
	/**
	 * Enter a parse tree produced by {@see KotanParser::cod_block()}.
	 * @param $context The parse tree.
	 */
	public function enterCod_block(Context\Cod_blockContext $context): void;
	/**
	 * Exit a parse tree produced by {@see KotanParser::cod_block()}.
	 * @param $context The parse tree.
	 */
	public function exitCod_block(Context\Cod_blockContext $context): void;
	/**
	 * Enter a parse tree produced by {@see KotanParser::cod_script()}.
	 * @param $context The parse tree.
	 */
	public function enterCod_script(Context\Cod_scriptContext $context): void;
	/**
	 * Exit a parse tree produced by {@see KotanParser::cod_script()}.
	 * @param $context The parse tree.
	 */
	public function exitCod_script(Context\Cod_scriptContext $context): void;
	/**
	 * Enter a parse tree produced by {@see KotanParser::attr()}.
	 * @param $context The parse tree.
	 */
	public function enterAttr(Context\AttrContext $context): void;
	/**
	 * Exit a parse tree produced by {@see KotanParser::attr()}.
	 * @param $context The parse tree.
	 */
	public function exitAttr(Context\AttrContext $context): void;
	/**
	 * Enter a parse tree produced by {@see KotanParser::show()}.
	 * @param $context The parse tree.
	 */
	public function enterShow(Context\ShowContext $context): void;
	/**
	 * Exit a parse tree produced by {@see KotanParser::show()}.
	 * @param $context The parse tree.
	 */
	public function exitShow(Context\ShowContext $context): void;
	/**
	 * Enter a parse tree produced by {@see KotanParser::text_show()}.
	 * @param $context The parse tree.
	 */
	public function enterText_show(Context\Text_showContext $context): void;
	/**
	 * Exit a parse tree produced by {@see KotanParser::text_show()}.
	 * @param $context The parse tree.
	 */
	public function exitText_show(Context\Text_showContext $context): void;
	/**
	 * Enter a parse tree produced by {@see KotanParser::text_value()}.
	 * @param $context The parse tree.
	 */
	public function enterText_value(Context\Text_valueContext $context): void;
	/**
	 * Exit a parse tree produced by {@see KotanParser::text_value()}.
	 * @param $context The parse tree.
	 */
	public function exitText_value(Context\Text_valueContext $context): void;
	/**
	 * Enter a parse tree produced by {@see KotanParser::vars_def()}.
	 * @param $context The parse tree.
	 */
	public function enterVars_def(Context\Vars_defContext $context): void;
	/**
	 * Exit a parse tree produced by {@see KotanParser::vars_def()}.
	 * @param $context The parse tree.
	 */
	public function exitVars_def(Context\Vars_defContext $context): void;
	/**
	 * Enter a parse tree produced by {@see KotanParser::value_attr()}.
	 * @param $context The parse tree.
	 */
	public function enterValue_attr(Context\Value_attrContext $context): void;
	/**
	 * Exit a parse tree produced by {@see KotanParser::value_attr()}.
	 * @param $context The parse tree.
	 */
	public function exitValue_attr(Context\Value_attrContext $context): void;
	/**
	 * Enter a parse tree produced by {@see KotanParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterExpr(Context\ExprContext $context): void;
	/**
	 * Exit a parse tree produced by {@see KotanParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitExpr(Context\ExprContext $context): void;
	/**
	 * Enter a parse tree produced by {@see KotanParser::termo()}.
	 * @param $context The parse tree.
	 */
	public function enterTermo(Context\TermoContext $context): void;
	/**
	 * Exit a parse tree produced by {@see KotanParser::termo()}.
	 * @param $context The parse tree.
	 */
	public function exitTermo(Context\TermoContext $context): void;
	/**
	 * Enter a parse tree produced by {@see KotanParser::fator()}.
	 * @param $context The parse tree.
	 */
	public function enterFator(Context\FatorContext $context): void;
	/**
	 * Exit a parse tree produced by {@see KotanParser::fator()}.
	 * @param $context The parse tree.
	 */
	public function exitFator(Context\FatorContext $context): void;
}
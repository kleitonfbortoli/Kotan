<?php

/*
 * Generated from Kotan.g by ANTLR 4.10.1
 */

namespace Gramatic;

	require 'vendor/autoload.php';
	echo 100;

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
	 * Enter a parse tree produced by {@see KotanParser::const_def()}.
	 * @param $context The parse tree.
	 */
	public function enterConst_def(Context\Const_defContext $context): void;
	/**
	 * Exit a parse tree produced by {@see KotanParser::const_def()}.
	 * @param $context The parse tree.
	 */
	public function exitConst_def(Context\Const_defContext $context): void;
	/**
	 * Enter a parse tree produced by {@see KotanParser::const_attr()}.
	 * @param $context The parse tree.
	 */
	public function enterConst_attr(Context\Const_attrContext $context): void;
	/**
	 * Exit a parse tree produced by {@see KotanParser::const_attr()}.
	 * @param $context The parse tree.
	 */
	public function exitConst_attr(Context\Const_attrContext $context): void;
	/**
	 * Enter a parse tree produced by {@see KotanParser::sgvars_def()}.
	 * @param $context The parse tree.
	 */
	public function enterSgvars_def(Context\Sgvars_defContext $context): void;
	/**
	 * Exit a parse tree produced by {@see KotanParser::sgvars_def()}.
	 * @param $context The parse tree.
	 */
	public function exitSgvars_def(Context\Sgvars_defContext $context): void;
	/**
	 * Enter a parse tree produced by {@see KotanParser::gvars_def()}.
	 * @param $context The parse tree.
	 */
	public function enterGvars_def(Context\Gvars_defContext $context): void;
	/**
	 * Exit a parse tree produced by {@see KotanParser::gvars_def()}.
	 * @param $context The parse tree.
	 */
	public function exitGvars_def(Context\Gvars_defContext $context): void;
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
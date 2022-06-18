<?php

/*
 * Generated from Kotan.g by ANTLR 4.10.1
 */

namespace Gramatic;

	require_once 'vendor/autoload.php';
	use Parser\KotanCustonParser;
	use Controller\ContextController;

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
	 * Enter a parse tree produced by {@see KotanParser::numValue()}.
	 * @param $context The parse tree.
	 */
	public function enterNumValue(Context\NumValueContext $context): void;
	/**
	 * Exit a parse tree produced by {@see KotanParser::numValue()}.
	 * @param $context The parse tree.
	 */
	public function exitNumValue(Context\NumValueContext $context): void;
	/**
	 * Enter a parse tree produced by {@see KotanParser::input_int()}.
	 * @param $context The parse tree.
	 */
	public function enterInput_int(Context\Input_intContext $context): void;
	/**
	 * Exit a parse tree produced by {@see KotanParser::input_int()}.
	 * @param $context The parse tree.
	 */
	public function exitInput_int(Context\Input_intContext $context): void;
	/**
	 * Enter a parse tree produced by {@see KotanParser::var_attr()}.
	 * @param $context The parse tree.
	 */
	public function enterVar_attr(Context\Var_attrContext $context): void;
	/**
	 * Exit a parse tree produced by {@see KotanParser::var_attr()}.
	 * @param $context The parse tree.
	 */
	public function exitVar_attr(Context\Var_attrContext $context): void;
	/**
	 * Enter a parse tree produced by {@see KotanParser::var_rattr()}.
	 * @param $context The parse tree.
	 */
	public function enterVar_rattr(Context\Var_rattrContext $context): void;
	/**
	 * Exit a parse tree produced by {@see KotanParser::var_rattr()}.
	 * @param $context The parse tree.
	 */
	public function exitVar_rattr(Context\Var_rattrContext $context): void;
	/**
	 * Enter a parse tree produced by {@see KotanParser::type()}.
	 * @param $context The parse tree.
	 */
	public function enterType(Context\TypeContext $context): void;
	/**
	 * Exit a parse tree produced by {@see KotanParser::type()}.
	 * @param $context The parse tree.
	 */
	public function exitType(Context\TypeContext $context): void;
	/**
	 * Enter a parse tree produced by {@see KotanParser::var_name()}.
	 * @param $context The parse tree.
	 */
	public function enterVar_name(Context\Var_nameContext $context): void;
	/**
	 * Exit a parse tree produced by {@see KotanParser::var_name()}.
	 * @param $context The parse tree.
	 */
	public function exitVar_name(Context\Var_nameContext $context): void;
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
	/**
	 * Enter a parse tree produced by {@see KotanParser::var_value()}.
	 * @param $context The parse tree.
	 */
	public function enterVar_value(Context\Var_valueContext $context): void;
	/**
	 * Exit a parse tree produced by {@see KotanParser::var_value()}.
	 * @param $context The parse tree.
	 */
	public function exitVar_value(Context\Var_valueContext $context): void;
	/**
	 * Enter a parse tree produced by {@see KotanParser::const_value()}.
	 * @param $context The parse tree.
	 */
	public function enterConst_value(Context\Const_valueContext $context): void;
	/**
	 * Exit a parse tree produced by {@see KotanParser::const_value()}.
	 * @param $context The parse tree.
	 */
	public function exitConst_value(Context\Const_valueContext $context): void;
	/**
	 * Enter a parse tree produced by {@see KotanParser::conditional()}.
	 * @param $context The parse tree.
	 */
	public function enterConditional(Context\ConditionalContext $context): void;
	/**
	 * Exit a parse tree produced by {@see KotanParser::conditional()}.
	 * @param $context The parse tree.
	 */
	public function exitConditional(Context\ConditionalContext $context): void;
	/**
	 * Enter a parse tree produced by {@see KotanParser::condition()}.
	 * @param $context The parse tree.
	 */
	public function enterCondition(Context\ConditionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see KotanParser::condition()}.
	 * @param $context The parse tree.
	 */
	public function exitCondition(Context\ConditionContext $context): void;
	/**
	 * Enter a parse tree produced by {@see KotanParser::laco()}.
	 * @param $context The parse tree.
	 */
	public function enterLaco(Context\LacoContext $context): void;
	/**
	 * Exit a parse tree produced by {@see KotanParser::laco()}.
	 * @param $context The parse tree.
	 */
	public function exitLaco(Context\LacoContext $context): void;
	/**
	 * Enter a parse tree produced by {@see KotanParser::logic_stat()}.
	 * @param $context The parse tree.
	 */
	public function enterLogic_stat(Context\Logic_statContext $context): void;
	/**
	 * Exit a parse tree produced by {@see KotanParser::logic_stat()}.
	 * @param $context The parse tree.
	 */
	public function exitLogic_stat(Context\Logic_statContext $context): void;
}
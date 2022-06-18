<?php

/*
 * Generated from Kotan.g by ANTLR 4.10.1
 */

namespace Gramatic {

	require_once 'vendor/autoload.php';
	use Parser\KotanCustonParser;
	use Controller\ContextController;

	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\ParserATNSimulator;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Error\Exceptions\FailedPredicateException;
	use Antlr\Antlr4\Runtime\Error\Exceptions\NoViableAltException;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\TokenStream;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\VocabularyImpl;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\Parser;

	final class KotanParser extends KotanCustonParser
	{
		public const T__0 = 1, T__1 = 2, T__2 = 3, T__3 = 4, T__4 = 5, T__5 = 6, 
               T_Eq = 7, T_NEq = 8, T_BoEq = 9, T_LoEq = 10, T_Big = 11, 
               T_Low = 12, T_And = 13, T_Or = 14, T_Let = 15, T_Var = 16, 
               T_Type = 17, T_PVirg = 18, T_Attr = 19, T_OP = 20, T_CP = 21, 
               T_OC = 22, T_CC = 23, T_Soma = 24, T_Sub = 25, T_Mult = 26, 
               T_Div = 27, T_Num = 28, T_Const = 29, T_Text = 30, T_Blank = 31;

		public const RULE_prog = 0, RULE_cod_script = 1, RULE_show = 2, RULE_text_value = 3, 
               RULE_numValue = 4, RULE_input_int = 5, RULE_var_attr = 6, 
               RULE_var_rattr = 7, RULE_type = 8, RULE_var_name = 9, RULE_value_attr = 10, 
               RULE_expr = 11, RULE_termo = 12, RULE_fator = 13, RULE_var_value = 14, 
               RULE_const_value = 15, RULE_conditional = 16, RULE_condition = 17, 
               RULE_laco = 18, RULE_logic_stat = 19;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'prog', 'cod_script', 'show', 'text_value', 'numValue', 'input_int', 
			'var_attr', 'var_rattr', 'type', 'var_name', 'value_attr', 'expr', 'termo', 
			'fator', 'var_value', 'const_value', 'conditional', 'condition', 'laco', 
			'logic_stat'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'PROGRAM START'", "'PROGRAM END'", "'SHOW'", "'InputInt'", 
		    "'IF'", "'WHILE'", "'=='", "'!='", "'=>'", "'=<'", "'>'", "'<'", "'AND'", 
		    "'OR'", "'let'", null, null, "';'", "'='", "'('", "')'", "'{'", "'}'", 
		    "'+'", "'-'", "'*'", "'/'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, null, null, null, null, null, null, "T_Eq", "T_NEq", "T_BoEq", 
		    "T_LoEq", "T_Big", "T_Low", "T_And", "T_Or", "T_Let", "T_Var", "T_Type", 
		    "T_PVirg", "T_Attr", "T_OP", "T_CP", "T_OC", "T_CC", "T_Soma", "T_Sub", 
		    "T_Mult", "T_Div", "T_Num", "T_Const", "T_Text", "T_Blank"
		];

		private const SERIALIZED_ATN =
			[4, 1, 31, 188, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 7, 
		    14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 2, 18, 7, 18, 2, 19, 
		    7, 19, 1, 0, 1, 0, 4, 0, 43, 8, 0, 11, 0, 12, 0, 44, 1, 0, 1, 0, 1, 
		    1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 1, 54, 8, 1, 1, 2, 1, 2, 1, 2, 1, 2, 
		    3, 2, 60, 8, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 3, 1, 3, 1, 3, 1, 4, 1, 
		    4, 1, 4, 1, 5, 1, 5, 1, 5, 1, 5, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 
		    6, 1, 7, 1, 7, 1, 7, 1, 7, 1, 7, 1, 8, 1, 8, 1, 9, 1, 9, 1, 9, 1, 
		    10, 1, 10, 1, 10, 1, 11, 1, 11, 1, 11, 1, 11, 1, 11, 3, 11, 100, 8, 
		    11, 1, 11, 1, 11, 1, 11, 5, 11, 105, 8, 11, 10, 11, 12, 11, 108, 9, 
		    11, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 5, 12, 117, 8, 
		    12, 10, 12, 12, 12, 120, 9, 12, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 
		    1, 13, 1, 13, 1, 13, 3, 13, 130, 8, 13, 1, 14, 1, 14, 1, 14, 1, 15, 
		    1, 15, 1, 15, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 4, 16, 144, 
		    8, 16, 11, 16, 12, 16, 145, 1, 16, 1, 16, 1, 17, 1, 17, 1, 17, 1, 
		    17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 
		    3, 17, 163, 8, 17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 
		    3, 17, 172, 8, 17, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 4, 18, 
		    180, 8, 18, 11, 18, 12, 18, 181, 1, 18, 1, 18, 1, 19, 1, 19, 1, 19, 
		    0, 0, 20, 0, 2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24, 26, 28, 30, 
		    32, 34, 36, 38, 0, 1, 1, 0, 13, 14, 188, 0, 40, 1, 0, 0, 0, 2, 53, 
		    1, 0, 0, 0, 4, 55, 1, 0, 0, 0, 6, 65, 1, 0, 0, 0, 8, 68, 1, 0, 0, 
		    0, 10, 71, 1, 0, 0, 0, 12, 75, 1, 0, 0, 0, 14, 81, 1, 0, 0, 0, 16, 
		    86, 1, 0, 0, 0, 18, 88, 1, 0, 0, 0, 20, 91, 1, 0, 0, 0, 22, 94, 1, 
		    0, 0, 0, 24, 109, 1, 0, 0, 0, 26, 129, 1, 0, 0, 0, 28, 131, 1, 0, 
		    0, 0, 30, 134, 1, 0, 0, 0, 32, 137, 1, 0, 0, 0, 34, 171, 1, 0, 0, 
		    0, 36, 173, 1, 0, 0, 0, 38, 185, 1, 0, 0, 0, 40, 42, 5, 1, 0, 0, 41, 
		    43, 3, 2, 1, 0, 42, 41, 1, 0, 0, 0, 43, 44, 1, 0, 0, 0, 44, 42, 1, 
		    0, 0, 0, 44, 45, 1, 0, 0, 0, 45, 46, 1, 0, 0, 0, 46, 47, 5, 2, 0, 
		    0, 47, 1, 1, 0, 0, 0, 48, 54, 3, 12, 6, 0, 49, 54, 3, 14, 7, 0, 50, 
		    54, 3, 4, 2, 0, 51, 54, 3, 32, 16, 0, 52, 54, 3, 36, 18, 0, 53, 48, 
		    1, 0, 0, 0, 53, 49, 1, 0, 0, 0, 53, 50, 1, 0, 0, 0, 53, 51, 1, 0, 
		    0, 0, 53, 52, 1, 0, 0, 0, 54, 3, 1, 0, 0, 0, 55, 56, 5, 3, 0, 0, 56, 
		    59, 5, 20, 0, 0, 57, 60, 3, 6, 3, 0, 58, 60, 3, 22, 11, 0, 59, 57, 
		    1, 0, 0, 0, 59, 58, 1, 0, 0, 0, 60, 61, 1, 0, 0, 0, 61, 62, 5, 21, 
		    0, 0, 62, 63, 1, 0, 0, 0, 63, 64, 5, 18, 0, 0, 64, 5, 1, 0, 0, 0, 
		    65, 66, 5, 30, 0, 0, 66, 67, 6, 3, -1, 0, 67, 7, 1, 0, 0, 0, 68, 69, 
		    5, 28, 0, 0, 69, 70, 6, 4, -1, 0, 70, 9, 1, 0, 0, 0, 71, 72, 5, 4, 
		    0, 0, 72, 73, 5, 20, 0, 0, 73, 74, 5, 21, 0, 0, 74, 11, 1, 0, 0, 0, 
		    75, 76, 5, 15, 0, 0, 76, 77, 3, 18, 9, 0, 77, 78, 5, 19, 0, 0, 78, 
		    79, 3, 20, 10, 0, 79, 80, 5, 18, 0, 0, 80, 13, 1, 0, 0, 0, 81, 82, 
		    3, 18, 9, 0, 82, 83, 5, 19, 0, 0, 83, 84, 3, 22, 11, 0, 84, 85, 5, 
		    18, 0, 0, 85, 15, 1, 0, 0, 0, 86, 87, 5, 17, 0, 0, 87, 17, 1, 0, 0, 
		    0, 88, 89, 5, 16, 0, 0, 89, 90, 6, 9, -1, 0, 90, 19, 1, 0, 0, 0, 91, 
		    92, 5, 28, 0, 0, 92, 93, 6, 10, -1, 0, 93, 21, 1, 0, 0, 0, 94, 106, 
		    3, 24, 12, 0, 95, 96, 5, 24, 0, 0, 96, 100, 6, 11, -1, 0, 97, 98, 
		    5, 25, 0, 0, 98, 100, 6, 11, -1, 0, 99, 95, 1, 0, 0, 0, 99, 97, 1, 
		    0, 0, 0, 100, 101, 1, 0, 0, 0, 101, 102, 3, 24, 12, 0, 102, 103, 6, 
		    11, -1, 0, 103, 105, 1, 0, 0, 0, 104, 99, 1, 0, 0, 0, 105, 108, 1, 
		    0, 0, 0, 106, 104, 1, 0, 0, 0, 106, 107, 1, 0, 0, 0, 107, 23, 1, 0, 
		    0, 0, 108, 106, 1, 0, 0, 0, 109, 118, 3, 26, 13, 0, 110, 111, 5, 26, 
		    0, 0, 111, 112, 6, 12, -1, 0, 112, 113, 1, 0, 0, 0, 113, 114, 3, 26, 
		    13, 0, 114, 115, 6, 12, -1, 0, 115, 117, 1, 0, 0, 0, 116, 110, 1, 
		    0, 0, 0, 117, 120, 1, 0, 0, 0, 118, 116, 1, 0, 0, 0, 118, 119, 1, 
		    0, 0, 0, 119, 25, 1, 0, 0, 0, 120, 118, 1, 0, 0, 0, 121, 130, 3, 28, 
		    14, 0, 122, 130, 3, 10, 5, 0, 123, 130, 3, 30, 15, 0, 124, 130, 3, 
		    8, 4, 0, 125, 126, 5, 20, 0, 0, 126, 127, 3, 22, 11, 0, 127, 128, 
		    5, 21, 0, 0, 128, 130, 1, 0, 0, 0, 129, 121, 1, 0, 0, 0, 129, 122, 
		    1, 0, 0, 0, 129, 123, 1, 0, 0, 0, 129, 124, 1, 0, 0, 0, 129, 125, 
		    1, 0, 0, 0, 130, 27, 1, 0, 0, 0, 131, 132, 5, 16, 0, 0, 132, 133, 
		    6, 14, -1, 0, 133, 29, 1, 0, 0, 0, 134, 135, 5, 29, 0, 0, 135, 136, 
		    6, 15, -1, 0, 136, 31, 1, 0, 0, 0, 137, 138, 5, 5, 0, 0, 138, 139, 
		    5, 20, 0, 0, 139, 140, 3, 34, 17, 0, 140, 141, 5, 21, 0, 0, 141, 143, 
		    5, 22, 0, 0, 142, 144, 3, 2, 1, 0, 143, 142, 1, 0, 0, 0, 144, 145, 
		    1, 0, 0, 0, 145, 143, 1, 0, 0, 0, 145, 146, 1, 0, 0, 0, 146, 147, 
		    1, 0, 0, 0, 147, 148, 5, 23, 0, 0, 148, 33, 1, 0, 0, 0, 149, 162, 
		    3, 22, 11, 0, 150, 151, 5, 7, 0, 0, 151, 163, 6, 17, -1, 0, 152, 153, 
		    5, 8, 0, 0, 153, 163, 6, 17, -1, 0, 154, 155, 5, 9, 0, 0, 155, 163, 
		    6, 17, -1, 0, 156, 157, 5, 10, 0, 0, 157, 163, 6, 17, -1, 0, 158, 
		    159, 5, 11, 0, 0, 159, 163, 6, 17, -1, 0, 160, 161, 5, 12, 0, 0, 161, 
		    163, 6, 17, -1, 0, 162, 150, 1, 0, 0, 0, 162, 152, 1, 0, 0, 0, 162, 
		    154, 1, 0, 0, 0, 162, 156, 1, 0, 0, 0, 162, 158, 1, 0, 0, 0, 162, 
		    160, 1, 0, 0, 0, 163, 164, 1, 0, 0, 0, 164, 165, 3, 22, 11, 0, 165, 
		    166, 6, 17, -1, 0, 166, 172, 1, 0, 0, 0, 167, 168, 5, 20, 0, 0, 168, 
		    169, 3, 34, 17, 0, 169, 170, 5, 21, 0, 0, 170, 172, 1, 0, 0, 0, 171, 
		    149, 1, 0, 0, 0, 171, 167, 1, 0, 0, 0, 172, 35, 1, 0, 0, 0, 173, 174, 
		    5, 6, 0, 0, 174, 175, 5, 20, 0, 0, 175, 176, 3, 34, 17, 0, 176, 177, 
		    5, 21, 0, 0, 177, 179, 5, 22, 0, 0, 178, 180, 3, 2, 1, 0, 179, 178, 
		    1, 0, 0, 0, 180, 181, 1, 0, 0, 0, 181, 179, 1, 0, 0, 0, 181, 182, 
		    1, 0, 0, 0, 182, 183, 1, 0, 0, 0, 183, 184, 5, 23, 0, 0, 184, 37, 
		    1, 0, 0, 0, 185, 186, 7, 0, 0, 0, 186, 39, 1, 0, 0, 0, 11, 44, 53, 
		    59, 99, 106, 118, 129, 145, 162, 171, 181];
		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;

		public function __construct(TokenStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new ParserATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
		}

		private static function initialize(): void
		{
			if (self::$atn !== null) {
				return;
			}

			RuntimeMetaData::checkVersion('4.10.1', RuntimeMetaData::VERSION);

			$atn = (new ATNDeserializer())->deserialize(self::SERIALIZED_ATN);

			$decisionToDFA = [];
			for ($i = 0, $count = $atn->getNumberOfDecisions(); $i < $count; $i++) {
				$decisionToDFA[] = new DFA($atn->getDecisionState($i), $i);
			}

			self::$atn = $atn;
			self::$decisionToDFA = $decisionToDFA;
			self::$sharedContextCache = new PredictionContextCache();
		}

		public function getGrammarFileName(): string
		{
			return "Kotan.g";
		}

		public function getRuleNames(): array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN(): array
		{
			return self::SERIALIZED_ATN;
		}

		public function getATN(): ATN
		{
			return self::$atn;
		}

		public function getVocabulary(): Vocabulary
        {
            static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
        }

		/**
		 * @throws RecognitionException
		 */
		public function prog(): Context\ProgContext
		{
		    $localContext = new Context\ProgContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 0, self::RULE_prog);
		    ContextController::startContext("Program");

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(40);
		        $this->match(self::T__0);
		        $this->setState(42); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(41);
		        	$this->cod_script();
		        	$this->setState(44); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::T__2) | (1 << self::T__4) | (1 << self::T__5) | (1 << self::T_Let) | (1 << self::T_Var))) !== 0));
		        $this->setState(46);
		        $this->match(self::T__1);
		        $this->ctx->stop = $this->input->LT(-1);
		        ContextController::endContext();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function cod_script(): Context\Cod_scriptContext
		{
		    $localContext = new Context\Cod_scriptContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 2, self::RULE_cod_script);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(53);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T_Let:
		            	$this->setState(48);
		            	$this->var_attr();
		            	break;

		            case self::T_Var:
		            	$this->setState(49);
		            	$this->var_rattr();
		            	break;

		            case self::T__2:
		            	$this->setState(50);
		            	$this->show();
		            	break;

		            case self::T__4:
		            	$this->setState(51);
		            	$this->conditional();
		            	break;

		            case self::T__5:
		            	$this->setState(52);
		            	$this->laco();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function show(): Context\ShowContext
		{
		    $localContext = new Context\ShowContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_show);
		    ContextController::startContext("Show");

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(55);
		        $this->match(self::T__2);

		        $this->setState(56);
		        $this->match(self::T_OP);
		        $this->setState(59);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T_Text:
		            	$this->setState(57);
		            	$this->text_value();
		            	break;

		            case self::T__3:
		            case self::T_Var:
		            case self::T_OP:
		            case self::T_Num:
		            case self::T_Const:
		            	$this->setState(58);
		            	$this->expr();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		        $this->setState(61);
		        $this->match(self::T_CP);
		        $this->setState(63);
		        $this->match(self::T_PVirg);
		        $this->ctx->stop = $this->input->LT(-1);
		        ContextController::endContext();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function text_value(): Context\Text_valueContext
		{
		    $localContext = new Context\Text_valueContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 6, self::RULE_text_value);
		    ContextController::startContext("String");

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(65);
		        $this->match(self::T_Text);
		        ContextController::setValue($localContext->getText());
		        $this->ctx->stop = $this->input->LT(-1);
		        ContextController::endContext();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function numValue(): Context\NumValueContext
		{
		    $localContext = new Context\NumValueContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 8, self::RULE_numValue);
		    ContextController::startContext("Num");

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(68);
		        $this->match(self::T_Num);
		        ContextController::setValue($localContext->getText());
		        $this->ctx->stop = $this->input->LT(-1);
		        ContextController::endContext();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function input_int(): Context\Input_intContext
		{
		    $localContext = new Context\Input_intContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 10, self::RULE_input_int);
		    ContextController::startContext("InputInt");

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(71);
		        $this->match(self::T__3);
		        $this->setState(72);
		        $this->match(self::T_OP);
		        $this->setState(73);
		        $this->match(self::T_CP);
		        $this->ctx->stop = $this->input->LT(-1);
		        ContextController::endContext();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function var_attr(): Context\Var_attrContext
		{
		    $localContext = new Context\Var_attrContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 12, self::RULE_var_attr);
		    ContextController::startContext("Assignment");

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(75);
		        $this->match(self::T_Let);
		        $this->setState(76);
		        $this->var_name();
		        $this->setState(77);
		        $this->match(self::T_Attr);
		        $this->setState(78);
		        $this->value_attr();
		        $this->setState(79);
		        $this->match(self::T_PVirg);
		        $this->ctx->stop = $this->input->LT(-1);
		        ContextController::endContext();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function var_rattr(): Context\Var_rattrContext
		{
		    $localContext = new Context\Var_rattrContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 14, self::RULE_var_rattr);
		    ContextController::startContext("ReAssignment");

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(81);
		        $this->var_name();
		        $this->setState(82);
		        $this->match(self::T_Attr);
		        $this->setState(83);
		        $this->expr();
		        $this->setState(84);
		        $this->match(self::T_PVirg);
		        $this->ctx->stop = $this->input->LT(-1);
		        ContextController::endContext();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function type(): Context\TypeContext
		{
		    $localContext = new Context\TypeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 16, self::RULE_type);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(86);
		        $this->match(self::T_Type);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function var_name(): Context\Var_nameContext
		{
		    $localContext = new Context\Var_nameContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 18, self::RULE_var_name);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(88);
		        $this->match(self::T_Var);
		        ContextController::setName($localContext->getText());
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function value_attr(): Context\Value_attrContext
		{
		    $localContext = new Context\Value_attrContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 20, self::RULE_value_attr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(91);
		        $this->match(self::T_Num);
		        ContextController::setValue($localContext->getText());
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expr(): Context\ExprContext
		{
		    $localContext = new Context\ExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 22, self::RULE_expr);
		    ContextController::startContext("Expression");

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(94);
		        $this->termo();
		        $this->setState(106);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T_Soma || $_la === self::T_Sub) {
		        	$this->setState(99);
		        	$this->errorHandler->sync($this);

		        	switch ($this->input->LA(1)) {
		        	    case self::T_Soma:
		        	    	$this->setState(95);
		        	    	$this->match(self::T_Soma);
		        	    	$context_operator = "Sum";
		        	    	break;

		        	    case self::T_Sub:
		        	    	$this->setState(97);
		        	    	$this->match(self::T_Sub);
		        	    	$context_operator = "Subtraction";
		        	    	break;

		        	default:
		        		throw new NoViableAltException($this);
		        	}
		        	$this->setState(101);
		        	$this->termo();
		        	ContextController::shortContext($context_operator);
		        	$this->setState(108);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->ctx->stop = $this->input->LT(-1);
		        ContextController::endContext();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function termo(): Context\TermoContext
		{
		    $localContext = new Context\TermoContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 24, self::RULE_termo);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(109);
		        $this->fator();
		        $this->setState(118);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T_Mult) {
		        	$this->setState(110);
		        	$this->match(self::T_Mult);
		        	$context_operator = "Multiplication";
		        	$this->setState(113);
		        	$this->fator();
		        	ContextController::shortContext($context_operator);
		        	$this->setState(120);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function fator(): Context\FatorContext
		{
		    $localContext = new Context\FatorContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 26, self::RULE_fator);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(129);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T_Var:
		            	$this->setState(121);
		            	$this->var_value();
		            	break;

		            case self::T__3:
		            	$this->setState(122);
		            	$this->input_int();
		            	break;

		            case self::T_Const:
		            	$this->setState(123);
		            	$this->const_value();
		            	break;

		            case self::T_Num:
		            	$this->setState(124);
		            	$this->numValue();
		            	break;

		            case self::T_OP:
		            	$this->setState(125);
		            	$this->match(self::T_OP);
		            	$this->setState(126);
		            	$this->expr();
		            	$this->setState(127);
		            	$this->match(self::T_CP);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function var_value(): Context\Var_valueContext
		{
		    $localContext = new Context\Var_valueContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 28, self::RULE_var_value);
		    ContextController::startContext("Var");

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(131);
		        $this->match(self::T_Var);
		        ContextController::setValue($localContext->getText());
		        $this->ctx->stop = $this->input->LT(-1);
		        ContextController::endContext();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function const_value(): Context\Const_valueContext
		{
		    $localContext = new Context\Const_valueContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 30, self::RULE_const_value);
		    ContextController::startContext("Var");

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(134);
		        $this->match(self::T_Const);
		        ContextController::setValue($localContext->getText());
		        $this->ctx->stop = $this->input->LT(-1);
		        ContextController::endContext();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function conditional(): Context\ConditionalContext
		{
		    $localContext = new Context\ConditionalContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 32, self::RULE_conditional);
		    ContextController::startContext("Conditional");

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(137);
		        $this->match(self::T__4);
		        $this->setState(138);
		        $this->match(self::T_OP);
		        $this->setState(139);
		        $this->condition();
		        $this->setState(140);
		        $this->match(self::T_CP);
		        $this->setState(141);
		        $this->match(self::T_OC);
		        $this->setState(143); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(142);
		        	$this->cod_script();
		        	$this->setState(145); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::T__2) | (1 << self::T__4) | (1 << self::T__5) | (1 << self::T_Let) | (1 << self::T_Var))) !== 0));
		        $this->setState(147);
		        $this->match(self::T_CC);
		        $this->ctx->stop = $this->input->LT(-1);
		        ContextController::endContext();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function condition(): Context\ConditionContext
		{
		    $localContext = new Context\ConditionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 34, self::RULE_condition);
		    ContextController::startContext("Condition");

		    try {
		        $this->setState(171);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 9, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(149);
		        	    $this->expr();
		        	    $this->setState(162);
		        	    $this->errorHandler->sync($this);

		        	    switch ($this->input->LA(1)) {
		        	        case self::T_Eq:
		        	        	$this->setState(150);
		        	        	$this->match(self::T_Eq);
		        	        	$logicalOperator = 'Equal';
		        	        	break;

		        	        case self::T_NEq:
		        	        	$this->setState(152);
		        	        	$this->match(self::T_NEq);
		        	        	$logicalOperator = 'NotEqual';
		        	        	break;

		        	        case self::T_BoEq:
		        	        	$this->setState(154);
		        	        	$this->match(self::T_BoEq);
		        	        	$logicalOperator = 'BigOrEqual';
		        	        	break;

		        	        case self::T_LoEq:
		        	        	$this->setState(156);
		        	        	$this->match(self::T_LoEq);
		        	        	$logicalOperator = 'LowOrEqual';
		        	        	break;

		        	        case self::T_Big:
		        	        	$this->setState(158);
		        	        	$this->match(self::T_Big);
		        	        	$logicalOperator = 'Big';
		        	        	break;

		        	        case self::T_Low:
		        	        	$this->setState(160);
		        	        	$this->match(self::T_Low);
		        	        	$logicalOperator = 'Low';
		        	        	break;

		        	    default:
		        	    	throw new NoViableAltException($this);
		        	    }
		        	    $this->setState(164);
		        	    $this->expr();
		        	    ContextController::setLogicalOperator($logicalOperator);
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(167);
		        	    $this->match(self::T_OP);
		        	    $this->setState(168);
		        	    $this->condition();
		        	    $this->setState(169);
		        	    $this->match(self::T_CP);
		        	break;
		        }
		        $this->ctx->stop = $this->input->LT(-1);
		        ContextController::endContext();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function laco(): Context\LacoContext
		{
		    $localContext = new Context\LacoContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 36, self::RULE_laco);
		    ContextController::startContext("Laco");

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(173);
		        $this->match(self::T__5);
		        $this->setState(174);
		        $this->match(self::T_OP);
		        $this->setState(175);
		        $this->condition();
		        $this->setState(176);
		        $this->match(self::T_CP);
		        $this->setState(177);
		        $this->match(self::T_OC);
		        $this->setState(179); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(178);
		        	$this->cod_script();
		        	$this->setState(181); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::T__2) | (1 << self::T__4) | (1 << self::T__5) | (1 << self::T_Let) | (1 << self::T_Var))) !== 0));
		        $this->setState(183);
		        $this->match(self::T_CC);
		        $this->ctx->stop = $this->input->LT(-1);
		        ContextController::endContext();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function logic_stat(): Context\Logic_statContext
		{
		    $localContext = new Context\Logic_statContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 38, self::RULE_logic_stat);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(185);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::T_And || $_la === self::T_Or)) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}
	}
}

namespace Gramatic\Context {
	use Antlr\Antlr4\Runtime\ParserRuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;
	use Antlr\Antlr4\Runtime\Tree\TerminalNode;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
	use Gramatic\KotanParser;
	use Gramatic\KotanListener;

	class ProgContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return KotanParser::RULE_prog;
	    }

	    /**
	     * @return array<Cod_scriptContext>|Cod_scriptContext|null
	     */
	    public function cod_script(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(Cod_scriptContext::class);
	    	}

	        return $this->getTypedRuleContext(Cod_scriptContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->enterProg($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->exitProg($this);
		    }
		}
	} 

	class Cod_scriptContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return KotanParser::RULE_cod_script;
	    }

	    public function var_attr(): ?Var_attrContext
	    {
	    	return $this->getTypedRuleContext(Var_attrContext::class, 0);
	    }

	    public function var_rattr(): ?Var_rattrContext
	    {
	    	return $this->getTypedRuleContext(Var_rattrContext::class, 0);
	    }

	    public function show(): ?ShowContext
	    {
	    	return $this->getTypedRuleContext(ShowContext::class, 0);
	    }

	    public function conditional(): ?ConditionalContext
	    {
	    	return $this->getTypedRuleContext(ConditionalContext::class, 0);
	    }

	    public function laco(): ?LacoContext
	    {
	    	return $this->getTypedRuleContext(LacoContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->enterCod_script($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->exitCod_script($this);
		    }
		}
	} 

	class ShowContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return KotanParser::RULE_show;
	    }

	    public function T_PVirg(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_PVirg, 0);
	    }

	    public function T_OP(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_OP, 0);
	    }

	    public function T_CP(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_CP, 0);
	    }

	    public function text_value(): ?Text_valueContext
	    {
	    	return $this->getTypedRuleContext(Text_valueContext::class, 0);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->enterShow($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->exitShow($this);
		    }
		}
	} 

	class Text_valueContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return KotanParser::RULE_text_value;
	    }

	    public function T_Text(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_Text, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->enterText_value($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->exitText_value($this);
		    }
		}
	} 

	class NumValueContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return KotanParser::RULE_numValue;
	    }

	    public function T_Num(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_Num, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->enterNumValue($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->exitNumValue($this);
		    }
		}
	} 

	class Input_intContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return KotanParser::RULE_input_int;
	    }

	    public function T_OP(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_OP, 0);
	    }

	    public function T_CP(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_CP, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->enterInput_int($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->exitInput_int($this);
		    }
		}
	} 

	class Var_attrContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return KotanParser::RULE_var_attr;
	    }

	    public function T_Let(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_Let, 0);
	    }

	    public function var_name(): ?Var_nameContext
	    {
	    	return $this->getTypedRuleContext(Var_nameContext::class, 0);
	    }

	    public function T_Attr(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_Attr, 0);
	    }

	    public function value_attr(): ?Value_attrContext
	    {
	    	return $this->getTypedRuleContext(Value_attrContext::class, 0);
	    }

	    public function T_PVirg(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_PVirg, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->enterVar_attr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->exitVar_attr($this);
		    }
		}
	} 

	class Var_rattrContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return KotanParser::RULE_var_rattr;
	    }

	    public function var_name(): ?Var_nameContext
	    {
	    	return $this->getTypedRuleContext(Var_nameContext::class, 0);
	    }

	    public function T_Attr(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_Attr, 0);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

	    public function T_PVirg(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_PVirg, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->enterVar_rattr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->exitVar_rattr($this);
		    }
		}
	} 

	class TypeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return KotanParser::RULE_type;
	    }

	    public function T_Type(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_Type, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->enterType($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->exitType($this);
		    }
		}
	} 

	class Var_nameContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return KotanParser::RULE_var_name;
	    }

	    public function T_Var(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_Var, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->enterVar_name($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->exitVar_name($this);
		    }
		}
	} 

	class Value_attrContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return KotanParser::RULE_value_attr;
	    }

	    public function T_Num(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_Num, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->enterValue_attr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->exitValue_attr($this);
		    }
		}
	} 

	class ExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return KotanParser::RULE_expr;
	    }

	    /**
	     * @return array<TermoContext>|TermoContext|null
	     */
	    public function termo(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(TermoContext::class);
	    	}

	        return $this->getTypedRuleContext(TermoContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function T_Soma(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(KotanParser::T_Soma);
	    	}

	        return $this->getToken(KotanParser::T_Soma, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function T_Sub(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(KotanParser::T_Sub);
	    	}

	        return $this->getToken(KotanParser::T_Sub, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->enterExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->exitExpr($this);
		    }
		}
	} 

	class TermoContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return KotanParser::RULE_termo;
	    }

	    /**
	     * @return array<FatorContext>|FatorContext|null
	     */
	    public function fator(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(FatorContext::class);
	    	}

	        return $this->getTypedRuleContext(FatorContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function T_Mult(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(KotanParser::T_Mult);
	    	}

	        return $this->getToken(KotanParser::T_Mult, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->enterTermo($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->exitTermo($this);
		    }
		}
	} 

	class FatorContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return KotanParser::RULE_fator;
	    }

	    public function var_value(): ?Var_valueContext
	    {
	    	return $this->getTypedRuleContext(Var_valueContext::class, 0);
	    }

	    public function input_int(): ?Input_intContext
	    {
	    	return $this->getTypedRuleContext(Input_intContext::class, 0);
	    }

	    public function const_value(): ?Const_valueContext
	    {
	    	return $this->getTypedRuleContext(Const_valueContext::class, 0);
	    }

	    public function numValue(): ?NumValueContext
	    {
	    	return $this->getTypedRuleContext(NumValueContext::class, 0);
	    }

	    public function T_OP(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_OP, 0);
	    }

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
	    }

	    public function T_CP(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_CP, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->enterFator($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->exitFator($this);
		    }
		}
	} 

	class Var_valueContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return KotanParser::RULE_var_value;
	    }

	    public function T_Var(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_Var, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->enterVar_value($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->exitVar_value($this);
		    }
		}
	} 

	class Const_valueContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return KotanParser::RULE_const_value;
	    }

	    public function T_Const(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_Const, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->enterConst_value($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->exitConst_value($this);
		    }
		}
	} 

	class ConditionalContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return KotanParser::RULE_conditional;
	    }

	    public function T_OP(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_OP, 0);
	    }

	    public function condition(): ?ConditionContext
	    {
	    	return $this->getTypedRuleContext(ConditionContext::class, 0);
	    }

	    public function T_CP(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_CP, 0);
	    }

	    public function T_OC(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_OC, 0);
	    }

	    public function T_CC(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_CC, 0);
	    }

	    /**
	     * @return array<Cod_scriptContext>|Cod_scriptContext|null
	     */
	    public function cod_script(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(Cod_scriptContext::class);
	    	}

	        return $this->getTypedRuleContext(Cod_scriptContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->enterConditional($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->exitConditional($this);
		    }
		}
	} 

	class ConditionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return KotanParser::RULE_condition;
	    }

	    /**
	     * @return array<ExprContext>|ExprContext|null
	     */
	    public function expr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExprContext::class);
	    	}

	        return $this->getTypedRuleContext(ExprContext::class, $index);
	    }

	    public function T_Eq(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_Eq, 0);
	    }

	    public function T_NEq(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_NEq, 0);
	    }

	    public function T_BoEq(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_BoEq, 0);
	    }

	    public function T_LoEq(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_LoEq, 0);
	    }

	    public function T_Big(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_Big, 0);
	    }

	    public function T_Low(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_Low, 0);
	    }

	    public function T_OP(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_OP, 0);
	    }

	    public function condition(): ?ConditionContext
	    {
	    	return $this->getTypedRuleContext(ConditionContext::class, 0);
	    }

	    public function T_CP(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_CP, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->enterCondition($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->exitCondition($this);
		    }
		}
	} 

	class LacoContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return KotanParser::RULE_laco;
	    }

	    public function T_OP(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_OP, 0);
	    }

	    public function condition(): ?ConditionContext
	    {
	    	return $this->getTypedRuleContext(ConditionContext::class, 0);
	    }

	    public function T_CP(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_CP, 0);
	    }

	    public function T_OC(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_OC, 0);
	    }

	    public function T_CC(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_CC, 0);
	    }

	    /**
	     * @return array<Cod_scriptContext>|Cod_scriptContext|null
	     */
	    public function cod_script(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(Cod_scriptContext::class);
	    	}

	        return $this->getTypedRuleContext(Cod_scriptContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->enterLaco($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->exitLaco($this);
		    }
		}
	} 

	class Logic_statContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return KotanParser::RULE_logic_stat;
	    }

	    public function T_And(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_And, 0);
	    }

	    public function T_Or(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_Or, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->enterLogic_stat($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->exitLogic_stat($this);
		    }
		}
	} 
}
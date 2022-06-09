<?php

/*
 * Generated from Kotan.g by ANTLR 4.10.1
 */

namespace Gramatic {

require_once 'vendor/autoload.php';
use Parser\KotanCustonParser;
use \Controller\ContextController;

new ContextController();

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
               T__6 = 7, T_Var = 8, T_Type = 9, T_PVirg = 10, T_Attr = 11, 
               T_OP = 12, T_CP = 13, T_Soma = 14, T_Sub = 15, T_Mult = 16, 
               T_Div = 17, T_Num = 18, T_Const = 19, T_Text = 20, T_Blank = 21;

		public const RULE_prog = 0, RULE_prog_script = 1, RULE_cod_block = 2, 
               RULE_cod_script = 3, RULE_attr = 4, RULE_show = 5, RULE_text_value = 6, 
               RULE_numValue = 7, RULE_vars_def = 8, RULE_value_attr = 9, 
               RULE_expr = 10, RULE_termo = 11, RULE_fator = 12;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'prog', 'prog_script', 'cod_block', 'cod_script', 'attr', 'show', 'text_value', 
			'numValue', 'vars_def', 'value_attr', 'expr', 'termo', 'fator'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'PROGRAM START'", "'PROGRAM END'", "'COD START'", "'COD END'", 
		    "'SHOW'", "'VARS START'", "'VARS END'", null, null, "';'", "'='", 
		    "'('", "')'", "'+'", "'-'", "'*'", "'/'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, null, null, null, null, null, null, null, "T_Var", "T_Type", 
		    "T_PVirg", "T_Attr", "T_OP", "T_CP", "T_Soma", "T_Sub", "T_Mult", 
		    "T_Div", "T_Num", "T_Const", "T_Text", "T_Blank"
		];

		private const SERIALIZED_ATN =
			[4, 1, 21, 133, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 1, 0, 1, 0, 1, 0, 1, 0, 
		    1, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 2, 1, 2, 4, 2, 38, 8, 2, 11, 2, 12, 
		    2, 39, 1, 2, 1, 2, 1, 3, 1, 3, 3, 3, 46, 8, 3, 1, 4, 1, 4, 1, 4, 1, 
		    4, 3, 4, 52, 8, 4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 5, 1, 5, 
		    1, 5, 1, 5, 1, 5, 3, 5, 65, 8, 5, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 1, 
		    6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 7, 1, 7, 1, 7, 1, 7, 1, 
		    7, 1, 7, 1, 7, 1, 8, 1, 8, 4, 8, 88, 8, 8, 11, 8, 12, 8, 89, 1, 8, 
		    1, 8, 1, 9, 1, 9, 1, 9, 1, 9, 1, 9, 1, 9, 1, 10, 1, 10, 1, 10, 1, 
		    10, 5, 10, 104, 8, 10, 10, 10, 12, 10, 107, 9, 10, 1, 10, 1, 10, 1, 
		    11, 1, 11, 1, 11, 5, 11, 114, 8, 11, 10, 11, 12, 11, 117, 9, 11, 1, 
		    12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 
		    1, 12, 1, 12, 3, 12, 131, 8, 12, 1, 12, 0, 0, 13, 0, 2, 4, 6, 8, 10, 
		    12, 14, 16, 18, 20, 22, 24, 0, 2, 1, 0, 14, 15, 1, 0, 16, 17, 129, 
		    0, 26, 1, 0, 0, 0, 2, 32, 1, 0, 0, 0, 4, 35, 1, 0, 0, 0, 6, 45, 1, 
		    0, 0, 0, 8, 51, 1, 0, 0, 0, 10, 59, 1, 0, 0, 0, 12, 71, 1, 0, 0, 0, 
		    14, 78, 1, 0, 0, 0, 16, 85, 1, 0, 0, 0, 18, 93, 1, 0, 0, 0, 20, 99, 
		    1, 0, 0, 0, 22, 110, 1, 0, 0, 0, 24, 130, 1, 0, 0, 0, 26, 27, 5, 1, 
		    0, 0, 27, 28, 6, 0, -1, 0, 28, 29, 3, 2, 1, 0, 29, 30, 6, 0, -1, 0, 
		    30, 31, 5, 2, 0, 0, 31, 1, 1, 0, 0, 0, 32, 33, 3, 16, 8, 0, 33, 34, 
		    3, 4, 2, 0, 34, 3, 1, 0, 0, 0, 35, 37, 5, 3, 0, 0, 36, 38, 3, 6, 3, 
		    0, 37, 36, 1, 0, 0, 0, 38, 39, 1, 0, 0, 0, 39, 37, 1, 0, 0, 0, 39, 
		    40, 1, 0, 0, 0, 40, 41, 1, 0, 0, 0, 41, 42, 5, 4, 0, 0, 42, 5, 1, 
		    0, 0, 0, 43, 46, 3, 10, 5, 0, 44, 46, 3, 8, 4, 0, 45, 43, 1, 0, 0, 
		    0, 45, 44, 1, 0, 0, 0, 46, 7, 1, 0, 0, 0, 47, 48, 5, 8, 0, 0, 48, 
		    52, 6, 4, -1, 0, 49, 50, 5, 19, 0, 0, 50, 52, 6, 4, -1, 0, 51, 47, 
		    1, 0, 0, 0, 51, 49, 1, 0, 0, 0, 52, 53, 1, 0, 0, 0, 53, 54, 5, 11, 
		    0, 0, 54, 55, 6, 4, -1, 0, 55, 56, 3, 20, 10, 0, 56, 57, 6, 4, -1, 
		    0, 57, 58, 5, 10, 0, 0, 58, 9, 1, 0, 0, 0, 59, 60, 5, 5, 0, 0, 60, 
		    61, 5, 12, 0, 0, 61, 64, 6, 5, -1, 0, 62, 65, 5, 14, 0, 0, 63, 65, 
		    3, 14, 7, 0, 64, 62, 1, 0, 0, 0, 64, 63, 1, 0, 0, 0, 65, 66, 1, 0, 
		    0, 0, 66, 67, 6, 5, -1, 0, 67, 68, 5, 13, 0, 0, 68, 69, 1, 0, 0, 0, 
		    69, 70, 5, 10, 0, 0, 70, 11, 1, 0, 0, 0, 71, 72, 5, 18, 0, 0, 72, 
		    73, 6, 6, -1, 0, 73, 74, 6, 6, -1, 0, 74, 75, 6, 6, -1, 0, 75, 76, 
		    6, 6, -1, 0, 76, 77, 6, 6, -1, 0, 77, 13, 1, 0, 0, 0, 78, 79, 5, 18, 
		    0, 0, 79, 80, 6, 7, -1, 0, 80, 81, 6, 7, -1, 0, 81, 82, 6, 7, -1, 
		    0, 82, 83, 6, 7, -1, 0, 83, 84, 6, 7, -1, 0, 84, 15, 1, 0, 0, 0, 85, 
		    87, 5, 6, 0, 0, 86, 88, 3, 18, 9, 0, 87, 86, 1, 0, 0, 0, 88, 89, 1, 
		    0, 0, 0, 89, 87, 1, 0, 0, 0, 89, 90, 1, 0, 0, 0, 90, 91, 1, 0, 0, 
		    0, 91, 92, 5, 7, 0, 0, 92, 17, 1, 0, 0, 0, 93, 94, 5, 8, 0, 0, 94, 
		    95, 5, 9, 0, 0, 95, 96, 5, 11, 0, 0, 96, 97, 3, 20, 10, 0, 97, 98, 
		    5, 10, 0, 0, 98, 19, 1, 0, 0, 0, 99, 100, 6, 10, -1, 0, 100, 105, 
		    3, 22, 11, 0, 101, 102, 7, 0, 0, 0, 102, 104, 3, 22, 11, 0, 103, 101, 
		    1, 0, 0, 0, 104, 107, 1, 0, 0, 0, 105, 103, 1, 0, 0, 0, 105, 106, 
		    1, 0, 0, 0, 106, 108, 1, 0, 0, 0, 107, 105, 1, 0, 0, 0, 108, 109, 
		    6, 10, -1, 0, 109, 21, 1, 0, 0, 0, 110, 115, 3, 24, 12, 0, 111, 112, 
		    7, 1, 0, 0, 112, 114, 3, 24, 12, 0, 113, 111, 1, 0, 0, 0, 114, 117, 
		    1, 0, 0, 0, 115, 113, 1, 0, 0, 0, 115, 116, 1, 0, 0, 0, 116, 23, 1, 
		    0, 0, 0, 117, 115, 1, 0, 0, 0, 118, 119, 5, 8, 0, 0, 119, 131, 6, 
		    12, -1, 0, 120, 121, 5, 19, 0, 0, 121, 131, 6, 12, -1, 0, 122, 123, 
		    5, 18, 0, 0, 123, 124, 6, 12, -1, 0, 124, 125, 6, 12, -1, 0, 125, 
		    131, 6, 12, -1, 0, 126, 127, 5, 12, 0, 0, 127, 128, 3, 20, 10, 0, 
		    128, 129, 5, 13, 0, 0, 129, 131, 1, 0, 0, 0, 130, 118, 1, 0, 0, 0, 
		    130, 120, 1, 0, 0, 0, 130, 122, 1, 0, 0, 0, 130, 126, 1, 0, 0, 0, 
		    131, 25, 1, 0, 0, 0, 8, 39, 45, 51, 64, 89, 105, 115, 130];
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

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(26);
		        $this->match(self::T__0);
		        ContextController::startContext("Program");
		        $this->setState(28);
		        $this->prog_script();
		        ContextController::endContext();
		        $this->setState(30);
		        $this->match(self::T__1);
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
		public function prog_script(): Context\Prog_scriptContext
		{
		    $localContext = new Context\Prog_scriptContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 2, self::RULE_prog_script);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(32);
		        $this->vars_def();
		        $this->setState(33);
		        $this->cod_block();
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
		public function cod_block(): Context\Cod_blockContext
		{
		    $localContext = new Context\Cod_blockContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_cod_block);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(35);
		        $this->match(self::T__2);
		        $this->setState(37); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(36);
		        	$this->cod_script();
		        	$this->setState(39); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::T__4) | (1 << self::T_Var) | (1 << self::T_Const))) !== 0));
		        $this->setState(41);
		        $this->match(self::T__3);
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

		    $this->enterRule($localContext, 6, self::RULE_cod_script);

		    try {
		        $this->setState(45);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__4:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(43);
		            	$this->show();
		            	break;

		            case self::T_Var:
		            case self::T_Const:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(44);
		            	$this->attr();
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
		public function attr(): Context\AttrContext
		{
		    $localContext = new Context\AttrContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 8, self::RULE_attr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(51);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T_Var:
		            	$this->setState(47);
		            	$this->match(self::T_Var);
		            	$context_attr = "Var";
		            	break;

		            case self::T_Const:
		            	$this->setState(49);
		            	$this->match(self::T_Const);
		            	$context_attr = "Const";
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		        $this->setState(53);
		        $this->match(self::T_Attr);
		        ContextController::startContext($context_attr);
		        $this->setState(55);
		        $this->expr();
		        ContextController::endContext();
		        $this->setState(57);
		        $this->match(self::T_PVirg);
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

		    $this->enterRule($localContext, 10, self::RULE_show);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(59);
		        $this->match(self::T__4);

		        $this->setState(60);
		        $this->match(self::T_OP);
		        ContextController::startContext("Show");
		        $this->setState(64);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T_Soma:
		            	$this->setState(62);
		            	$this->match(self::T_Soma);
		            	break;

		            case self::T_Num:
		            	$this->setState(63);
		            	$this->numValue();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		        ContextController::endContext();
		        $this->setState(67);
		        $this->match(self::T_CP);
		        $this->setState(69);
		        $this->match(self::T_PVirg);
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

		    $this->enterRule($localContext, 12, self::RULE_text_value);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(71);
		        $this->match(self::T_Num);
		        ContextController::startPropertieContext("STRING_VALUE");
		        ContextController::startContext("String");
		        ContextController::setValue($localContext->getText());
		        ContextController::endContext();
		        ContextController::endPropertieContext();
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

		    $this->enterRule($localContext, 14, self::RULE_numValue);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(78);
		        $this->match(self::T_Num);
		        ContextController::startPropertieContext("NUM_VALUE");
		        ContextController::startContext("Num");
		        ContextController::setValue($localContext->getText());
		        ContextController::endContext();
		        ContextController::endPropertieContext();
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
		public function vars_def(): Context\Vars_defContext
		{
		    $localContext = new Context\Vars_defContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 16, self::RULE_vars_def);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(85);
		        $this->match(self::T__5);
		        $this->setState(87); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(86);
		        	$this->value_attr();
		        	$this->setState(89); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while ($_la === self::T_Var);
		        $this->setState(91);
		        $this->match(self::T__6);
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

		    $this->enterRule($localContext, 18, self::RULE_value_attr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(93);
		        $this->match(self::T_Var);
		        $this->setState(94);
		        $this->match(self::T_Type);
		        $this->setState(95);
		        $this->match(self::T_Attr);
		        $this->setState(96);
		        $this->expr();
		        $this->setState(97);
		        $this->match(self::T_PVirg);
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

		    $this->enterRule($localContext, 20, self::RULE_expr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        ContextController::startPropertieContext("EXPRESSION");
		        $this->setState(100);
		        $this->termo();
		        $this->setState(105);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T_Soma || $_la === self::T_Sub) {
		        	$this->setState(101);

		        	$_la = $this->input->LA(1);

		        	if (!($_la === self::T_Soma || $_la === self::T_Sub)) {
		        	$this->errorHandler->recoverInline($this);
		        	} else {
		        		if ($this->input->LA(1) === Token::EOF) {
		        		    $this->matchedEOF = true;
		        	    }

		        		$this->errorHandler->reportMatch($this);
		        		$this->consume();
		        	}
		        	$this->setState(102);
		        	$this->termo();
		        	$this->setState(107);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        ContextController::endPropertieContext();
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

		    $this->enterRule($localContext, 22, self::RULE_termo);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(110);
		        $this->fator();
		        $this->setState(115);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T_Mult || $_la === self::T_Div) {
		        	$this->setState(111);

		        	$_la = $this->input->LA(1);

		        	if (!($_la === self::T_Mult || $_la === self::T_Div)) {
		        	$this->errorHandler->recoverInline($this);
		        	} else {
		        		if ($this->input->LA(1) === Token::EOF) {
		        		    $this->matchedEOF = true;
		        	    }

		        		$this->errorHandler->reportMatch($this);
		        		$this->consume();
		        	}
		        	$this->setState(112);
		        	$this->fator();
		        	$this->setState(117);
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

		    $this->enterRule($localContext, 24, self::RULE_fator);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(130);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T_Var:
		            	$this->setState(118);
		            	$this->match(self::T_Var);
		            	ContextController::shortContext("Var");
		            	break;

		            case self::T_Const:
		            	$this->setState(120);
		            	$this->match(self::T_Const);
		            	ContextController::shortContext("Var");
		            	break;

		            case self::T_Num:
		            	$this->setState(122);
		            	$this->match(self::T_Num);
		            	ContextController::startContext("String");
		            	ContextController::setValue($localContext->getText());
		            	ContextController::endContext();
		            	break;

		            case self::T_OP:
		            	$this->setState(126);
		            	$this->match(self::T_OP);
		            	$this->setState(127);
		            	$this->expr();
		            	$this->setState(128);
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

	    public function prog_script(): ?Prog_scriptContext
	    {
	    	return $this->getTypedRuleContext(Prog_scriptContext::class, 0);
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

	class Prog_scriptContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return KotanParser::RULE_prog_script;
	    }

	    public function vars_def(): ?Vars_defContext
	    {
	    	return $this->getTypedRuleContext(Vars_defContext::class, 0);
	    }

	    public function cod_block(): ?Cod_blockContext
	    {
	    	return $this->getTypedRuleContext(Cod_blockContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->enterProg_script($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->exitProg_script($this);
		    }
		}
	} 

	class Cod_blockContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return KotanParser::RULE_cod_block;
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
			    $listener->enterCod_block($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->exitCod_block($this);
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

	    public function show(): ?ShowContext
	    {
	    	return $this->getTypedRuleContext(ShowContext::class, 0);
	    }

	    public function attr(): ?AttrContext
	    {
	    	return $this->getTypedRuleContext(AttrContext::class, 0);
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

	class AttrContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return KotanParser::RULE_attr;
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

	    public function T_Var(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_Var, 0);
	    }

	    public function T_Const(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_Const, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->enterAttr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->exitAttr($this);
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

	    public function T_Soma(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_Soma, 0);
	    }

	    public function numValue(): ?NumValueContext
	    {
	    	return $this->getTypedRuleContext(NumValueContext::class, 0);
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

	    public function T_Num(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_Num, 0);
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

	class Vars_defContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return KotanParser::RULE_vars_def;
	    }

	    /**
	     * @return array<Value_attrContext>|Value_attrContext|null
	     */
	    public function value_attr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(Value_attrContext::class);
	    	}

	        return $this->getTypedRuleContext(Value_attrContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->enterVars_def($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->exitVars_def($this);
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

	    public function T_Var(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_Var, 0);
	    }

	    public function T_Type(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_Type, 0);
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

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function T_Div(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(KotanParser::T_Div);
	    	}

	        return $this->getToken(KotanParser::T_Div, $index);
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

	    public function T_Var(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_Var, 0);
	    }

	    public function T_Const(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_Const, 0);
	    }

	    public function T_Num(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_Num, 0);
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
}
<?php

/*
 * Generated from Kotan.g by ANTLR 4.10.1
 */

namespace Gramatic {

	require_once 'vendor/autoload.php';

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

	final class KotanParser extends Parser
	{
		public const T__0 = 1, T__1 = 2, T__2 = 3, T__3 = 4, T__4 = 5, T__5 = 6, 
               T__6 = 7, T_Var = 8, T_Type = 9, T_PVirg = 10, T_Attr = 11, 
               T_OP = 12, T_CP = 13, T_Soma = 14, T_Sub = 15, T_Mult = 16, 
               T_Div = 17, T_Num = 18, T_Const = 19, T_Text = 20, T_Blank = 21;

		public const RULE_prog = 0, RULE_prog_script = 1, RULE_cod_block = 2, 
               RULE_cod_script = 3, RULE_attr = 4, RULE_show = 5, RULE_text_show = 6, 
               RULE_text_value = 7, RULE_vars_def = 8, RULE_value_attr = 9, 
               RULE_expr = 10, RULE_termo = 11, RULE_fator = 12;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'prog', 'prog_script', 'cod_block', 'cod_script', 'attr', 'show', 'text_show', 
			'text_value', 'vars_def', 'value_attr', 'expr', 'termo', 'fator'
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
			[4, 1, 21, 108, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 1, 0, 1, 0, 1, 0, 1, 0, 
		    1, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 2, 1, 2, 4, 2, 38, 8, 2, 11, 2, 12, 
		    2, 39, 1, 2, 1, 2, 1, 3, 1, 3, 3, 3, 46, 8, 3, 1, 4, 1, 4, 1, 4, 1, 
		    4, 1, 4, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 1, 6, 1, 
		    6, 1, 6, 1, 6, 1, 7, 1, 7, 1, 7, 1, 7, 1, 8, 1, 8, 4, 8, 71, 8, 8, 
		    11, 8, 12, 8, 72, 1, 8, 1, 8, 1, 9, 1, 9, 1, 9, 1, 9, 1, 9, 1, 9, 
		    1, 10, 1, 10, 1, 10, 5, 10, 86, 8, 10, 10, 10, 12, 10, 89, 9, 10, 
		    1, 11, 1, 11, 1, 11, 5, 11, 94, 8, 11, 10, 11, 12, 11, 97, 9, 11, 
		    1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 3, 12, 106, 8, 12, 
		    1, 12, 0, 0, 13, 0, 2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24, 0, 
		    3, 2, 0, 8, 8, 19, 19, 1, 0, 14, 15, 1, 0, 16, 17, 102, 0, 26, 1, 
		    0, 0, 0, 2, 32, 1, 0, 0, 0, 4, 35, 1, 0, 0, 0, 6, 45, 1, 0, 0, 0, 
		    8, 47, 1, 0, 0, 0, 10, 52, 1, 0, 0, 0, 12, 60, 1, 0, 0, 0, 14, 64, 
		    1, 0, 0, 0, 16, 68, 1, 0, 0, 0, 18, 76, 1, 0, 0, 0, 20, 82, 1, 0, 
		    0, 0, 22, 90, 1, 0, 0, 0, 24, 105, 1, 0, 0, 0, 26, 27, 5, 1, 0, 0, 
		    27, 28, 6, 0, -1, 0, 28, 29, 3, 2, 1, 0, 29, 30, 5, 2, 0, 0, 30, 31, 
		    6, 0, -1, 0, 31, 1, 1, 0, 0, 0, 32, 33, 3, 16, 8, 0, 33, 34, 3, 4, 
		    2, 0, 34, 3, 1, 0, 0, 0, 35, 37, 5, 3, 0, 0, 36, 38, 3, 6, 3, 0, 37, 
		    36, 1, 0, 0, 0, 38, 39, 1, 0, 0, 0, 39, 37, 1, 0, 0, 0, 39, 40, 1, 
		    0, 0, 0, 40, 41, 1, 0, 0, 0, 41, 42, 5, 4, 0, 0, 42, 5, 1, 0, 0, 0, 
		    43, 46, 3, 10, 5, 0, 44, 46, 3, 8, 4, 0, 45, 43, 1, 0, 0, 0, 45, 44, 
		    1, 0, 0, 0, 46, 7, 1, 0, 0, 0, 47, 48, 7, 0, 0, 0, 48, 49, 5, 11, 
		    0, 0, 49, 50, 3, 20, 10, 0, 50, 51, 5, 10, 0, 0, 51, 9, 1, 0, 0, 0, 
		    52, 53, 5, 5, 0, 0, 53, 54, 6, 5, -1, 0, 54, 55, 5, 12, 0, 0, 55, 
		    56, 3, 12, 6, 0, 56, 57, 5, 13, 0, 0, 57, 58, 5, 10, 0, 0, 58, 59, 
		    6, 5, -1, 0, 59, 11, 1, 0, 0, 0, 60, 61, 6, 6, -1, 0, 61, 62, 3, 14, 
		    7, 0, 62, 63, 6, 6, -1, 0, 63, 13, 1, 0, 0, 0, 64, 65, 6, 7, -1, 0, 
		    65, 66, 5, 18, 0, 0, 66, 67, 6, 7, -1, 0, 67, 15, 1, 0, 0, 0, 68, 
		    70, 5, 6, 0, 0, 69, 71, 3, 18, 9, 0, 70, 69, 1, 0, 0, 0, 71, 72, 1, 
		    0, 0, 0, 72, 70, 1, 0, 0, 0, 72, 73, 1, 0, 0, 0, 73, 74, 1, 0, 0, 
		    0, 74, 75, 5, 7, 0, 0, 75, 17, 1, 0, 0, 0, 76, 77, 5, 8, 0, 0, 77, 
		    78, 5, 9, 0, 0, 78, 79, 5, 11, 0, 0, 79, 80, 3, 20, 10, 0, 80, 81, 
		    5, 10, 0, 0, 81, 19, 1, 0, 0, 0, 82, 87, 3, 22, 11, 0, 83, 84, 7, 
		    1, 0, 0, 84, 86, 3, 22, 11, 0, 85, 83, 1, 0, 0, 0, 86, 89, 1, 0, 0, 
		    0, 87, 85, 1, 0, 0, 0, 87, 88, 1, 0, 0, 0, 88, 21, 1, 0, 0, 0, 89, 
		    87, 1, 0, 0, 0, 90, 95, 3, 24, 12, 0, 91, 92, 7, 2, 0, 0, 92, 94, 
		    3, 24, 12, 0, 93, 91, 1, 0, 0, 0, 94, 97, 1, 0, 0, 0, 95, 93, 1, 0, 
		    0, 0, 95, 96, 1, 0, 0, 0, 96, 23, 1, 0, 0, 0, 97, 95, 1, 0, 0, 0, 
		    98, 106, 5, 8, 0, 0, 99, 106, 5, 19, 0, 0, 100, 106, 5, 18, 0, 0, 
		    101, 102, 5, 12, 0, 0, 102, 103, 3, 20, 10, 0, 103, 104, 5, 13, 0, 
		    0, 104, 106, 1, 0, 0, 0, 105, 98, 1, 0, 0, 0, 105, 99, 1, 0, 0, 0, 
		    105, 100, 1, 0, 0, 0, 105, 101, 1, 0, 0, 0, 106, 25, 1, 0, 0, 0, 6, 
		    39, 45, 72, 87, 95, 105];
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
		        $this->setState(29);
		        $this->match(self::T__1);
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
		        $this->setState(47);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::T_Var || $_la === self::T_Const)) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		        $this->setState(48);
		        $this->match(self::T_Attr);
		        $this->setState(49);
		        $this->expr();
		        $this->setState(50);
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
		        $this->setState(52);
		        $this->match(self::T__4);
		        ContextController::startContext("Show");
		        $this->setState(54);
		        $this->match(self::T_OP);
		        $this->setState(55);
		        $this->text_show();
		        $this->setState(56);
		        $this->match(self::T_CP);
		        $this->setState(57);
		        $this->match(self::T_PVirg);
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
		public function text_show(): Context\Text_showContext
		{
		    $localContext = new Context\Text_showContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 12, self::RULE_text_show);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        ContextController::startPropertieContext("STRING_VALUE");
		        $this->setState(61);
		        $this->text_value();
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
		public function text_value(): Context\Text_valueContext
		{
		    $localContext = new Context\Text_valueContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 14, self::RULE_text_value);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        ContextController::startContext("String");
		        $this->setState(65);
		        $this->match(self::T_Num);
		        ContextController::endContext("Show");
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
		        $this->setState(68);
		        $this->match(self::T__5);
		        $this->setState(70); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(69);
		        	$this->value_attr();
		        	$this->setState(72); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while ($_la === self::T_Var);
		        $this->setState(74);
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
		        $this->setState(76);
		        $this->match(self::T_Var);
		        $this->setState(77);
		        $this->match(self::T_Type);
		        $this->setState(78);
		        $this->match(self::T_Attr);
		        $this->setState(79);
		        $this->expr();
		        $this->setState(80);
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
		        $this->setState(82);
		        $this->termo();
		        $this->setState(87);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T_Soma || $_la === self::T_Sub) {
		        	$this->setState(83);

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
		        	$this->setState(84);
		        	$this->termo();
		        	$this->setState(89);
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
		public function termo(): Context\TermoContext
		{
		    $localContext = new Context\TermoContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 22, self::RULE_termo);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(90);
		        $this->fator();
		        $this->setState(95);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T_Mult || $_la === self::T_Div) {
		        	$this->setState(91);

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
		        	$this->setState(92);
		        	$this->fator();
		        	$this->setState(97);
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
		        $this->setState(105);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T_Var:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(98);
		            	$this->match(self::T_Var);
		            	break;

		            case self::T_Const:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(99);
		            	$this->match(self::T_Const);
		            	break;

		            case self::T_Num:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(100);
		            	$this->match(self::T_Num);
		            	break;

		            case self::T_OP:
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(101);
		            	$this->match(self::T_OP);
		            	$this->setState(102);
		            	$this->expr();
		            	$this->setState(103);
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

	    public function T_OP(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_OP, 0);
	    }

	    public function text_show(): ?Text_showContext
	    {
	    	return $this->getTypedRuleContext(Text_showContext::class, 0);
	    }

	    public function T_CP(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_CP, 0);
	    }

	    public function T_PVirg(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_PVirg, 0);
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

	class Text_showContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return KotanParser::RULE_text_show;
	    }

	    public function text_value(): ?Text_valueContext
	    {
	    	return $this->getTypedRuleContext(Text_valueContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->enterText_show($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->exitText_show($this);
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
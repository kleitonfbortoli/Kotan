<?php

/*
 * Generated from Kotan.g by ANTLR 4.10.1
 */

namespace Gramatic {

	require_once 'vendor/autoload.php';

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
               T__6 = 7, T__7 = 8, T__8 = 9, T__9 = 10, T__10 = 11, T__11 = 12,
               T__12 = 13, T_Var = 14, T_PVirg = 15, T_Attr = 16, T_OP = 17,
               T_CP = 18, T_Soma = 19, T_Sub = 20, T_Mult = 21, T_Div = 22,
               T_Num = 23, T_Const = 24, T_Text = 25, T_Blank = 26;

		public const RULE_prog = 0, RULE_prog_script = 1, RULE_cod_block = 2,
               RULE_attr = 3, RULE_show = 4, RULE_const_def = 5, RULE_const_attr = 6,
               RULE_sgvars_def = 7, RULE_gvars_def = 8, RULE_vars_def = 9,
               RULE_value_attr = 10, RULE_expr = 11, RULE_termo = 12, RULE_fator = 13;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'prog', 'prog_script', 'cod_block', 'attr', 'show', 'const_def', 'const_attr',
			'sgvars_def', 'gvars_def', 'vars_def', 'value_attr', 'expr', 'termo',
			'fator'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'PROGRAM START'", "'PROGRAM END'", "'COD START'", "'COD END'",
		    "'SHOW'", "'CONSTS VARS START'", "'CONSTS VARS END'", "'SGLOBAL VARS START'",
		    "'SGLOBAL VARS END'", "'GLOBAL VARS START'", "'GLOBAL VARS END'",
		    "'VARS START'", "'VARS END'", null, "';'", "'='", "'('", "')'", "'+'",
		    "'-'", "'*'", "'/'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, null, null, null, null, null, null, null, null, null, null,
		    null, null, null, "T_Var", "T_PVirg", "T_Attr", "T_OP", "T_CP", "T_Soma",
		    "T_Sub", "T_Mult", "T_Div", "T_Num", "T_Const", "T_Text", "T_Blank"
		];

		private const SERIALIZED_ATN =
			[4, 1, 26, 129, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4,
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9,
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 1, 0, 1, 0,
		    1, 0, 1, 0, 1, 1, 3, 1, 34, 8, 1, 1, 1, 3, 1, 37, 8, 1, 1, 1, 3, 1,
		    40, 8, 1, 1, 2, 1, 2, 1, 2, 3, 2, 45, 8, 2, 1, 2, 1, 2, 1, 3, 1, 3,
		    1, 3, 1, 3, 1, 3, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 5,
		    1, 5, 4, 5, 63, 8, 5, 11, 5, 12, 5, 64, 1, 5, 1, 5, 1, 6, 1, 6, 1,
		    6, 1, 6, 1, 6, 1, 7, 1, 7, 4, 7, 76, 8, 7, 11, 7, 12, 7, 77, 1, 7,
		    1, 7, 1, 8, 1, 8, 4, 8, 84, 8, 8, 11, 8, 12, 8, 85, 1, 8, 1, 8, 1,
		    9, 1, 9, 4, 9, 92, 8, 9, 11, 9, 12, 9, 93, 1, 9, 1, 9, 1, 10, 1, 10,
		    1, 10, 1, 10, 1, 10, 1, 11, 1, 11, 1, 11, 5, 11, 106, 8, 11, 10, 11,
		    12, 11, 109, 9, 11, 1, 12, 1, 12, 1, 12, 5, 12, 114, 8, 12, 10, 12,
		    12, 12, 117, 9, 12, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13,
		    1, 13, 3, 13, 127, 8, 13, 1, 13, 0, 0, 14, 0, 2, 4, 6, 8, 10, 12,
		    14, 16, 18, 20, 22, 24, 26, 0, 3, 2, 0, 14, 14, 24, 24, 1, 0, 19,
		    20, 1, 0, 21, 22, 128, 0, 28, 1, 0, 0, 0, 2, 33, 1, 0, 0, 0, 4, 41,
		    1, 0, 0, 0, 6, 48, 1, 0, 0, 0, 8, 53, 1, 0, 0, 0, 10, 60, 1, 0, 0,
		    0, 12, 68, 1, 0, 0, 0, 14, 73, 1, 0, 0, 0, 16, 81, 1, 0, 0, 0, 18,
		    89, 1, 0, 0, 0, 20, 97, 1, 0, 0, 0, 22, 102, 1, 0, 0, 0, 24, 110,
		    1, 0, 0, 0, 26, 126, 1, 0, 0, 0, 28, 29, 5, 1, 0, 0, 29, 30, 3, 2,
		    1, 0, 30, 31, 5, 2, 0, 0, 31, 1, 1, 0, 0, 0, 32, 34, 3, 10, 5, 0,
		    33, 32, 1, 0, 0, 0, 33, 34, 1, 0, 0, 0, 34, 36, 1, 0, 0, 0, 35, 37,
		    3, 14, 7, 0, 36, 35, 1, 0, 0, 0, 36, 37, 1, 0, 0, 0, 37, 39, 1, 0,
		    0, 0, 38, 40, 3, 4, 2, 0, 39, 38, 1, 0, 0, 0, 39, 40, 1, 0, 0, 0,
		    40, 3, 1, 0, 0, 0, 41, 44, 5, 3, 0, 0, 42, 45, 3, 8, 4, 0, 43, 45,
		    3, 6, 3, 0, 44, 42, 1, 0, 0, 0, 44, 43, 1, 0, 0, 0, 45, 46, 1, 0,
		    0, 0, 46, 47, 5, 4, 0, 0, 47, 5, 1, 0, 0, 0, 48, 49, 7, 0, 0, 0, 49,
		    50, 5, 16, 0, 0, 50, 51, 3, 22, 11, 0, 51, 52, 5, 15, 0, 0, 52, 7,
		    1, 0, 0, 0, 53, 54, 5, 5, 0, 0, 54, 55, 5, 17, 0, 0, 55, 56, 3, 22,
		    11, 0, 56, 57, 5, 18, 0, 0, 57, 58, 5, 15, 0, 0, 58, 59, 6, 4, -1,
		    0, 59, 9, 1, 0, 0, 0, 60, 62, 5, 6, 0, 0, 61, 63, 3, 12, 6, 0, 62,
		    61, 1, 0, 0, 0, 63, 64, 1, 0, 0, 0, 64, 62, 1, 0, 0, 0, 64, 65, 1,
		    0, 0, 0, 65, 66, 1, 0, 0, 0, 66, 67, 5, 7, 0, 0, 67, 11, 1, 0, 0,
		    0, 68, 69, 5, 24, 0, 0, 69, 70, 5, 16, 0, 0, 70, 71, 3, 22, 11, 0,
		    71, 72, 5, 15, 0, 0, 72, 13, 1, 0, 0, 0, 73, 75, 5, 8, 0, 0, 74, 76,
		    3, 20, 10, 0, 75, 74, 1, 0, 0, 0, 76, 77, 1, 0, 0, 0, 77, 75, 1, 0,
		    0, 0, 77, 78, 1, 0, 0, 0, 78, 79, 1, 0, 0, 0, 79, 80, 5, 9, 0, 0,
		    80, 15, 1, 0, 0, 0, 81, 83, 5, 10, 0, 0, 82, 84, 3, 20, 10, 0, 83,
		    82, 1, 0, 0, 0, 84, 85, 1, 0, 0, 0, 85, 83, 1, 0, 0, 0, 85, 86, 1,
		    0, 0, 0, 86, 87, 1, 0, 0, 0, 87, 88, 5, 11, 0, 0, 88, 17, 1, 0, 0,
		    0, 89, 91, 5, 12, 0, 0, 90, 92, 3, 20, 10, 0, 91, 90, 1, 0, 0, 0,
		    92, 93, 1, 0, 0, 0, 93, 91, 1, 0, 0, 0, 93, 94, 1, 0, 0, 0, 94, 95,
		    1, 0, 0, 0, 95, 96, 5, 13, 0, 0, 96, 19, 1, 0, 0, 0, 97, 98, 5, 14,
		    0, 0, 98, 99, 5, 16, 0, 0, 99, 100, 3, 22, 11, 0, 100, 101, 5, 15,
		    0, 0, 101, 21, 1, 0, 0, 0, 102, 107, 3, 24, 12, 0, 103, 104, 7, 1,
		    0, 0, 104, 106, 3, 24, 12, 0, 105, 103, 1, 0, 0, 0, 106, 109, 1, 0,
		    0, 0, 107, 105, 1, 0, 0, 0, 107, 108, 1, 0, 0, 0, 108, 23, 1, 0, 0,
		    0, 109, 107, 1, 0, 0, 0, 110, 115, 3, 26, 13, 0, 111, 112, 7, 2, 0,
		    0, 112, 114, 3, 26, 13, 0, 113, 111, 1, 0, 0, 0, 114, 117, 1, 0, 0,
		    0, 115, 113, 1, 0, 0, 0, 115, 116, 1, 0, 0, 0, 116, 25, 1, 0, 0, 0,
		    117, 115, 1, 0, 0, 0, 118, 127, 5, 14, 0, 0, 119, 127, 5, 24, 0, 0,
		    120, 127, 5, 23, 0, 0, 121, 127, 5, 25, 0, 0, 122, 123, 5, 17, 0,
		    0, 123, 124, 3, 22, 11, 0, 124, 125, 5, 18, 0, 0, 125, 127, 1, 0,
		    0, 0, 126, 118, 1, 0, 0, 0, 126, 119, 1, 0, 0, 0, 126, 120, 1, 0,
		    0, 0, 126, 121, 1, 0, 0, 0, 126, 122, 1, 0, 0, 0, 127, 27, 1, 0, 0,
		    0, 11, 33, 36, 39, 44, 64, 77, 85, 93, 107, 115, 126];
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
		        $this->setState(28);
		        $this->match(self::T__0);
		        $this->setState(29);
		        $this->prog_script();
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
		        $this->setState(33);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__5) {
		        	$this->setState(32);
		        	$this->const_def();
		        }
		        $this->setState(36);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__7) {
		        	$this->setState(35);
		        	$this->sgvars_def();
		        }
		        $this->setState(39);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__2) {
		        	$this->setState(38);
		        	$this->cod_block();
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
		public function cod_block(): Context\Cod_blockContext
		{
		    $localContext = new Context\Cod_blockContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_cod_block);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(41);
		        $this->match(self::T__2);
		        $this->setState(44);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__4:
		            	$this->setState(42);
		            	$this->show();
		            	break;

		            case self::T_Var:
		            case self::T_Const:
		            	$this->setState(43);
		            	$this->attr();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		        $this->setState(46);
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
		public function attr(): Context\AttrContext
		{
		    $localContext = new Context\AttrContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 6, self::RULE_attr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(48);

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
		        $this->setState(49);
		        $this->match(self::T_Attr);
		        $this->setState(50);
		        $this->expr();
		        $this->setState(51);
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

		    $this->enterRule($localContext, 8, self::RULE_show);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(53);
		        $this->match(self::T__4);
		        $this->setState(54);
		        $this->match(self::T_OP);
		        $this->setState(55);
		        $this->expr();
		        $this->setState(56);
		        $this->match(self::T_CP);
		        $this->setState(57);
		        $this->match(self::T_PVirg);
		        echo 1;
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
		public function const_def(): Context\Const_defContext
		{
		    $localContext = new Context\Const_defContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 10, self::RULE_const_def);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(60);
		        $this->match(self::T__5);
		        $this->setState(62);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(61);
		        	$this->const_attr();
		        	$this->setState(64);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while ($_la === self::T_Const);
		        $this->setState(66);
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
		public function const_attr(): Context\Const_attrContext
		{
		    $localContext = new Context\Const_attrContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 12, self::RULE_const_attr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(68);
		        $this->match(self::T_Const);
		        $this->setState(69);
		        $this->match(self::T_Attr);
		        $this->setState(70);
		        $this->expr();
		        $this->setState(71);
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
		public function sgvars_def(): Context\Sgvars_defContext
		{
		    $localContext = new Context\Sgvars_defContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 14, self::RULE_sgvars_def);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(73);
		        $this->match(self::T__7);
		        $this->setState(75);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(74);
		        	$this->value_attr();
		        	$this->setState(77);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while ($_la === self::T_Var);
		        $this->setState(79);
		        $this->match(self::T__8);
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
		public function gvars_def(): Context\Gvars_defContext
		{
		    $localContext = new Context\Gvars_defContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 16, self::RULE_gvars_def);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(81);
		        $this->match(self::T__9);
		        $this->setState(83);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(82);
		        	$this->value_attr();
		        	$this->setState(85);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while ($_la === self::T_Var);
		        $this->setState(87);
		        $this->match(self::T__10);
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

		    $this->enterRule($localContext, 18, self::RULE_vars_def);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(89);
		        $this->match(self::T__11);
		        $this->setState(91);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(90);
		        	$this->value_attr();
		        	$this->setState(93);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while ($_la === self::T_Var);
		        $this->setState(95);
		        $this->match(self::T__12);
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
		        $this->setState(97);
		        $this->match(self::T_Var);
		        $this->setState(98);
		        $this->match(self::T_Attr);
		        $this->setState(99);
		        $this->expr();
		        $this->setState(100);
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

		    $this->enterRule($localContext, 22, self::RULE_expr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(102);
		        $this->termo();
		        $this->setState(107);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T_Soma || $_la === self::T_Sub) {
		        	$this->setState(103);

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
		        	$this->setState(104);
		        	$this->termo();
		        	$this->setState(109);
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

		    $this->enterRule($localContext, 24, self::RULE_termo);

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

		    $this->enterRule($localContext, 26, self::RULE_fator);

		    try {
		        $this->setState(126);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T_Var:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(118);
		            	$this->match(self::T_Var);
		            	break;

		            case self::T_Const:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(119);
		            	$this->match(self::T_Const);
		            	break;

		            case self::T_Num:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(120);
		            	$this->match(self::T_Num);
		            	break;

		            case self::T_Text:
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(121);
		            	$this->match(self::T_Text);
		            	break;

		            case self::T_OP:
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(122);
		            	$this->match(self::T_OP);
		            	$this->setState(123);
		            	$this->expr();
		            	$this->setState(124);
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

	    public function const_def(): ?Const_defContext
	    {
	    	return $this->getTypedRuleContext(Const_defContext::class, 0);
	    }

	    public function sgvars_def(): ?Sgvars_defContext
	    {
	    	return $this->getTypedRuleContext(Sgvars_defContext::class, 0);
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

	    public function expr(): ?ExprContext
	    {
	    	return $this->getTypedRuleContext(ExprContext::class, 0);
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

	class Const_defContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return KotanParser::RULE_const_def;
	    }

	    /**
	     * @return array<Const_attrContext>|Const_attrContext|null
	     */
	    public function const_attr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(Const_attrContext::class);
	    	}

	        return $this->getTypedRuleContext(Const_attrContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->enterConst_def($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->exitConst_def($this);
		    }
		}
	}

	class Const_attrContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return KotanParser::RULE_const_attr;
	    }

	    public function T_Const(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_Const, 0);
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
			    $listener->enterConst_attr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->exitConst_attr($this);
		    }
		}
	}

	class Sgvars_defContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return KotanParser::RULE_sgvars_def;
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
			    $listener->enterSgvars_def($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->exitSgvars_def($this);
		    }
		}
	}

	class Gvars_defContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return KotanParser::RULE_gvars_def;
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
			    $listener->enterGvars_def($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof KotanListener) {
			    $listener->exitGvars_def($this);
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

	    public function T_Text(): ?TerminalNode
	    {
	        return $this->getToken(KotanParser::T_Text, 0);
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
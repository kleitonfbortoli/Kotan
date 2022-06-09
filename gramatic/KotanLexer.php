<?php

/*
 * Generated from Kotan.g by ANTLR 4.10.1
 */

namespace Gramatic {
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\LexerATNSimulator;
	use Antlr\Antlr4\Runtime\Lexer;
	use Antlr\Antlr4\Runtime\CharStream;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\VocabularyImpl;

	final class KotanLexer extends Lexer
	{
		public const T__0 = 1, T__1 = 2, T__2 = 3, T__3 = 4, T__4 = 5, T__5 = 6, 
               T__6 = 7, T_Var = 8, T_Type = 9, T_PVirg = 10, T_Attr = 11, 
               T_OP = 12, T_CP = 13, T_Soma = 14, T_Sub = 15, T_Mult = 16, 
               T_Div = 17, T_Num = 18, T_Const = 19, T_Text = 20, T_Blank = 21;

		/**
		 * @var array<string>
		 */
		public const CHANNEL_NAMES = [
			'DEFAULT_TOKEN_CHANNEL', 'HIDDEN'
		];

		/**
		 * @var array<string>
		 */
		public const MODE_NAMES = [
			'DEFAULT_MODE'
		];

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'T__0', 'T__1', 'T__2', 'T__3', 'T__4', 'T__5', 'T__6', 'T_Var', 'T_Type', 
			'T_PVirg', 'T_Attr', 'T_OP', 'T_CP', 'T_Soma', 'T_Sub', 'T_Mult', 'T_Div', 
			'T_Num', 'T_Const', 'T_Text', 'T_Blank'
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
			[4, 0, 21, 169, 6, -1, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 
		    2, 4, 7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 
		    7, 9, 2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 
		    7, 14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 2, 18, 7, 18, 2, 
		    19, 7, 19, 2, 20, 7, 20, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 
		    1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 
		    1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 1, 2, 1, 2, 
		    1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 3, 1, 3, 1, 3, 1, 3, 
		    1, 3, 1, 3, 1, 3, 1, 3, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 1, 5, 1, 5, 
		    1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 1, 6, 1, 6, 
		    1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 7, 1, 7, 5, 7, 115, 8, 
		    7, 10, 7, 12, 7, 118, 9, 7, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 
		    8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 1, 8, 3, 8, 133, 8, 8, 1, 9, 1, 9, 
		    1, 10, 1, 10, 1, 11, 1, 11, 1, 12, 1, 12, 1, 13, 1, 13, 1, 14, 1, 
		    14, 1, 15, 1, 15, 1, 16, 1, 16, 1, 17, 4, 17, 152, 8, 17, 11, 17, 
		    12, 17, 153, 1, 18, 4, 18, 157, 8, 18, 11, 18, 12, 18, 158, 1, 19, 
		    4, 19, 162, 8, 19, 11, 19, 12, 19, 163, 1, 20, 1, 20, 1, 20, 1, 20, 
		    0, 0, 21, 1, 1, 3, 2, 5, 3, 7, 4, 9, 5, 11, 6, 13, 7, 15, 8, 17, 9, 
		    19, 10, 21, 11, 23, 12, 25, 13, 27, 14, 29, 15, 31, 16, 33, 17, 35, 
		    18, 37, 19, 39, 20, 41, 21, 1, 0, 4, 2, 0, 65, 90, 97, 122, 3, 0, 
		    48, 57, 65, 90, 97, 122, 4, 0, 32, 32, 48, 57, 65, 90, 97, 122, 3, 
		    0, 9, 10, 13, 13, 32, 32, 174, 0, 1, 1, 0, 0, 0, 0, 3, 1, 0, 0, 0, 
		    0, 5, 1, 0, 0, 0, 0, 7, 1, 0, 0, 0, 0, 9, 1, 0, 0, 0, 0, 11, 1, 0, 
		    0, 0, 0, 13, 1, 0, 0, 0, 0, 15, 1, 0, 0, 0, 0, 17, 1, 0, 0, 0, 0, 
		    19, 1, 0, 0, 0, 0, 21, 1, 0, 0, 0, 0, 23, 1, 0, 0, 0, 0, 25, 1, 0, 
		    0, 0, 0, 27, 1, 0, 0, 0, 0, 29, 1, 0, 0, 0, 0, 31, 1, 0, 0, 0, 0, 
		    33, 1, 0, 0, 0, 0, 35, 1, 0, 0, 0, 0, 37, 1, 0, 0, 0, 0, 39, 1, 0, 
		    0, 0, 0, 41, 1, 0, 0, 0, 1, 43, 1, 0, 0, 0, 3, 57, 1, 0, 0, 0, 5, 
		    69, 1, 0, 0, 0, 7, 79, 1, 0, 0, 0, 9, 87, 1, 0, 0, 0, 11, 92, 1, 0, 
		    0, 0, 13, 103, 1, 0, 0, 0, 15, 112, 1, 0, 0, 0, 17, 132, 1, 0, 0, 
		    0, 19, 134, 1, 0, 0, 0, 21, 136, 1, 0, 0, 0, 23, 138, 1, 0, 0, 0, 
		    25, 140, 1, 0, 0, 0, 27, 142, 1, 0, 0, 0, 29, 144, 1, 0, 0, 0, 31, 
		    146, 1, 0, 0, 0, 33, 148, 1, 0, 0, 0, 35, 151, 1, 0, 0, 0, 37, 156, 
		    1, 0, 0, 0, 39, 161, 1, 0, 0, 0, 41, 165, 1, 0, 0, 0, 43, 44, 5, 80, 
		    0, 0, 44, 45, 5, 82, 0, 0, 45, 46, 5, 79, 0, 0, 46, 47, 5, 71, 0, 
		    0, 47, 48, 5, 82, 0, 0, 48, 49, 5, 65, 0, 0, 49, 50, 5, 77, 0, 0, 
		    50, 51, 5, 32, 0, 0, 51, 52, 5, 83, 0, 0, 52, 53, 5, 84, 0, 0, 53, 
		    54, 5, 65, 0, 0, 54, 55, 5, 82, 0, 0, 55, 56, 5, 84, 0, 0, 56, 2, 
		    1, 0, 0, 0, 57, 58, 5, 80, 0, 0, 58, 59, 5, 82, 0, 0, 59, 60, 5, 79, 
		    0, 0, 60, 61, 5, 71, 0, 0, 61, 62, 5, 82, 0, 0, 62, 63, 5, 65, 0, 
		    0, 63, 64, 5, 77, 0, 0, 64, 65, 5, 32, 0, 0, 65, 66, 5, 69, 0, 0, 
		    66, 67, 5, 78, 0, 0, 67, 68, 5, 68, 0, 0, 68, 4, 1, 0, 0, 0, 69, 70, 
		    5, 67, 0, 0, 70, 71, 5, 79, 0, 0, 71, 72, 5, 68, 0, 0, 72, 73, 5, 
		    32, 0, 0, 73, 74, 5, 83, 0, 0, 74, 75, 5, 84, 0, 0, 75, 76, 5, 65, 
		    0, 0, 76, 77, 5, 82, 0, 0, 77, 78, 5, 84, 0, 0, 78, 6, 1, 0, 0, 0, 
		    79, 80, 5, 67, 0, 0, 80, 81, 5, 79, 0, 0, 81, 82, 5, 68, 0, 0, 82, 
		    83, 5, 32, 0, 0, 83, 84, 5, 69, 0, 0, 84, 85, 5, 78, 0, 0, 85, 86, 
		    5, 68, 0, 0, 86, 8, 1, 0, 0, 0, 87, 88, 5, 83, 0, 0, 88, 89, 5, 72, 
		    0, 0, 89, 90, 5, 79, 0, 0, 90, 91, 5, 87, 0, 0, 91, 10, 1, 0, 0, 0, 
		    92, 93, 5, 86, 0, 0, 93, 94, 5, 65, 0, 0, 94, 95, 5, 82, 0, 0, 95, 
		    96, 5, 83, 0, 0, 96, 97, 5, 32, 0, 0, 97, 98, 5, 83, 0, 0, 98, 99, 
		    5, 84, 0, 0, 99, 100, 5, 65, 0, 0, 100, 101, 5, 82, 0, 0, 101, 102, 
		    5, 84, 0, 0, 102, 12, 1, 0, 0, 0, 103, 104, 5, 86, 0, 0, 104, 105, 
		    5, 65, 0, 0, 105, 106, 5, 82, 0, 0, 106, 107, 5, 83, 0, 0, 107, 108, 
		    5, 32, 0, 0, 108, 109, 5, 69, 0, 0, 109, 110, 5, 78, 0, 0, 110, 111, 
		    5, 68, 0, 0, 111, 14, 1, 0, 0, 0, 112, 116, 7, 0, 0, 0, 113, 115, 
		    7, 1, 0, 0, 114, 113, 1, 0, 0, 0, 115, 118, 1, 0, 0, 0, 116, 114, 
		    1, 0, 0, 0, 116, 117, 1, 0, 0, 0, 117, 16, 1, 0, 0, 0, 118, 116, 1, 
		    0, 0, 0, 119, 120, 5, 73, 0, 0, 120, 121, 5, 78, 0, 0, 121, 133, 5, 
		    84, 0, 0, 122, 123, 5, 83, 0, 0, 123, 124, 5, 84, 0, 0, 124, 125, 
		    5, 82, 0, 0, 125, 126, 5, 73, 0, 0, 126, 127, 5, 78, 0, 0, 127, 133, 
		    5, 71, 0, 0, 128, 129, 5, 67, 0, 0, 129, 130, 5, 72, 0, 0, 130, 131, 
		    5, 65, 0, 0, 131, 133, 5, 82, 0, 0, 132, 119, 1, 0, 0, 0, 132, 122, 
		    1, 0, 0, 0, 132, 128, 1, 0, 0, 0, 133, 18, 1, 0, 0, 0, 134, 135, 5, 
		    59, 0, 0, 135, 20, 1, 0, 0, 0, 136, 137, 5, 61, 0, 0, 137, 22, 1, 
		    0, 0, 0, 138, 139, 5, 40, 0, 0, 139, 24, 1, 0, 0, 0, 140, 141, 5, 
		    41, 0, 0, 141, 26, 1, 0, 0, 0, 142, 143, 5, 43, 0, 0, 143, 28, 1, 
		    0, 0, 0, 144, 145, 5, 45, 0, 0, 145, 30, 1, 0, 0, 0, 146, 147, 5, 
		    42, 0, 0, 147, 32, 1, 0, 0, 0, 148, 149, 5, 47, 0, 0, 149, 34, 1, 
		    0, 0, 0, 150, 152, 2, 48, 57, 0, 151, 150, 1, 0, 0, 0, 152, 153, 1, 
		    0, 0, 0, 153, 151, 1, 0, 0, 0, 153, 154, 1, 0, 0, 0, 154, 36, 1, 0, 
		    0, 0, 155, 157, 2, 65, 90, 0, 156, 155, 1, 0, 0, 0, 157, 158, 1, 0, 
		    0, 0, 158, 156, 1, 0, 0, 0, 158, 159, 1, 0, 0, 0, 159, 38, 1, 0, 0, 
		    0, 160, 162, 7, 2, 0, 0, 161, 160, 1, 0, 0, 0, 162, 163, 1, 0, 0, 
		    0, 163, 161, 1, 0, 0, 0, 163, 164, 1, 0, 0, 0, 164, 40, 1, 0, 0, 0, 
		    165, 166, 7, 3, 0, 0, 166, 167, 1, 0, 0, 0, 167, 168, 6, 20, 0, 0, 
		    168, 42, 1, 0, 0, 0, 6, 0, 116, 132, 153, 158, 163, 1, 6, 0, 0];
		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;
		public function __construct(CharStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new LexerATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
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

		public static function vocabulary(): Vocabulary
		{
			static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
		}

		public function getGrammarFileName(): string
		{
			return 'Kotan.g';
		}

		public function getRuleNames(): array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN(): array
		{
			return self::SERIALIZED_ATN;
		}

		/**
		 * @return array<string>
		 */
		public function getChannelNames(): array
		{
			return self::CHANNEL_NAMES;
		}

		/**
		 * @return array<string>
		 */
		public function getModeNames(): array
		{
			return self::MODE_NAMES;
		}

		public function getATN(): ATN
		{
			return self::$atn;
		}

		public function getVocabulary(): Vocabulary
		{
			return self::vocabulary();
		}
	}
}
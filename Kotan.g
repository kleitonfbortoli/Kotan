grammar Kotan;

options {
  superClass=KotanCustonParser;
}


@parser::header {
	require_once 'vendor/autoload.php';
	use Parser\KotanCustonParser;
	use Controller\ContextController;
}

/*
* 0 ou mais
+ 1 ou mais
? 0 ou 1
*/

/* program start */
prog		@init{ContextController::startContext("Program");}
			@after{ContextController::endContext();}
			:	'PROGRAM START'
					cod_script +
				'PROGRAM END'
			;

cod_script	: (var_attr | var_rattr | show | conditional | laco)
			;
/* program end */

/* native functions start */
show		@init{ContextController::startContext("Show");}
			@after{ContextController::endContext();}
			:
				'SHOW'
				(
					T_OP
						( text_value | expr )
					T_CP
				)
				T_PVirg
			;

text_value	@init{ContextController::startContext("String");}
			@after{ContextController::endContext();}
			:
				T_Text {ContextController::setValue(\$localContext->getText());}
			;
numValue	@init{ContextController::startContext("Num");}
			@after{ContextController::endContext();}
			:
				T_Num {ContextController::setValue(\$localContext->getText());}
			;

input_int	@init{ContextController::startContext("InputInt");}
			@after{ContextController::endContext();}
			:
			'InputInt' T_OP T_CP
			;

var_attr	@init{ContextController::startContext("Assignment");}
			@after{ContextController::endContext();}
			:
				T_Let
				var_name
				T_Attr
				value_attr
				T_PVirg
			;

var_rattr	@init{ContextController::startContext("ReAssignment");}
			@after{ContextController::endContext();}
			:
				var_name
				T_Attr
				expr
				T_PVirg
			;

type		: T_Type;

var_name	:
				T_Var {ContextController::setName(\$localContext->getText());}
			;

value_attr	:
				T_Num {ContextController::setValue(\$localContext->getText());}
			;

/* expressions start */
expr		@init{ContextController::startContext("Expression");}
			@after{ContextController::endContext();}
			:
				termo
				(
					(
						T_Soma {\$context_operator = "Sum";}
						| T_Sub {\$context_operator = "Subtraction";}
					)
					termo
					{ContextController::shortContext(\$context_operator);}
				)*
			;
termo		:
				fator
				(
					(
						T_Mult {\$context_operator = "Multiplication";}
						// | T_Div {\$context_operator = "Division";}
					)
					fator
					{ContextController::shortContext(\$context_operator);}
				)*
			;
fator		:
				(
					var_value
					| input_int
					| const_value
					| numValue
					| (
						T_OP
						expr
						T_CP
					)
				)
			;

var_value	@init{ContextController::startContext("Var");}
			@after{ContextController::endContext();}
			:
				T_Var {ContextController::setValue(\$localContext->getText());}
			;

const_value	@init{ContextController::startContext("Var");}
			@after{ContextController::endContext();}
			:
				T_Const {ContextController::setValue(\$localContext->getText());}
			;

conditional	@init{ContextController::startContext("Conditional");}
			@after{ContextController::endContext();}
			:
				'IF'
				T_OP
				condition
				T_CP
				T_OC
				(cod_script)+
				T_CC
			;

condition	@init{ContextController::startContext("Condition");}
			@after{ContextController::endContext();}
			:
				(
					expr
					(
						T_Eq {\$logicalOperator = 'Equal';}
						| T_NEq {\$logicalOperator = 'NotEqual';}
						| T_BoEq {\$logicalOperator = 'BigOrEqual';}
						| T_LoEq {\$logicalOperator = 'LowOrEqual';}
						| T_Big {\$logicalOperator = 'Big';}
						| T_Low {\$logicalOperator = 'Low';}
					)
					expr
					{ContextController::setLogicalOperator(\$logicalOperator);}
				)
				| (
					T_OP
						condition
					T_CP
				)

			;

laco		@init{ContextController::startContext("Laco");}
			@after{ContextController::endContext();}
			:
				'WHILE'
				T_OP
				condition
				T_CP
				T_OC
				(cod_script)+
				T_CC
			;
logic_stat	:
				( T_And | T_Or )
			;
/* expressions end */

T_Eq	:'==';
T_NEq	:'!=';
T_BoEq	:'=>';
T_LoEq	:'=<';
T_Big	:'>';
T_Low	:'<';

T_And	: 'AND';
T_Or	: 'OR';

T_Let	: 'let';

T_Var	: ('a'..'z' | 'A'..'Z') ('a'..'z' | 'A'..'Z' | '0'..'9')*
		;

T_Type 	: 	'INT'
			| 'STRING'
			| 'CHAR'
			// | 'FLOAT' {}
			// | 'DOUBLE' {}
		;

T_PVirg	: ';'
		;

T_Attr	: '='
		;

T_OP	: '('
		;

T_CP	: ')'
		;

T_OC	: '{'
		;

T_CC	: '}'
		;

T_Soma	: '+'
		;

T_Sub	: '-'
		;

T_Mult	: '*'
		;

T_Div	: '/'
		;

T_Num	: ('0'..'9')+
		;

T_Const	: ('A'..'Z')+
		;

T_Text	: '"' ~('"')* '"'
		;

T_Blank	: (' '|'\t'|'\r'|'\n')+ -> skip
		;
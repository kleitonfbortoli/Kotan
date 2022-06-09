grammar Kotan;

options {
  superClass=KotanCustonParser;
}


@parser::header {
require_once 'vendor/autoload.php';
use Parser\KotanCustonParser;
use \Controller\ContextController;

new ContextController();
}

/*
* 0 ou mais
+ 1 ou mais
? 0 ou 1
*/

/* program start */
prog
	//  @init{asdas}
	//  @after{asdas}
	:	'PROGRAM START'
					{ContextController::startContext("Program");}
					prog_script
					{ContextController::endContext();}
				'PROGRAM END'
			;

prog_script	: vars_def cod_block //(funcs_def)? (classes_def)?
			;
cod_block	:	'COD START'
				cod_script +
				'COD END'
			;

cod_script	: show | attr
			;

attr		: (
				T_Var {\$context_attr = "Var";}
				| T_Const {\$context_attr = "Const";}
			)
			T_Attr
				{ContextController::startContext(\$context_attr);}
				expr
				{ContextController::endContext();}
			T_PVirg
			;
/* program end */

/* native functions start */
show 		:	'SHOW'
				(
					T_OP
					{ContextController::startContext("Show");}
						(T_Soma | numValue)
					{ContextController::endContext();}
					T_CP
				)
				T_PVirg
			;

text_value	:	T_Num
				{ContextController::startPropertieContext("STRING_VALUE");}
				{ContextController::startContext("String");}
				{ContextController::setValue(\$localContext->getText());}
				{ContextController::endContext();}
				{ContextController::endPropertieContext();}
			;
numValue	:	T_Num
				{ContextController::startPropertieContext("NUM_VALUE");}
				{ContextController::startContext("Num");}
				{ContextController::setValue(\$localContext->getText());}
				{ContextController::endContext();}
				{ContextController::endPropertieContext();}
			;

/* vars cod start */
vars_def	: 'VARS START' (value_attr)+ 'VARS END'
			;

value_attr	: T_Var T_Type T_Attr expr T_PVirg
			;
/* vars cod end */

/* expressions start */
expr		: 	{ContextController::startPropertieContext("EXPRESSION");}
				termo
				(
					(
						T_Soma
						| T_Sub
					)
					termo
				)*
				{ContextController::endPropertieContext();}
			;
termo		: 	fator
				(
					(
						T_Mult
						| T_Div
					)
					fator
				)*
			;
fator		:
				(
					T_Var {ContextController::shortContext("Var");}
					| T_Const {ContextController::shortContext("Var");}
					| T_Num {ContextController::startContext("String");}
							{ContextController::setValue(\$localContext->getText());}
							{ContextController::endContext();}
					| (T_OP expr T_CP)
				)
			;
/* expressions end */


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

T_Text	: ('a'..'z' | 'A'..'Z' | '0'..'9' | ' ')+
		;

T_Blank	: (' ' | '\n' | '\r' | '\t') -> skip
		;
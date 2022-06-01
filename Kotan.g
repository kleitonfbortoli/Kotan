grammar Kotan;

@header {
	require_once 'vendor/autoload.php';

	use \Controller\ContextController;

	new ContextController();
}

/*
* 0 ou mais
+ 1 ou mais
? 0 ou 1
*/

/* program start */
prog		:	'PROGRAM START' {ContextController::startContext("Program");}
				prog_script
				'PROGRAM END' {ContextController::endContext();}
			;

prog_script	: vars_def cod_block //(funcs_def)? (classes_def)?
			;
cod_block	:	'COD START'
				cod_script +
				'COD END'
			;

cod_script	: show | attr
			;

attr		: (T_Var | T_Const) T_Attr expr T_PVirg
			;
/* program end */

/* native functions start */
show 		:	'SHOW' {ContextController::startContext("Show");}
				T_OP
					text_value
				T_CP
				T_PVirg {ContextController::endContext();}
			;

text_show  : 	{ContextController::startPropertieContext("STRING_VALUE");}
				text_value
				{ContextController::endPropertieContext();}
			;

text_value	:	{ContextController::startContext("String");}
				T_Num
				{ContextController::endContext("Show");}
			;

/* vars cod start */
vars_def	: 'VARS START' (value_attr)+ 'VARS END'
			;

value_attr	: T_Var T_Type T_Attr expr T_PVirg
			;
/* vars cod end */

/* expressions start */
expr		: termo ((T_Soma | T_Sub) termo)*
			;
termo		: fator ((T_Mult | T_Div) fator)*
			;
fator		: T_Var | T_Const | T_Num | (T_OP expr T_CP)
			;
/* expressions end */


T_Var	: ('a'..'z' | 'A'..'Z') ('a'..'z' | 'A'..'Z' | '0'..'9')*
		;

T_Type 	: 	'INT' {}
			| 'STRING' {}
			| 'CHAR' {}
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

T_Soma	: '+' {}
		;

T_Sub	: '-' {}
		;

T_Mult	: '*' {}
		;

T_Div	: '/' {}
		;

T_Num	: ('0'..'9')+ {}
		;

T_Const	: ('A'..'Z')+ {}
		;

T_Text	: ('a'..'z' | 'A'..'Z' | '0'..'9' | ' ')+
		;

T_Blank	: (' ' | '\n' | '\r' | '\t') -> skip
		;
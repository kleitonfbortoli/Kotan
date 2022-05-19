grammar Kotan;

@header {
	require_once 'vendor/autoload.php';
}

/*
* 0 ou mais
+ 1 ou mais
? 0 ou 1
*/

/* program start */
prog		: 'PROGRAM START' prog_script 'PROGRAM END'
			;

prog_script	: (const_def)? (sgvars_def)? (cod_block)? //(funcs_def)? (classes_def)?
			;
cod_block	: 'COD START' (show | attr) 'COD END'
			;
attr		: (T_Var | T_Const) T_Attr expr T_PVirg
			;
/* program end */

/* native functions start */
show 		: 'SHOW' T_OP expr T_CP T_PVirg
			;
/* native functions end */

/* Constants cod start */
const_def	: 'CONSTS VARS START' (const_attr)+ 'CONSTS VARS END'
			;
const_attr	: T_Const T_Attr expr T_PVirg
			;
/* Constants cod end */

/* vars cod start */
sgvars_def	: 'SGLOBAL VARS START' (value_attr)+ 'SGLOBAL VARS END'
			;
gvars_def	: 'GLOBAL VARS START' (value_attr)+ 'GLOBAL VARS END'
			;
vars_def	: 'VARS START' (value_attr)+ 'VARS END'
			;
value_attr	: T_Var T_Attr expr T_PVirg
			;
/* vars cod end */

/* expressions start */
expr		: termo ((T_Soma | T_Sub) termo)*
			;
termo		: fator ((T_Mult | T_Div) fator)*
			;
fator		: T_Var | T_Const | T_Num | T_Text | T_OP expr T_CP
			;
/* expressions end */


T_Var	: ('a'..'z' | 'A'..'Z') ('a'..'z' | 'A'..'Z' | '0'..'9')*
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

T_Text	: '"' ('a'..'z' | 'A'..'Z' | '0'..'9' | ' ') '"'
		;

T_Blank	: (' ' | '\n' | '\r' | '\t') -> skip
		;
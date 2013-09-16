<?php 
/*
Naming/ID of objects EXAMPLE:

eg:				register_textboxfullname

info:			(section/page) _ (type/class) (name)

length:			[3] _ [3] [2-10]
*/

echo 
Form::open('login')
.
	Form::input('log_txtemail',NULL,
		array(	'class' => 'txtbox rad5 logintxtbox',
				'id' => 'log_txtemail',
				'placeholder' => 'Email'))
	.
	Form::password('log_txtpass',NULL,
		array(	'class' => 'txtbox rad5 logintxtbox',
				'id' => 'log_txtpass',
				'placeholder' => 'Password'))
	.
	Form::submit('save', 'Login',
		array(	'class' => 'btn_blue rad5 rad15hover',
				'id' => 'log_btn'))
.
Form::close();

?>
<?php 
/*
Naming/ID of objects RULES:

eg:				register_textboxfullname

info:			(section/page) _ (type/class) (db name)

length:			[3] _ [3] [2-10]
*/

echo 
Form::open('user') //User::register()
.
	Form::input('reg_txtfname',NULL,
		array( 	'class' => 'txtbox rad5',
				'id' => 'reg_txtfname',
				'placeholder' => 'Full Name')) //FULL NAME
	.
	Form::input('reg_txtemail',NULL,
		array( 'class' => 'txtbox rad5',
				'id' => 'reg_txtemail',
				'placeholder' => 'Email')) //EMAIL
	.
	Form::password('reg_txtpass',NULL,
		array(	'class' => 'txtbox rad5',
				'id' => 'reg_txtpass',
				'placeholder' => 'Password')) //PASSWORD
	.
	Form::password('reg_txtpass2',NULL,
		array(	'class' => 'txtbox rad5',
				'id' => 'reg_txtpass2',
				'placeholder' => 'Confirm Password')) //CONFIRM PASSWORD
	.
	Form::submit('save', 'Done',
		array(	'class' => 'btn skin_blue rad5 rad15hover',
				'id' => 'reg_btn')) //BUTTON (SUBMIT)
.
Form::close()
.
"<div id='reg_lbl'><a>Register</a></div>";
?>
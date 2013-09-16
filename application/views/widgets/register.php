<?php 
/*
Naming/ID of objects RULES:

eg:				register_textboxfullname

info:			(section/page) _ (type/class) (db name)

length:			[3] _ [3] [2-10]
*/

echo 
Form::open('user/register') //User::register()
.
	Form::input('fname',NULL,
		array( 	'class' => 'txtbox',
				'id' => 'reg_txtfname',
				'placeholder' => 'Full Name')) //FULL NAME
	.
	Form::input('email',NULL,
		array( 'class' => 'txtbox',
				'id' => 'reg_txtemail',
				'placeholder' => 'Email')) //EMAIL
	.
	Form::password('pass',NULL,
		array(	'class' => 'txtbox',
				'id' => 'reg_txtpass',
				'placeholder' => 'Password')) //PASSWORD
	.
	Form::password('regretypepassword',NULL,
		array(	'class' => 'txtbox',
				'id' => 'regretypepasstxt',
				'placeholder' => 'Re-Type Password')) //RE-TYPE PASSWORD
	.
	Form::submit('save', '  Register  ',
		array(	'class' => 'registerbtn blue',
				'id' => 'registerbtn blue')) //BUTTON (SUBMIT)
.
Form::close();
?>
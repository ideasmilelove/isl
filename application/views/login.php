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
	Form::input('emailtxt',NULL,
		array(	'class' => 'txtbox',
				'id' => 'emailtxt',
				'placeholder' => '  Email'))
	.
	Form::password('password',NULL,
		array(	'class' => 'txtbox',
				'id' => 'passtxt',
				'placeholder' => '  Password'))
	.
	Form::submit('save', '  Login  ',
		array(	'class' => 'loginbtn blue',
				'id' => 'loginbtn blue'))
.
Form::close();

?>
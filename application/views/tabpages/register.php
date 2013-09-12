<?php 

echo Form::open('register');
echo Form::input('regfullnametxt',NULL,array( 'class' => 'txtbox',
										'id' => 'fullnametxt',
										'placeholder' => '  Full Name'))
//echo Form::label('emaillbl', 'Email Address'); 
echo Form::input('regemailtxt',NULL,array( 'class' => 'txtbox',
										'id' => 'emailtxt',
										'placeholder' => '  Email')); 
 //echo Form::label('passwordlbl', 'Password');

echo Form::password('regpassword',NULL,array(	'class' => 'txtbox',
                              				'id' => 'passtxt',
                              				'placeholder' => '  Password')); 

echo Form::submit('save', '  Register  ',array('class' => 'registerbtn blue',
                              				'id' => 'registerbtn blue')); 
echo Form::close(); 

?>
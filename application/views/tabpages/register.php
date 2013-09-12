<?php 

echo Form::open('register');
echo Form::input('regfullnametxt',NULL,array( 'class' => 'txtbox',
										'id' => 'regfullnametxt',
										'placeholder' => '  Full Name'))
//echo Form::label('emaillbl', 'Email Address'); 
echo Form::input('regemailtxt',NULL,array( 'class' => 'txtbox',
										'id' => 'regemailtxt',
										'placeholder' => '  Email')); 
 //echo Form::label('passwordlbl', 'Password');

echo Form::password('regpassword',NULL,array(	'class' => 'txtbox',
                              				'id' => 'regpasstxt',
                              				'placeholder' => '  Password')); 
echo Form::password('regretypepassword',NULL,array(	'class' => 'txtbox',
                              				'id' => 'regretypepasstxt',
                              				'placeholder' => '  Re-Type Password')); 

echo Form::submit('save', '  Register  ',array('class' => 'registerbtn blue',
                              				'id' => 'registerbtn blue')); 
echo Form::close(); 

?>
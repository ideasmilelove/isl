<?php 

echo Form::open('login');
//echo Form::label('emaillbl', 'Email Address'); 
echo Form::input('emailtxt',NULL,array( 'class' => 'txtbox',
										'id' => 'emailtxt',
										'placeholder' => '  Email')); 
 //echo Form::label('passwordlbl', 'Password');

echo Form::password('password',NULL,array(	'class' => 'txtbox',
                              				'id' => 'passtxt',
                              				'placeholder' => '  Password')); 

echo Form::submit('save', '  Login  ',array('class' => 'loginbtn blue',
                              				'id' => 'loginbtn blue')); 
echo Form::close(); 

?>

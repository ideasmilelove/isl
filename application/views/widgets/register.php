<?php 
echo Form::open('user/register');
echo Form::input('regfullnametxt',NULL,
				array( 	'class' => 'txtbox',
						'id' => 'regfullnametxt',
						'placeholder' => '  Full Name')
					 );

echo Form::image(NULL, NULL, array(	'src' => 'media/img/register.jpg',
									'id' => 'registerbtn'));
//echo Form::label('emaillbl', 'Email Address'); 
echo Form::input('regemailtxt',NULL,array( 'class' => 'txtbox',
											'id' => 'regemailtxt',
											'placeholder' => '  Email')); 
 //echo Form::label('passwordlbl', 'Password');

echo "<br>";

echo Form::password('regpassword',NULL,array(	'class' => 'txtbox',
                              					'id' => 'regpasstxt',
                              					'placeholder' => '  Password')); 
echo Form::password('regretypepassword',NULL,array(	'class' => 'txtbox',
                              						'id' => 'regretypepasstxt',
                              						'placeholder' => '  Re-Type Password')); 

echo Form::submit('save', '  Register  ',array(	'class' => 'registerbtn blue',
                              					'id' => 'registerbtn blue')); 
echo Form::close(); 

/**/
?>
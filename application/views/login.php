
	<?php echo Form::open('login');?>
	<?php //echo Form::label('emaillbl', 'Email Address'); ?>
	<?php echo Form::input('emailtxt',NULL,
						array('class' => 'emailtxt',
                              'id' => 'emailtxt',
                              'placeholder' => '  Email')); ?>
	<?php //echo Form::label('passwordlbl', 'Password');  ?>

	<?php echo Form::password('password',NULL,						
								array('class' => 'passwordtxt',
                              			'id' => 'passwordtxt',
                              			'placeholder' => '  Password')); ?>
	<?php echo Form::submit('save', '  Login  ',
								array('class' => 'loginbtn blue',
                              			'id' => 'loginbtn blue')); ?>
	<?php echo Form::close(); ?>

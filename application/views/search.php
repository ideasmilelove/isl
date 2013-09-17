<?php
echo 
Form::open('login')
.
	Form::input('searchtxt',NULL,
		array(	'class' => 'txtbox rad5',
				'id' => 'txtsearch',
				'placeholder' => 'Search'))
	.
	Form::submit('save', 'Q',
		array(	'class' => 'btn_blue rad15 rad5hover',
				'id' => 'btn_search'))
.
Form::close();
?>
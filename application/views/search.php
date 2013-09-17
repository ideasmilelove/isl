<?php
echo 
Form::open('login')
.
	Form::input('searchtxt',NULL,
		array(	'class' => 'txtbox rad5',
				'id' => 'searchtxt',
				'placeholder' => 'Search'))
	.
	Form::submit('save', 'Search',
		array(	'class' => 'searchbtn_blue rad5 rad15hover',
				'id' => 'search_btn'))
.
Form::close();
?>
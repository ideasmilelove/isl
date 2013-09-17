<?php
/*
Naming/ID of objects EXAMPLE:

eg:				register_textboxfullname

info:			(section/page) _ (type/class) (name)

length:			[3] _ [3] [2-10]
*/

echo 
"<div class='txtbox rad5'>"
.
	Form::open('login')
	.
		Form::input('search_txt',NULL,
			array(	'class' => 'skin_clear',
					'id' => 'search_txt',
					'placeholder' => 'Search'))
		.
		Form::image('save', "s",
			array(	'src' => "media/img/search.png",
					'class' => 'skin_clear',
					'id' => 'search_btn'))
	.
	Form::close()
.
"</div>";
?>
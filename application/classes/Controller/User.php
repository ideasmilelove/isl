<?php

class Controller_User extends Controller {

	public function action_index()
	{
		$this->response->body('lowww');
	}
 public function action_register(){
 	$this->response->body('weee');
 	$fname = $_POST['reg_txtfname'];
 	$pass = $_POST['reg_txtpass'];
 	$email = $_POST['reg_txtemail'];

 	$user = Model::factory('Crud');

 	$d = array(	'email' => $email,
				'username' => $fname,
				'password' => $pass);

 	$user->insert('isl',$d);

 }
}
?>
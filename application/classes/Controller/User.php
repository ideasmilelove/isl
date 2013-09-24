<?php

class Controller_User extends Controller {

 public function action_register(){
 	$this->response->body('weee');
 	$fname = $_POST['reg_txtfname'];
 	$pass = $_POST['reg_txtpass'];
 	$email = $_POST['reg_txtemail'];

 	$user = ORM::factory('user');

 	$user->email=$email;
 	$user->username=$fname;
 	$user->password=$pass;
 	$user->save();
 	/*$d = array(	'email' => $email,
				'username' => $fname,
				'password' => $pass);

 	$user->insert('isl',$d);
*/
 }
}
?>
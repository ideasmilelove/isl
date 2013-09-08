<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Template extends Controller {

    public function before()
    {
        // If this user doesn't have the admin role, and is not trying to login, redirect to login
        if ( ! Auth::instance()->logged_in('admin') AND !Auth::instance()->logged_in('login'))
        {
			$this->response->body(View::factory('test')); 
			// This will load views/hello/world.php
        }
    }
	public function action_index()
	{

		//$this->request->response = View::factory('test');
		//$this->response->body('hello, world!');
	}

} // End Welcome

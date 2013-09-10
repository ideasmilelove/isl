<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Template extends Controller {
public $template = 'layout';
    public function before()
    {
    	 parent::before();


        // If this user doesn't have the admin role, and is not trying to login, redirect to login
        //if ( ! Auth::instance()->logged_in('admin') AND !Auth::instance()->logged_in('login'))
        //{
			$this->response->body(View::factory('frontpage')); 
			// This will load views/hello/world.php
        //}

		/*if(!isset($this->page_title))
			$this->page_title = "IdeaSmileLove";
		if(!isset($this->copyright))
			$this->copyright = "©2013 IdeaSmileLove Inc.";

		View::bind_global('title', $this->page_title);
        View::bind_global('copyright',$this->copyright);

		$this->template->contentStuff = View::factory('frontpage');*/
    }
	public function action_index()
	{

		//$this->request->response = View::factory('test');
		//$this->response->body('hello, world!');
	}

} // End Welcome

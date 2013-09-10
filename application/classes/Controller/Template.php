<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Template extends Kohana_Controller_Template {
public $template = 'layout';
    public function before()
    {
    	 parent::before();

		if(!isset($this->page_title))
			$this->page_title = "IdeaSmileLove";
		if(!isset($this->copyright))
			$this->copyright = "©2013 IdeaSmileLove Inc.";

		View::bind_global('title', $this->page_title);
        View::bind_global('copyright',$this->copyright);

		$this->template->contentStuff = View::factory('frontpage');
    }
	public function action_index()
	{

	}

} // End Welcome

<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Template extends Kohana_Controller_Template {
public $template = 'layout';
	public function show_logo()
	{
		echo "asd";
	    $image = new Image('media/img/bg2.jpg');
	    $image->render();
	}
    public function before()
    {
    	 parent::before();

		if(!isset($this->page_title))
			$this->page_title = "IdeaSmileLove";
		if(!isset($this->copyright))
			$this->copyright = "©".date("Y")." IdeaSmileLove Inc.";
		if(!isset($this->logo))
			$this->logo = "media/img/bg2.jpg";

		View::bind_global('title', $this->page_title);
        View::bind_global('copyright',$this->copyright);
        View::bind_global('logo',$this->logo);

        $this->template->search= View::factory('search');
		$this->template->loginandprofileform = View::factory('login');
		$this->template->register = View::factory('widgets/register');
		$this->template->contentStuff = View::factory('frontpage');
    }
	public function action_index()
	{

	}

} // End Welcome

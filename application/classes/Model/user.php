<?php 
	class Model_user extends ORM {  
        //set to choose the table that you will be using
		protected $_table_name = 'users';
        //this is to set the rules that you want to verify before inserting to the database
        //this is to remove auto adding of s to the end of table name that you will be searching
	    public function __construct() {
	    	$this->_table_names_plural = false;
	    	parent::__construct();
	    }
	}
?>
<?php

class Home extends Front_Controller{
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this->template	->set('menu_title', 'Home')
							->set('menu_group', 'active')
							->build('index');
	}
	
}
?>
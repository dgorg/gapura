<?php

class About extends Front_Controller{
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this->template	->set('menu_title', 'About')
						->build('about');
	}
	
	public function mekanisme(){
		$this->template	->set('menu_title', 'Mekanisme')
						->build('mekanisme');
	}
	
	public function tim(){
		$name =  $this->uri->segment(3);
		if(!$name) { $name="";}else{ $name="_".$name;}
		$this->template	->set('menu_title', 'Tim')
						->build('tim'.$name);
	}
	
	public function adit(){
		$this->template	->set('menu_title', 'Tim')
						->build('tim');
	}
}
?>
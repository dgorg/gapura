<?php

class How extends Front_Controller{
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this->template	->set('menu_title', 'Bagaimana Kami Bekerja')
						->build('how');
	}
	
	public function mitra(){
		$this->template	->set('menu_title', 'Mitra')
						->build('mitra');
	}
	public function faq(){
		$name =  $this->uri->segment(3);
		if(!$name){ $name="";}else{ $name="_".$name;}		
		$this->template	->set('menu_title', 'Tanya Jawab')
						->build('faq'.$name);
	}
	public function kontak(){
		if($this->postcontact()){
			$this->session->set_flashdata('message', 'success|Pesan telah dikirim');
			redirect($this->module.'/how/kontak');
		}
		
		$this->template	->set('menu_title', 'Kontak')
						->build('kontak');
	}
	
	private function postcontact(){	
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('name', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('telp', 'Telp', 'required');
		$this->form_validation->set_rules('message', 'Pesan', 'required');
		
		if($this->form_validation->run() === TRUE){
			$name  		= $this->input->post('name');
			$email  	= $this->input->post('email');
			$telp  		= $this->input->post('telp');
			$message  	= nl2br($this->input->post('message'));
			
			$to="halo@dukungguruku.org";
			$content .= "<table cellpadding='5'>";
			$content .= "<tr><td>Nama Lengkap</td><td> : $name</td></tr>";
			$content .= "<tr><td>Email</td><td> : $email</td></tr>";
			$content .= "<tr><td>Telp</td><td> : $telp</td></tr>";
			$content .= "<tr><td>Pesan</td><td> : $message</td></tr>";
			$content .= "</table>";
			
			$headers = "From: DukungGuruku.org <noreply@DukungGuruku.org>" . "\r\n";
			$headers .= "Reply-To: $to" . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			
			$subject="New Contact from Web DukungGuruku.org";
			$send = mail( $to, $subject, $content, $headers );  
			return true;
		}
		
	}
}
?>
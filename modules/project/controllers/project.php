<?php

class Project extends Front_Controller{
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this->template	->set('menu_title', 'Project')
						->build('project');
	}
	
	public function project2(){
		$this->template	->set('menu_title', 'Project')
						->build('project2');
	}
	
	public function donation(){
		$this->template	->set('menu_title', 'Donation')
						->build('donation');
	}
	public function donation_success(){
		$this->template	->set('menu_title', 'Donation')
						->build('donation_success');
	}
	
	public function konfirmasi(){
		if($this->save_konfirmasi()){
			$this->session->set_flashdata('message', 'Konfirmasi telah dikirim');
			redirect('project/konfirmasi');
		}
		
		
		$this->template	->set('menu_title', 'Konfirmasi Donasi')
						->build('konfirmasi');
	}
	
	private function save_konfirmasi(){
		//set form validation
		$this->form_validation->set_rules('name', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('nominal', 'Nominal Donasi', 'required');
	
	
		if($this->form_validation->run() === TRUE){
			$id = $this->input->post('content_id');
	
			//process the form
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$tanggal = $this->input->post('tanggal');
			$nominal = $this->input->post('nominal');
			$rekening = $this->input->post('rekening');
			$bank = $this->input->post('bank');
			$pemilik = $this->input->post('pemilik');
			//send email
			$to="halo@dukungguruku.org";
			$headers = "From: $name <$email>" . "\r\n";
			$headers .= "Reply-To: $to" . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			
			$msg = "<h2><u>Konfirmasi Pembayaran</u></h2>";
			$msg .= "<table>";
			$msg .= "<tr><td>Nama Lengkap</td><td> : $name </td></tr>";
			$msg .= "<tr><td>Email</td><td> : $email</td></tr>";
			$msg .= "<tr><td>Tanggal</td><td> : $tanggal</td></tr>";
			$msg .= "<tr><td>Nominal</td><td> : $nominal</td></tr>";
			$msg .= "<tr><td>No Rekening</td> : $rekening<td></td></tr>";
			$msg .= "<tr><td>Nama Bank</td><td> : $bank</td></tr>";
			$msg .= "<tr><td>Nama Pemilik Rekening</td><td> : $pemilik</td></tr>";
			$msg .= "</table>";
			$msg .= "<br/>";
			$msg .= "<br/>";
			$msg .= "<i>dukungguruku.org</i>";
			$content = $msg;
			$subject="[KONFIRMASI] Donasi";
			$send = mail( $to, $subject, $content, $headers );  
			
			if($send) { 
				return true;
			}
		
		}
		
		
	}
}
?>
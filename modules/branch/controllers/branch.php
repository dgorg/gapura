<?php

class Branch extends Front_Controller{
	
	private $per_page 	= '10';
	private $title 		= 'Branch';
	private $module 	= 'branch';
	
	
	public function __construct(){
		parent::__construct();
		$this->load->model('group_model');
		$this->load->model('clients_model');
		$this->load->model('officer_model');
		$this->load->model('area_model');
		$this->load->model('branch_model');
		$this->load->model('report_model');
		$this->load->model('saving_model');
		$this->load->model('clients_pembiayaan_model');
		$this->load->model('kas_model');
		$this->load->model('tabwajib_model');
		$this->load->model('tabsukarela_model');
		$this->load->model('tabberjangka_model');
		
		$this->load->library('pagination');	
	}
	
	public function index($page='0'){
		if($this->session->userdata('logged_in'))
		{
			$total_rows = $this->group_model->count_all($this->input->post('q'));
			
			//pagination
			$config['base_url']     = site_url($this->module.'/all');
			$config['total_rows']   = $total_rows;
			$config['per_page']     = 15; 
			$config['uri_segment']  = 3;
			$config['suffix'] 		= '?' . http_build_query($_GET, '', "&");
			$config['first_url'] 	= $config['base_url'] . $config['suffix'];
			$config['num_links'] = 2;
			$config['full_tag_open'] = '<li>';
			$config['full_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li><a href="#"><b>';
			$config['cur_tag_close'] = '</b></a></li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';
			
			$this->pagination->initialize($config);
			$no =  $this->uri->segment(3);
			
			//$group = $this->group_model->get_group()->result();	
			$group = $this->group_model->get_all_group( $config['per_page'] ,$page,$this->input->post('q'));			
				
			$this->template	->set('menu_title', 'Data Majelis')
							->set('menu_group', 'active')
							->set('group_total',$config['total_rows'])
							->set('group', $group)
							->set('no', $no)
							->set('config', $config)
							->build('group');
		}
		else
		{
		  //If no session, redirect to login page
		  redirect('login', 'refresh');
		}
	}
	
	public function group($page='0'){
		if($this->session->userdata('logged_in'))
		{	
			//Cek User Login Branch
			$user_branch = $this->session->userdata('user_branch');
			
			//Get Total Group Row 
			if($user_branch != 0){
				$total_rows = $this->group_model->count_all_group_branch($this->input->post('q'),$user_branch);
			}else{
				$total_rows = $this->group_model->count_all_group($this->input->post('q'));
			}
			//pagination
			$config['base_url']     = site_url($this->module.'/group');
			$config['total_rows']   = $total_rows;
			$config['per_page']     = 15; 
			$config['uri_segment']  = 3;
			$config['suffix'] 		= '?' . http_build_query($_GET, '', "&");
			$config['first_url'] 	= $config['base_url'] . $config['suffix'];
			$config['num_links'] = 2;
			$config['full_tag_open'] = '<li>';
			$config['full_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li><a href="#"><b>';
			$config['cur_tag_close'] = '</b></a></li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';
			
			$this->pagination->initialize($config);
			$no =  $this->uri->segment(3);
			
			if($user_branch != 0){	
				$group = $this->group_model->get_all_group_branch( $config['per_page'] ,$page,$this->input->post('q'),$user_branch);			
			}else{
				$group = $this->group_model->get_all_group( $config['per_page'] ,$page,$this->input->post('q'));	
			}	
			$this->template	->set('menu_title', 'Data Majelis')
							->set('menu_branch', 'active')
							->set('group_total',$config['total_rows'])
							->set('group', $group)
							->set('no', $no)
							->set('config', $config)
							->build('group');
		}
		else
		{
		  //If no session, redirect to login page
		  redirect('login', 'refresh');
		}
	}
	
	public function group_create(){
		if($this->save_group()){
			$this->session->set_flashdata('message', 'success|Majelis telah ditambahkan');
			redirect($this->module.'/group');
		}
			
			$user_branch = $this->session->userdata('user_branch');
			
			if($user_branch != 0){	
				$branch = $this->branch_model->get_branch($user_branch)->result();
				$area = $this->branch_model->get_branch($user_branch)->result();	
				$officer = $this->officer_model->get_all_officer_by_branch($user_branch);
			}else{
				$branch = $this->branch_model->get_all()->result();
				$area = $this->area_model->get_all()->result();
				
				//$officer = $this->officer_model->get_all_officer()->result();
			}
			
			
			$this->template	->set('menu_title', 'Registrasi Majelis')
							->set('officer', $officer)
							->set('branch', $branch)
							->set('area', $area)
							->set('menu_branch', 'active')
							->build('group_form');	
		
	}
	
	public function group_edit(){
		$id =  $this->uri->segment(3);
		//$data = $this->group_model->find($id);
		
		if($this->save_group()){
			$this->session->set_flashdata('message', 'success|Majelis telah diedit');
			redirect($this->module.'/group');
		}
		//GET SPECIFIC PROJECT
		$data = $this->group_model->get_group($id)->result();
		$data = $data[0];
		
		$user_branch = $this->session->userdata('user_branch');
		$officer = $this->officer_model->get_all_officer( $config['per_page'] ,$page,$this->input->get('q'));
		$branch = $this->branch_model->get_branch($user_branch)->result();
		$this->template	->set('data', $data)
						->set('menu_title', 'Edit Majelis')
						->set('officer', $officer)
						->set('branch', $branch)
						->set('menu_branch', 'active')
						->build('group_form');	
	}
	
	public function group_view(){
		$id =  $this->uri->segment(3);
		
		//GET SPECIFIC PROJECT
		$data = $this->group_model->get_group($id)->result();
		$data = $data[0];
		$this->template	->set('data', $data)
						->set('menu_title', 'View Majelis')
						->set('menu_branch', 'active')
						->build('group_view');	
	}
	
	
	public function group_delete($id = '0'){
		$this->module = "group";
		$id =  $this->uri->segment(3);
			if($this->group_model->delete($id)){
				$this->session->set_flashdata('message', 'success|Majelis telah dihapus');
				redirect('branch/group');
				exit;
			}
	}	
	
	private function save_group(){
		
		//set form validation
		$this->form_validation->set_rules('group_area', 'Area', 'required');
		$this->form_validation->set_rules('group_branch', 'Kantor Cabang', 'required');
		$this->form_validation->set_rules('group_tpl', 'Petugas Pendamping', 'required');
		$this->form_validation->set_rules('group_name', 'Nama Majelis', 'required');
		$this->form_validation->set_rules('group_date', 'Tanggal Terbentuk', 'required');
		$this->form_validation->set_rules('group_leader', 'Ketua Majelis', 'required');
	
	
		if($this->form_validation->run() === TRUE){
			$id = $this->input->post('group_id');
			
			//CHECK GROUP NUMBER
			if($this->input->post('group_number') == "" OR $this->input->post('group_number') == NULL){
				//GENERATE GROUP NUMBER
					//1. GET AREA & BRANCH NUMBER
					$area_id=$this->input->post('group_area');
					$area = $this->area_model->get_area($area_id)->result();
					$area_number = $area[0]->area_code;
					
					$branch_id=$this->input->post('group_branch');
					
					//2. GET GROUP LAST NUMBER
					$group_lets_get_number = $this->group_model->get_group_by_branch($branch_id);
					$group_get_number = $group_lets_get_number[0]->group_number;
					$group_get_no = $group_lets_get_number[0]->group_no;
					
					//3. GET GROUP YEAR
					$group_branch = $this->input->post('group_branch');				
					
					//4. GET GROUP YEAR
					$group_year = $this->input->post('group_date');
					$group_year = substr($group_year, 2,3);
					
					//5. SET GROUP NUMBER
					//if(!$group_get_number){						
						$group_no = $group_get_no+1;
						$group_number = $area_number.$group_branch.$group_year;
						$group_number = $group_number*1000+$group_no;
						
						//$group_no = 1;
					//}else{						
						//$group_number = $group_get_number+1;
						//$group_no = $group_get_no+1;
					//}
				//END OF GENERATE ACCOUNT NUMBER	
			}else{
				$group_no=$this->input->post('group_no');
				$group_number=$this->input->post('group_number');
			}	
			
			//process the form
			$data = array(
					'group_name'       		=> $this->input->post('group_name'),
					'group_number' 			=> $group_number,	
					'group_no' 				=> $group_no,			
					'group_area'       		=> $this->input->post('group_area'),
					'group_branch'	    	=> $this->input->post('group_branch'),
					'group_leader'	    	=> $this->input->post('group_leader'),
					'group_leaderphone'	    => $this->input->post('group_leaderphone'),
					'group_date'	    	=> $this->input->post('group_date'),
					'group_kampung'	    	=> $this->input->post('group_kampung'),
					'group_desa'	    	=> $this->input->post('group_desa'),
					'group_rt'	    		=> $this->input->post('group_rt'),
					'group_tanggungrenteng'	=> $this->input->post('group_tanggungrenteng'),
					'group_frequency'  		=> $this->input->post('group_frequency'),
					'group_tpl'	 			=> $this->input->post('group_tpl'),
					'group_schedule_day'	=> $this->input->post('group_schedule_day'),
					'group_schedule_time'	=> $this->input->post('group_schedule_time'),
			);
				
			if(!$id){
				return $this->group_model->insert($data);
			}else{
				return $this->group_model->update($id, $data);
			} 
		}
	}
	
	
	//CLIENTS
	public function client($page='0')
	{
		if($this->session->userdata('logged_in'))
		{
			$user_branch = $this->session->userdata('user_branch');	
			if($user_branch != 0){				
				$total_rows = $this->clients_model->count_all_by_branch($this->input->get('q'),$user_branch);
			}else{
				$total_rows = $this->clients_model->count_all($this->input->get('q'));
			}
			//pagination
			$config['base_url']     = site_url($this->module.'/client');
			$config['total_rows']   = $total_rows;
			$config['per_page']     = 15; 
			$config['uri_segment']  = 3;
			//$config['suffix'] 		= '?' . http_build_query($_GET, '', "&");
			$config['first_url'] 	= $config['base_url'] . $config['suffix'];
			$config['num_links'] = 2;
			$config['full_tag_open'] = '<li>';
			$config['full_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li><a href="#"><b>';
			$config['cur_tag_close'] = '</b></a></li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';
			
			$this->pagination->initialize($config); 
			$no =  $this->uri->segment(3);
			if($user_branch != 0){	
				$clients = $this->clients_model->get_all_clients_by_branch( $config['per_page'] , $page, $this->input->post('q'), $this->input->post('key'), $user_branch);
			}else{
				$clients = $this->clients_model->get_all_clients( $config['per_page'] , $page, $this->input->post('q'), $this->input->post('key'));
			}
			$this->template	->set('menu_title', 'Data Anggota')
							->set('menu_branch', 'active')
							->set('clients', $clients)
							->set('list', $list)
							->set('no', $no)
							->set('config', $config)
							->build('clients');
		}
		else
		{
		  //If no session, redirect to login page
		  redirect('login', 'refresh');
		}
	}
	
	public function client_reg(){
		if($this->save_client()){
			$this->session->set_flashdata('message', 'success|Anggota Baru telah ditambahkan');
			redirect($this->module.'/client');
		}
		
		//Cek User Login Branch
		$user_branch = $this->session->userdata('user_branch');
		
		//Get Total Group Row 
		if($user_branch != 0){	
			$group = $this->group_model->get_list_group_by_branch($user_branch)->result();			
		}else{
			$group = $this->group_model->get_list_group()->result();	
		}
			
		$officer = $this->officer_model->get_all_officer();
		
		$this->template	->set('menu_title', 'Registrasi Anggota')
							->set('client', $data)
							->set('group', $group)
							->set('officer', $officer)
							->set('menu_branch', 'active')
							->build('client_register');	
		
	}
	
	public function client_unreg(){
		if($this->unreg_client()){
			$this->session->set_flashdata('message', 'success|Anggota telah dihapus');
			redirect($this->module.'/client');
		}
		
		//Cek User Login Branch
		$user_branch = $this->session->userdata('user_branch');
		
		if($user_branch != 0){	
			$group = $this->group_model->get_list_group_by_branch($user_branch)->result();	
			$officer = $this->officer_model->get_all_officer_by_branch($user_branch);
		}else{
			$group = $this->group_model->get_list_group()->result();	
			$officer = $this->officer_model->get_all_officer();
		}
			
		
		$this->template	->set('menu_title', 'Anggota Keluar')
							->set('client', $data)
							->set('group', $group)
							->set('officer', $officer)
							->set('menu_branch', 'active')
							->build('client_unregister');		
	}
	
	private function save_client(){
	
		$no = $this->input->post('no');
		if($no){
			for($i=1; $i<=$no; $i++){
				$client_reg 	= $this->input->post("client_reg_".$i);
				if($client_reg == "1"){
				
					//Generate Birth Date
					$client_birth_date 	= $this->input->post("client_birth_date_".$i);
					$client_birth_month = $this->input->post("client_birth_month_".$i);
					$client_birth_year 	= $this->input->post("client_birth_year_".$i);
					$client_birthdate = $client_birth_date."-".$client_birth_month."-".$client_birth_year;
					
					//Group
					$group_id =  $this->input->post("client_group_".$i);
					$group = $this->group_model->get_group($group_id)->result();
					$branch = $group[0]->group_branch;
					
					//GENERATE ACCOUNT NUMBER
				
						//1. GET GROUP NUMBER						
						$group_number = $group[0]->group_number;
						
						//2. GET CLIENT LAST ACCOUNT NUMBER
						$client_get_last_account = $this->clients_model->get_clientmax_by_group($group_id);
						$client_get_no = $client_get_last_account[0]->client_no;
						
						//3. SET CLIENT ACCOUNT NUMBER
						if(!$client_get_no){
							$client_account = $group_number."01";
							$client_no = 1;
						}else{
							$client_no = $client_get_no+1;
							$client_account = ($group_number * 100)+$client_no;
						}
						
					//END OF GENERATE ACCOUNT NUMBER	
					$officer_id = $group[0]->group_tpl;
					$data_client = array(
							'client_account'    	=> $client_account,
							'client_no'    			=> $client_no,
							'client_group'    		=> $this->input->post("client_group_".$i),
							'client_fullname' 		=> $this->input->post("client_name_".$i),
							'client_branch'     	=> $branch,
							'client_desa'     		=> $this->input->post("client_desa_".$i),
							'client_birthplace'    	=> $this->input->post("client_birth_place_".$i),
							'client_birthdate'     	=> $client_birthdate,
							'client_reg_date'     	=> $this->input->post("client_reg_date_".$i),
							'client_officer'     	=> $officer_id,
					);
					$this->clients_model->insert($data_client);
					$client_id=$this->db->insert_id();
					
					$timestamp=date("Y-m-d H:i:s");
					$data_saving = array(
							'saving_account'    	=> $client_account,
							'saving_client'    		=> $client_id,
							'saving_date'    		=> $timestamp,							
					);
					$this->saving_model->insert($data_saving);
					
					//TABUNGAN WAJIB
					$data_tabwajib = array(
							'tabwajib_account'    	=> $client_account,
							'tabwajib_client'    	=> $client_id,
							'tabwajib_date'    		=> $timestamp,							
					);
					$this->tabwajib_model->insert($data_tabwajib);
					
					//TABUNGAN SUKARELA
					$data_tabsukarela = array(
							'tabsukarela_account'    	=> $client_account,
							'tabsukarela_client'    	=> $client_id,
							'tabsukarela_date'    		=> $timestamp,							
					);
					$this->tabsukarela_model->insert($data_tabsukarela);
					
					//TABUNGAN BERJANGKA
					$tabberjangka_saving = array(
							'tabberjangka_account'    	=> $client_account,
							'tabberjangka_client'    	=> $client_id,
							'tabberjangka_date'    		=> $timestamp,							
					);
					$this->tabberjangka_model->insert($data_tabberjangka);
					
				}
			}	
			return true;
		}			 
	}
	
	private function unreg_client(){
	
		$no = $this->input->post('no');
		if($no){
			for($i=1; $i<=$no; $i++){
				$client_reg 	= $this->input->post("client_reg_".$i);
				if($client_reg == "1"){
				
					$client_id = $this->input->post("client_name_".$i);
					$data_client = array(
							'client_unreg_date'   	=> $this->input->post("client_unreg_date_".$i),
							'client_reason'   		=> $this->input->post("client_alasan_".$i),
							'client_status'   		=> '0',
							'client_pewawancara'   	=> $this->input->post("client_pewawancara_".$i),
							
					);
					return $this->clients_model->update($client_id,$data_client);
					
						
					
				}
			}	
		}			 
	}
	
	//AJAX GET CLIENT
	public function getclient()
	{
			$groupid=$this->input->post('name');			
			$table='tbl_clients';
			$where=array('client_group' => $groupid, 'deleted' => 0, 'client_status' => 1);
			$data['sc_get']=$this->clients_model->get_where_data($table,$where);
			$sc=json_encode($data['sc_get']);
			echo $sc;
	}
	
	
	
	//AJAX GET PEMBIAYAAN
	public function get_client_detail()
	{
			$client_id=$this->input->post('name');			
			$table='tbl_clients';
			//$where=array('client_id' => $client_id);
			$data['sc_get']=$this->clients_model->get_client_detail($client_id)->result();
			$sc=json_encode($data['sc_get']);
			echo $sc;
	}
	
	//CLIENTS
	public function pengajuan($page='0')
	{
		if($this->session->userdata('logged_in'))
		{
			$user_branch = $this->session->userdata('user_branch');	
			//Get Total Pengajuan 
			if($user_branch != 0){
				$total_rows = $this->clients_pembiayaan_model->count_all_pengajuan_by_branch($this->input->get('q'),$user_branch);
			}else{
				$total_rows = $this->clients_pembiayaan_model->count_all_pengajuan($this->input->get('q'));
			}			
			
				
			//pagination
			$config['base_url']     = site_url($this->module.'/client');
			$config['total_rows']   = $total_rows;
			$config['per_page']     = 15; 
			$config['uri_segment']  = 3;
			//$config['suffix'] 		= '?' . http_build_query($_GET, '', "&");
			$config['first_url'] 	= $config['base_url'] . $config['suffix'];
			$config['num_links'] = 2;
			$config['full_tag_open'] = '<li>';
			$config['full_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li><a href="#"><b>';
			$config['cur_tag_close'] = '</b></a></li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';
			
			$this->pagination->initialize($config); 
			$no =  $this->uri->segment(3);
			
			if($user_branch != 0){
				$clients = $this->clients_pembiayaan_model->get_all_pengajuan_by_branch( $config['per_page'] , $page, $this->input->post('q'), $this->input->post('key'), $user_branch);
			}else{
				$clients = $this->clients_pembiayaan_model->get_all_pengajuan( $config['per_page'] , $page, $this->input->post('q'), $this->input->post('key'));
			}			
			
			

			$this->template	->set('menu_title', 'Pengajuan Pembiayaan')
							->set('menu_branch', 'active')
							->set('clients', $clients)
							->set('no', $no)
							->set('config', $config)
							->build('pengajuan');
		}
		else
		{
		  //If no session, redirect to login page
		  redirect('login', 'refresh');
		}
	}
	
	public function pengajuan_reg(){
		if($this->save_pengajuan()){
			$this->session->set_flashdata('message', 'success|Pembiayaan telah ditambahkan');
			redirect($this->module.'/pengajuan');
		}
		
		//Cek User Login Branch
		$user_branch = $this->session->userdata('user_branch');
		
		//Get Total Group Row 
		if($user_branch != 0){	
			$group = $this->group_model->get_list_group_by_branch($user_branch)->result();			
		}else{
			$group = $this->group_model->get_list_group()->result();	
		}
		
		$this->template	->set('menu_title', 'Pengajuan Pembiayaan')
						->set('group', $group)
						->set('menu_branch', 'active')
						->build('pengajuan_register');	
		
	}
	
	private function save_pengajuan(){
	
		$no = $this->input->post('no');
		if($no){
			for($i=1; $i<=$no; $i++){
				$client_reg 	= $this->input->post("client_reg_".$i);
				
				if($client_reg == "1"){					
					$client_id = $this->input->post("client_name_".$i);
					$plafond = $this->input->post("client_plafond_".$i);
					if($client_id AND $plafond){
					
						//INSERT PEMBIAYAAN
						$data_pembiayaan = array(
								'data_client'    	=> $this->input->post("client_name_".$i),
								'data_tgl'    		=> $this->input->post("client_pengajuan_date_".$i),
								'data_date_accept'  => $this->input->post("client_pencairan_date_".$i),
								'data_plafond'    	=> $this->input->post("client_plafond_".$i),
								'data_tujuan'    	=> $this->input->post("client_tujuan_".$i),
								'data_pengajuan'    => $this->input->post("client_pembiayaanke_".$i),
								'data_status'		=> '2',
								'data_jangkawaktu'  => '50'								
						);
						$this->clients_pembiayaan_model->insert($data_pembiayaan);						
						
						//UPDATE PEMBIAYAAN KE-x di table client
						$timestamp=date("Y-m-d H:i:s");
						$data_client = array(
								'client_pembiayaan'    	=> $this->input->post("client_pembiayaanke_".$i)								
						);
						return $this->clients_model->update_pembiayaan($client_id,$data_client);
					
					
					}
					
				}
			}	
		}
			 
	}
	
	//AJAX update_status_pengajuan
	public function update_status_pengajuan()
	{
			$status=$this->input->post('status');	
			$data_id=$this->input->post('data_id');				
			$data = array('data_status_pengajuan'		=> $status);						
			return $this->clients_pembiayaan_model->update_status_pembiayaan($data_id,$data);
			
			$sc=json_encode($data);
			echo $sc;
	}
	
	public function pencairan(){
		if($this->session->userdata('logged_in'))
		{
			$user_branch = $this->session->userdata('user_branch');	
			//Get Total Pengajuan 
			if($user_branch != 0){
				$total_rows = $this->clients_pembiayaan_model->count_all_approved_pengajuan_by_branch($this->input->get('q'),$user_branch);
			}else{
				$total_rows = $this->clients_pembiayaan_model->count_all_approved_pengajuan($this->input->get('q'));
			}			
			
				
			//pagination
			$config['base_url']     = site_url($this->module.'/client');
			$config['total_rows']   = $total_rows;
			$config['per_page']     = 15; 
			$config['uri_segment']  = 3;
			//$config['suffix'] 		= '?' . http_build_query($_GET, '', "&");
			$config['first_url'] 	= $config['base_url'] . $config['suffix'];
			$config['num_links'] = 2;
			$config['full_tag_open'] = '<li>';
			$config['full_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li><a href="#"><b>';
			$config['cur_tag_close'] = '</b></a></li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';
			
			$this->pagination->initialize($config); 
			$no =  $this->uri->segment(3);
			
			if($user_branch != 0){
				$clients = $this->clients_pembiayaan_model->get_all_approved_pengajuan_by_branch( $config['per_page'] , $page, $this->input->post('q'), $this->input->post('key'), $user_branch);
			}else{
				$clients = $this->clients_pembiayaan_model->get_all_approved_pengajuan( $config['per_page'] , $page, $this->input->post('q'), $this->input->post('key'));
			}			
			
			

			$this->template	->set('menu_title', 'Pencairan Pembiayaan')
							->set('menu_branch', 'active')
							->set('clients', $clients)
							->set('no', $no)
							->set('config', $config)
							->build('pencairan');
		}
		else
		{
		  //If no session, redirect to login page
		  redirect('login', 'refresh');
		}
	}
	
	//AJAX GET PEMBIAYAAN
	public function get_pembiayaan()
	{
			$data_id=$this->input->post('data_id');			
			$table='tbl_pembiayaan';
			$where=array('data_id' => $data_id);
			$data['sc_get']=$this->clients_pembiayaan_model->get_where_data($table,$where);
			$sc=json_encode($data['sc_get']);
			echo $sc;
	}
	
	public function pencairan_submit()
	{
		$data_id = $this->input->post("data_id");
		$data_plafond = $this->input->post("data_plafond");
		$data_profit = $this->input->post("profit");
		$data_totalangsuran = $this->input->post("angsuran");
		$data_angsuranpokok = $data_plafond/50;
		$data_sisaangsuran = $data_profit+$data_plafond;
		$date = $this->input->post("date_accept");
		$data_date_first = date('Y-m-d',strtotime($date . "+7 days"));
		$data_jatuhtempo = date('Y-m-d',strtotime($date . "+50 weeks"));
		
			$data = array(
				'data_status'    	 => $this->input->post("status"),
				'data_date_accept'   => $this->input->post("date_accept"),
				'data_totalangsuran' => $this->input->post("angsuran"),
				'data_akad'  		 => $this->input->post("akad"),	
				'data_margin'  		 => $this->input->post("profit"),	
				'data_angsuranpokok' => $data_angsuranpokok,	
				'data_angsuranke' 	 => '0',	
				'data_sisaangsuran'  => $data_sisaangsuran,	
				'data_date_first'  => $data_date_first,	
				'data_jatuhtempo'  => $data_jatuhtempo,	
				'data_alasan'  =>$this->input->post("alasan"),				
			);
			$this->clients_pembiayaan_model->update_pencairan($data_id,$data);
			
			redirect($this->module.'/pencairan');
	}
	
	//KAS
	public function kas($page='0')
	{
		if($this->session->userdata('logged_in'))
		{
			$user_branch = $this->session->userdata('user_branch');		
			$total_rows = $this->kas_model->count_all_kas_branch($this->input->get('q'),$user_branch);
			
			//pagination
			$config['base_url']     = site_url($this->module.'/client');
			$config['total_rows']   = $total_rows;
			$config['per_page']     = 15; 
			$config['uri_segment']  = 3;
			//$config['suffix'] 		= '?' . http_build_query($_GET, '', "&");
			$config['first_url'] 	= $config['base_url'] . $config['suffix'];
			$config['num_links'] = 2;
			$config['full_tag_open'] = '<li>';
			$config['full_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li><a href="#"><b>';
			$config['cur_tag_close'] = '</b></a></li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';
			
			$this->pagination->initialize($config); 
			$no =  $this->uri->segment(3);
		
			$kas = $this->kas_model->get_all_kas_branch( $config['per_page'] , $page, $this->input->post('q'), $user_branch);

			$this->template	->set('menu_title', 'Rekapitulasi Kas')
							->set('menu_branch', 'active')
							->set('kas', $kas)
							->set('list', $list)
							->set('no', $no)
							->set('config', $config)
							->build('kas');
		}
		else
		{
		  //If no session, redirect to login page
		  redirect('login', 'refresh');
		}
	}
	
	public function kas_create(){
		if($this->save_kas()){
			$this->session->set_flashdata('message', 'success|Kas baru telah ditambahkan');
			redirect($this->module.'/kas');
		}			
			$user_branch = $this->session->userdata('user_branch');
			$officer = $this->officer_model->get_all_officer( $config['per_page'] ,$page,$this->input->get('q'));
			$branch = $this->branch_model->get_branch($user_branch)->result();
			$kas = $this->kas_model->get_all_kas_branch( $config['per_page'] , $page, $this->input->post('q'), $user_branch);

			$this->template	->set('menu_title', 'Input Data Kas')
							->set('officer', $officer)
							->set('branch', $branch)
							->set('kas', $kas)
							->set('menu_branch', 'active')
							->build('kas_create');
	}
	
	
	private function save_kas(){
		
		//set form validation
		$this->form_validation->set_rules('kas_date', 'Tanggal Laporan', 'required');
		$this->form_validation->set_rules('kas_brangkas', 'Brangkas', 'required');
		$this->form_validation->set_rules('kas_rf', 'RF', 'required');
		$this->form_validation->set_rules('kas_amanah', 'Amanah', 'required');
		
		$kas_total=$this->input->post('kas_brangkas')+$this->input->post('kas_rf')+$this->input->post('kas_amanah');
	
		if($this->form_validation->run() === TRUE){
			//process the form
			$data = array(
					'kas_branch'		=> $this->input->post('kas_branch'),
					'kas_date'       	=> $this->input->post('kas_date'),
					'kas_brangkas' 		=> $this->input->post('kas_brangkas'),
					'kas_rf' 			=> $this->input->post('kas_rf'),		
					'kas_amanah'       	=> $this->input->post('kas_amanah'),
					'kas_total'	    	=> $kas_total,
			);
				
			if(!$id){
				return $this->kas_model->insert($data);
			}else{
				return $this->kas_model->update($id, $data);
			} 
		}
	}
	
	
	
		public function tespdf(){
			$filename="Report";
			$this->load->library('mpdf');
			$html = "";
			$html .= '<style media="print">body{font-size:10pt;font-family:"Helvetica Neue",Arial}td,th{border:1px solid #fff;padding:3px}</style>';
			$html.='asdasd<pagebreak suppress="off" /><div class="break"><h1>Page 1</h1></div><pagebreak suppress="off" />';
			$html.='<div class="break">Page 2</div><pagebreak suppress="off" />';
			$this->mpdf->WriteHTML($html);
			$this->mpdf->SetFooter("Amartha Microfinance".'|{PAGENO}|'."Weekly Report"); 
			
			//$this->mpdf->Output();
			$pdfFilePath = FCPATH."downloads/reports/$filename.pdf";
			$this->mpdf->Output($pdfFilePath, 'F');

		}
	
	
}
<?php

class Login extends Front_Controller{
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this->load->library('facebook', array(
            'appId' => '1397463280517693',
            'secret' => 'd9f0101f170a142418042f6243f6c3ee',
        ));

		$user = $this->facebook->getUser();
        
        if ($user) {
		
				
				$this->session->set_userdata('logged_in', TRUE);
			try {
                $data['user_profile'] = $this->facebook->api('/me');
				$get_profile_picture = $this->facebook->api(
					"/me/picture",
					"GET",
					array (
						'redirect' => false,
						'height' => '200',
						'type' => 'normal',
						'width' => '200',
					)
				);
				$data['profile_picture']=$get_profile_picture['data']['url'];
				$this->session->set_userdata('profile_picture', $data['profile_picture']);
				$this->session->set_userdata('first_name',$data['user_profile']['first_name']); 
            } catch (FacebookApiException $e) {
                $user = null;
            }
        }else {
            $this->facebook->destroySession();
        }

        if ($user) {

            $data['logout_url'] = site_url('index.php/welcome/logout'); 

        } else {
            $data['login_url'] = $this->facebook->getLoginUrl(array(
                'redirect_uri' => 'http://live.dukungguruku.org/index.php/login/',
                'scope' => array("email") // permissions here
            ));
        }
		
		
		if($this->session->userdata('logged_in')){	
			 redirect(site_url(), 'refresh');
		}else{			
			$this->template	->set('data', $data)
							->build('index');
		}
	}
	
	public function logins(){

		
        $this->load->library('facebook', array(
            'appId' => '1397463280517693',
            'secret' => 'd9f0101f170a142418042f6243f6c3ee',
            ));

		$user = $this->facebook->getUser();
        
        if ($user) {
			try {
                $data['user_profile'] = $this->facebook->api('/me');
				$get_profile_picture = $this->facebook->api(
					"/me/picture",
					"GET",
					array (
						'redirect' => false,
						'height' => '200',
						'type' => 'normal',
						'width' => '200',
					)
				);
				$data['profile_picture']=$get_profile_picture['data']['url'];

				//echo $data['profile_picture'];
            } catch (FacebookApiException $e) {
                $user = null;
            }
        }else {
            $this->facebook->destroySession();
        }

        if ($user) {

            $data['logout_url'] = site_url('index.php/welcome/logout'); 
			 $logout_url = site_url('index.php/login/logout');
			// Logs off application
            // OR 
            // Logs off FB!
            // $data['logout_url'] = $this->facebook->getLogoutUrl();

        } else {
			$login_url = $this->facebook->getLoginUrl(array(
                'redirect_uri' => 'http://live.dukungguruku.org/index.php/login/logins',
                'scope' => array("email") // permissions here
            ));
            $data['login_url'] = $this->facebook->getLoginUrl(array(
                'redirect_uri' => 'http://live.dukungguruku.org/index.php/login/login',
                'scope' => array("email") // permissions here
            ));
        }
		
		
		
		$this->template	->set('data', $data)
						->set('login_url', $login_url)
						->set('logout_url', $logout_url)
						->build('loginfb');
 
	}

    public function logout(){

        $this->load->library('facebook');
		$this->session->unset_userdata('logged_in');

        // Logs off session from website
        $this->facebook->destroySession();
		// $this->facebook->setSession(null);
        // Make sure you destory website session as well.
		$this->session->unset_userdata('logged_in');
        redirect(site_url(), 'refresh');
    }
	
}
?>
<?php 
	class signin extends CI_Controller {
		public function index () {
			$data['title']='this is signin';
			$this->load->helper('security');
			
			$this->form_validation->set_rules('email','email','required|callback_check_email_exists');
			$this->form_validation->set_rules('username','username','required|callback_check_username_exists');
			$this->form_validation->set_rules('password','password','required');
			$this->form_validation->set_rules('konfirmasi','konfirmasi','required');
			$this->form_validation->set_rules('pendidikan','pendidikan','required');
			
			if($this->form_validation->run()===false){
			$this->load->view('signin/signin',$data);
			}
			else{
				$this->models_endless->insert_signin();
				redirect('login');
			}
		}
		public function check_username_exists($username){
			$this->form_validation->set_message('check_username_exists',
			'username anda telah digunakan ');
			
			if($this->models_endless->check_username_exists($username)){
				return true;
			}
			else{
				return false;
			}
		}
		public function check_email_exists ($email){
			$this->form_validation->set_message('check_email_exists','email anda telah di gunakan');
			
			if($this->models_endless->check_email_exists($email)){
				return true;
			}
			else{
				return false;
			}
		}
		
	}
 ?>
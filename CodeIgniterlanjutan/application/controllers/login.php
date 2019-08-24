<?php  
	class login extends CI_Controller {
		/*nama function tidak boleh sama dengan controller */

		public function index () {
			$data['title']='this is login';
			$this->load->helper('security');
			

			$this->form_validation->set_rules('email','email','required|callback_check_email_exists');
			$this->form_validation->set_rules('username','username','required|callback_check_username_exists');
			$this->form_validation->set_rules('password','password','required|callback_check_password_exists');
			
			
			if($this->form_validation->run()===false){
				$this->load->view('login/login',$data);
			}
			else{
				$this->models_endless->insert_login();
				redirect(base_url('events'));
			}
		}
		public function check_email_exists($email){
			$this->form_validation->set_message('check_email_exists','email tidak terdaftar');
			if($this->login_model->check_email_exists($email)){
				return true;
			}
			else{
				return false;
			}
		}
		public function check_username_exists($username){
			$this->form_validation->set_message('check_username_exists','username tidak ada');
			if($this->login_model->check_username_exists($username)){
				return true;
			}
			else{
				
				return false;
			}
		}
		public function check_password_exists($password){
			$this->form_validation->set_message('check_password_exists','pasaword salah');
			$password=md5($this->input->post('password'));
			if($this->login_model->check_password_exists($password)){
				return true;
			}
			else{
				
			return false;
			}
		}
	}
  ?>
  
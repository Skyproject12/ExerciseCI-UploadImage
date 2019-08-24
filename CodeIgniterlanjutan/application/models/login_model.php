<?php 
	class login_model extends CI_Model {
		public function check_email_exists($email){
			$query=$this->db->get_where('registrasi',array('email'=>$email));
			if(empty($query->row_array())){
				return false;
			}
			else{
				return true;
			}
		}
		
		public function check_username_exists($username){
			/*jika username = username tidak ada */$query=$this->db->get_where('registrasi', array('username'=>$username));
			if(empty($query->row_array())){
				return false;
			/*jika ada username maka dia akan melanjutkan proses */}
			else{
				return true;
			}
		}
		public function check_password_exists($password){
			$query=$this->db->get_where('registrasi', array('password'=>$password));
			if(empty($query->row_array())){
				return false;
			}
			else{
				return true;
			}
		}				
	}	
?>
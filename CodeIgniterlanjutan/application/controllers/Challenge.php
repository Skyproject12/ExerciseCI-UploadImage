<?php  
	class Challenge extends CI_Controller {
		public function index (){
			$data['title']='this is challenge';
			
			$this->load->view('template/header');
			$this->load->view('challenge/challenge',$data);
			$this->load->view('template/footer');
		}
	}
	
?>
<?php  
	class aboutus extends CI_Controller {
		public function index (){
			$data['title']='this is about';
			$this->load->view('template/header');
			$this->load->view('about/aboutus',$data);
			$this->load->view('template/footer');
		}
	}

?>
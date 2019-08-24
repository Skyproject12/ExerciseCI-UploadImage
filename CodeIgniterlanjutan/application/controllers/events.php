<?php 
	class events extends CI_Controller {
		public function index () {
			$data['title']='this is events';
			
			$data['penampung_events']= $this->models_endless->view_events();
			
			$this->load->view('template/header');
			$this->load->view('events/events',$data);
			$this->load->view('template/footer');
		}
	}
?>
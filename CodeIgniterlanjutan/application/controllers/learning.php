<?php 
	class learning extends CI_Controller{
		public function index (){
			$data_learning['title']='this is learning';

				$this->load->view('template/header');
				$this->load->view('learning/learning',$data_learning);/*data_learning akan dikirim ke view */
				$this->load->view('template/footer');
			
			}
	}
?>
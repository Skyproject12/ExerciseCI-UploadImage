<?php 
	class belajar extends CI_Controller{
		public function index(){
			$data['title']='this is title';
			$this->load->view('template/header');
			$this->load->view('belajar/belajar',$data);
		}
	}
 ?>
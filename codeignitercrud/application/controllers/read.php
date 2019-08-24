<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Read extends CI_Controller {

	
	public function __construct()
	{
	
		
		parent::__construct();

	}

	public function index()
	{

		$segment = $this->uri->segment(3);

		$query = $this->index_model->get_user($segment);
		
		$data = array(
			"user"   => $query
		);
		$this->load->view('header');
		$this->load->view('read', $data);
		$this->load->view('footer');
	
	}

}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct()
	{
	
		parent::__construct();

	}
	public function index()
	{

		$query = $this->index_model->data();

		$data = array(
			"all"   => $query
		);
		$this->load->view('header');
		$this->load->view('index', $data);
		$this->load->view('footer');
	
	}

}

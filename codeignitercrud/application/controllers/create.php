<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Create extends CI_Controller {
	public function __construct()
	{
	
		parent::__construct();

	}

	public function index()
	{

		$this->load->view('header');
		$this->load->view('create');
		$this->load->view('footer');

	}

	public function tambah()
	{
		
		$nim 	= $this->input->post(trim(strip_tags('nim')));
		$nama 	= $this->input->post(trim(strip_tags('nama')));
		$kelas 	= $this->input->post(trim(strip_tags('kelas')));

		$data = array(
			"nim"  	=> $nim,
			"nama"  => $nama,
			"kelas"  => $kelas
		);

		$query = $this->index_model->insert_user($data);

		redirect(base_url());

	}

}

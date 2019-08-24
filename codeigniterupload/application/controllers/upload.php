<?php 

class Upload extends CI_Controller{

	function __construct(){
		parent::__construct();
			$this->load->library('session');
			$this->load->model('m_data');
	}

	public function index(){
		$data['gambar'] = $this->m_data->view();
		$this->load->view('v_upload_sukses', $data);
	}

	public function tambah(){
		$data = array();

		if($this->input->post('submit')){
			$upload = $this->m_data->upload();

			if($upload['result'] == "success"){
				$this->m_data->save($upload);
				redirect('upload');   
			}else{
				$data['message'] = $upload['error'];
			}
		}
		$this->load->view('upload', $data);
	}
	
}
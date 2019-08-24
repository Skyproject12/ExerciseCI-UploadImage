<?php 
	class pages extends CI_Controller {
		/*membuat function untuk default_controller  dengan home sebagai index utama*/public function view($page='home'){
			/*lokasi file views/pages/*/if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}
			$data['title'] = ucfirst($page);
			
			$this->load->view('templates/header');
			/*mengambil nilai dari view dengan nama file sesuai dengan page*/$this->load->view('pages/'.$page , $data);
			$this->load->view('templates/footer');
		}
	}

<?php  
	class home extends CI_Controller {
		public function index ($page='home'){
			if(!file_exists(APPPATH.'views/home/'.$page.'.php')){
				show_404();
			}
			$title_index['title']=ucfirst($page);
			$title_index['penampung']=$this->models_endless->view_home();
			
			$this->load->view('template/header');
			$this->load->view('home/'.$page ,$title_index);
			$this->load->view('template/footer');
			
			
			
		}
		public function view_post (){
			
		}
		public function gethomeberita($id){
			$title_index['title']='this is home berita';
			
			$title_index['homeberita']=$this->models_endless->view_homeberita($id);
			
			$this->load->view('template/header');
			$this->load->view('home/homeberita', $title_index);
			$this->load->view('template/footer');
		}
	}
?>
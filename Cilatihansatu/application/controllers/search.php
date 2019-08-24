<?php 
	class search extends CI_Controller{
		public function index(){
			$datam['penampung_search']=$this->model_data->views();
			$this->form_validation->set_rules('judul','judul','required|callback_check_judul_exists');
			$this->form_validation->set_rules('deskripsi','deskripsi','required');
			$this->form_validation->set_rules('gambar','gambar','required');
			
			if($this->form_validation->run()===false){
				$this->load->view('template/header');
				$this->load->view('search/index',$datam);
				
			}
			else{
				$this->model_data->insert_data();
				redirect(base_url());
				echo"input berhasil";
			}
		}
		public function check_judul_exists($judul){
			$this->form_validation->set_message('check_judul_exists','data sudah ada');
			
			if($this->model_data->check_judul_exists($judul)){
				return true;
			}
			else{
				return false;
			}
		}
		public function delete($id){
			$where=array('id'=>$id);
			$this->model_data->delete_model($where);
			redirect(base_url());
		}
		public function viewsdata($id){
			$where=array('id'=>$id);
			$data['nampung']=$this->model_data->viewdata($where);
			$this->load->view('template/header');
			$this->load->view('search/update',$data);
		}
		
		public function changes(){
			$id=url_title($this->input->post('id'));
			$where=array('id'=>$id);
			$this->model_data->change($where);
			redirect(base_url());
			
		}
	} 

?>
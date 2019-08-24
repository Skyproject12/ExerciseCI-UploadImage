<?php  
	class create extends CI_Controller{
		public function index (){
			$data['title']='this create';
			
			
			
			$this->form_validation->set_rules('title','title','required');
			$this->form_validation->set_rules('deskription','deskription','required');
			$this->form_validation->set_rules('hastag','hastag','required');
			$this->form_validation->set_rules('upload','upload','required');
			$config['upload_path']='./Asset/gambar/';
			$config['allowed_types']='gif|jpg|png';
			$config['max_size']=2000;

			
			$this->load->library('upload',$config);
			
			
			if($this->form_validation->run()===false){
				$this->load->view('template/header');
				$this->load->view('create/create',$data);
				$this->load->view('template/footer');
			}
			else{
				if(!$this->upload->do_upload('upload')){
					if($config['max_size']>2000){
						echo"data terllau besar";
					}
					else if(!$config['allowed_types']){
						echo"data tidak mendukung";
					}
					else if($config['upload_path']!='./Asset/gambar/'){
						echo"data tidak terdapat";
					}
					else{
						echo"data salah";
					}
				}
				else{
				$data=$this->upload->data();
				$namefile=$data['file_name'];
				$dataSave=array('namafile'=>$namafile);
				$this->models_endless->create_post('dataSave');
				redirect(base_url());
				
				}
			}
		}
	}
	
?>
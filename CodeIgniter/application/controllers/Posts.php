<?php 
	class Posts extends CI_Controller {
		/*select*/
		public function index(){
			/*membuat variable baru untuk menampung title*/$data['title'] = 'Lastes Posts';
			
			/*membuat variable baru untuk penampung model*/$data['pospenampung'] = $this->Post_model->get_posts();
			/*menagabil nilai dari view pada folder template/header */$this->load->view('templates/header');
			/*mengambil nilai dari view pada folder posts/index*/$this->load->view('posts/index',$data);
			/*mengambil nilai dari view pada folder templates/footer*/$this->load->view('templates/footer');
		}
		public function view($slug = NUll) {
			/*menampung nilai dari model Post_model dengan function get_posts*/$data['pospenampung'] = $this->Post_model->get_posts($slug);
				if(empty($data['pospenampung'])){
					show_404 ();
				}
			/*membuat variable baru untuk menampung variable penampung dan title*/	$data['title'] = $data['pospenampung']['title'];
				$data['body'] = $data['pospenampung']['body'];
				$data['create_at'] = $data['pospenampung']['create_at'];
				$this->load->view('templates/header');
				$this->load->view('posts/view',$data);
				$this->load->view('templates/footer');  
		}
		/*insert*/
		public function data (){
			$data['title']='this is create';
			$this->load->helper('security');
			/*membuat variable baru berupa categories dengan menampung data modal dan nama functionnya */ $data['categories']=$this->Post_model->Categories_posts();
			/*mmebuat validasi jika form tidak diisi maka akan terdapat tanda */$this->form_validation->set_rules('title','title','required');
			$this->form_validation->set_rules('body','body','required');
			
			/*jika data validation gagal maka akan tetap di tempat semula */if($this->form_validation->run()===false){
				$this->load->view('templates/header');
				$this->load->view('posts/create',$data);
				$this->load->view('templates/footer');
			}
			else {
				$this->Post_model->create_posts(); 
				/*jika telah melewati validation maka akan menuju link posts*/redirect('posts');
				
			}
		}
		/*delete*/
		/*function delete merupakan link yang di gunakan untuk memetakan lokasi halaman jadi nama function harus sesuai dengan nama lokasi halaman*/
		public function delete ($id)/*id merupakan indentitas perbadingan untuk mengetaui lokasi halaman dan mengetahui content yang di hapus */{
			$this->Post_model->delete_post($id);
			redirect('posts');
			
		}
		
		/*membbuat function dengan slug sebagai data pembanding*/
		public function edit ($slug){
		/*menampung model dari get_post dengan slug sebagai pembanding*/	$data['pospenampung']= $this->Post_model->get_posts($slug) /*untuk mengambil data di data base saat mengedit*/;
			if(empty($data['pospenampung'])){
					show_404 ();
			}
			/*membuat penampung untuk menampung data dari title*/$data['title'] = $data['pospenampung']['title'];
			$data['create_at'] = $data['pospenampung']['create_at'];
			$data['body'] = $data['pospenampung']['body'];
			$data['id'] = $data['pospenampung']['id'];
			$this->load->view('templates/header');
			$this->load->view('posts/edit',$data);
			$this->load->view('templates/footer');  
		}
		/*update*/
		public function update (){
			/*memanggil model dengan function update_post*/$this->Post_model->update_post();
			/*jika proses berhasil maka akan menuju link posts*/redirect('posts');
		}
		public function Categories_posts (){
			$this->db->order_by('name');
			$query=$this->db->get('categories');
			return $query->result_array();
		}
	}
 
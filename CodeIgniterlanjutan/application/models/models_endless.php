<?php  
	class models_endless extends CI_Model {
		public function __construct(){
			$this->load->database();
		}
		public function view_events (){
			$this->db->select('*');
			$this->db->from('events');
			
			$query=$this->db->get();
			if($query->num_rows()>0){
				foreach($query->result() as $data){
					$penampung_events[]=$data;
				}
				return $penampung_events;
			}
			else{
				echo"<script> alert('tidak ada')</script>";
			}	
		}
		public function insert_signin () {
			$password=md5($this->input->post('password'));
			$data = array (
			/*menginsert kedalam database dengan kolom username values $username */'username'=>$this->input->post('username'),
			'email'=>$this->input->post('email'),
			'password'=>$password,
			'konfirmasi'=>$this->input->post('konfirmasi'),
			'pendidikan'=>$this->input->post('pendidikan'),
		);
		/*isi dari form*/
		$password=url_title($this->input->post('password'));
		$konfirmasi=url_title($this->input->post('konfirmasi'));
		$username=url_title($this->input->post('username'));
		
		$this->db->select('username,email');
		$this->db->from('registrasi');
		$query=$this->db->get();
				
				if($password==$konfirmasi){
					return $this->db->insert('registrasi',$data);
					redirect(base_url('login'));
				}
				else{
					echo"<script>alert('password tidak sama dengan konfirmasi')</script>";
					redirect(base_url());
				}
			}
	
		public function insert_login (){
			 $data=array(
				'username'=>$this->input->post('username'),
				'password'=>$this->input->post('password'),
				'email'=>$this->input->post('email'),
			 );
			 $this->db->insert('login',$data);
		}
		
		public function create_post($dataSave) {
			$create= array (
			'title'=>$this->input->post('title'),
			'deskription'=>$this->input->post('deskription'),
			'hastag'=>$this->input->post('hastag'),
			'upload'=>$this->$dataSave
			);
			return $this->db->insert('create_post',$create);
			
		}
		
		public function view_home(){
			$this->db->select('*');
			$this->db->from('create_post');
			
			$query=$this->db->get();
			if($query->num_rows()>0){

					$penampung=$query->result();
					
					return $penampung;
				}
			else{
				return false;
			}
		}
		
		public function view_homeberita($id=false){
			if($id===false){
				$query=$this->db->get('create_post');
			}
			$query=$this->db->get_where('create_post',array('id'=>$id));
			return $tampung=$query->result();
		}
		
		public function check_username_exists($username){
			$query=$this->db->get_where('registrasi',array('username'=>$username));
			if(empty($query->row_array())){
				return true;
			}
			else{
				return false;
			}
		} 
		public function check_email_exists($email){
			$query=$this->db->get_where('registrasi',array('email'=>$email));
			if(empty($query->row_array())){
				return true;
			}
			else{
				return false;
			}
		}
		
	}
?>
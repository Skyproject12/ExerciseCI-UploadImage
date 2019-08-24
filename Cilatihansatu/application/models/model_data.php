<?php 
	class model_data extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		public function views(){
			$this->db->select('*');
			$this->db->from('search');
			
			$query=$this->db->get();
			
			if($query->num_rows()>0){
				foreach($query->result() as $data){
					$penampung[]=$data;
				}
				return $penampung;
			}
			else{
				echo"data";
			}
		}
		public function insert_data(){
			$data=array(
				'judul'=>$this->input->post('judul'),
				'deskripsi'=>$this->input->post('deskripsi'),
				'gambar'=>$this->input->post('gambar'),
			);
		 return $this->db->insert('search',$data);
		}
		public function check_judul_exists($judul){
			$query=$this->db->get_where('search',array('judul'=>$judul));
			if(empty ($query)){
				return false;
			}
			else{
				return true;
			}
		}
		public function delete_model($where){
			$this->db->where($where);
			$this->db->delete('search');
			return true;
		}
		public function viewdata($where){
			$this->db->select('*');
			$query=$this->db->get_where('search',$where);
			if($query->num_rows()>0){
				foreach($query->result() as $input){
					$nampung[]=$input;
				}
				return $nampung;
			}
		}
		public function change($where){
			$data = array(
				'judul'=>$this->input->post('judul'),
				'deskripsi'=>$this->input->post('deskripsi'),
				'gambar'=>$this->input->post('gamabar'),
			);
			$this->db->where($where);
			$this->db->update('search',$data);
		}		
	}
 ?>
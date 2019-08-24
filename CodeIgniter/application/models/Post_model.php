<?php 
	class Post_model extends CI_Model {
		public function __construct () {
			 $this->load->database();
		}
		/*select*/		
		public function get_posts ($slug = false){
			if($slug===false){
				$this->db->order_by('id','DESC');  
				$query=$this->db->get('share');
				return $query->result_array();
			}
			$query=$this->db->get_where('share', array('slug' =>$slug));
				return $query->row_array();
		}
		/*insert*/
		public function create_posts(){
			/*berfungsi menampung data*/$slug = url_title($this->input->post('body')); /*artinya diinsert berdasarkan body*/
			$data = array (
			/*berasal dari database mysql*/'title'=>$this->input->post('title'),/*berasal dari name form*/
			'slug' =>$slug,
			'body' =>$this->input->post('body'),
			);
			/*memberi nilai insert ke dalam database   */return $this->db->insert('share',$data);
		}
		/*delete*/
		public function delete_post ($id){
			/*delete berdasarkan id*/$this->db->where('id',$id);
			/*delete dari database share*/$this->db->delete('share');
			return true; 
		}
		
		public function update_post () {
			/*berfungsi menampung data*/$slug = url_title($this->input->post('title')); /*artinya diinsert berdasarkan body*/
			$data = array (
			/*berasal dari database mysql*/'title'=>$this->input->post('title'),/*berasal dari name form*/
			'slug' =>$slug,
			'body' =>$this->input->post('body'),
			);
			$this->db->where('title',$this->input->post('title'));
			/*memberi nilai insert ke dalam database   */return $this->db->update('share',$data);
	
		}
	}
?>
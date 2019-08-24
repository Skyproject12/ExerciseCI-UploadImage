<?php
class Mod extends CI_Model { 
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function uploadimage($data){
		$upload['id']='';
		$upload['gambar'] = $data;
		$this->db->insert('sdp', $upload);
	}

}
?>

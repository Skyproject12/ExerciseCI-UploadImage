<?php
defined('BASEPATH') or exit("No direct script");

	class index_model extends CI_Model {
	
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}

		function save_data($dataSave){
			$this->db->set($dataSave);
			$this->db->insert('submit');
		}
	}
?>
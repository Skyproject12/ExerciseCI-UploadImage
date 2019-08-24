<?php 
 
class M_data extends CI_Model{
	// function get_data(){
	// 	return $this->db->get('mahasiswa');
	// }
	// function input_data($data,$table){
	// 	$this->db->insert($table,$data);
	// }
	public function view(){
    return $this->db->get('gambar')->result();
  }
  // Fungsi untuk melakukan proses upload file
  public function upload(){
    $config['upload_path'] = './gambar/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['max_size']  = '2048';
    $config['remove_space'] = TRUE;
  
    $this->load->library('upload', $config); // Load konfigurasi uploadnya
    if($this->upload->do_upload('input_gambar')){ // Lakukan upload dan Cek jika proses upload berhasil
			// Jika berhasil :
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
      return $return;
    }else{
      // Jika gagal :
      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
      return $return;
    }
  }
  
  // Fungsi untuk menyimpan data ke database
  public function save($upload){
    $data = array(
      'deskripsi'=>$this->input->post('input_deskripsi'),
      'nama' => $upload['file']['file_name'],
      'ukuran' => $upload['file']['file_size'],
      'tipe' => $upload['file']['file_type']
    );
    
    $this->db->insert('gambar', $data);
  }
}
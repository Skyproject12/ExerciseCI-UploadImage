<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller{

  public function __construct(){
    parent::__construct();
	$this->load->model('index_model');
  }

  public function index(){
    $this->load->view("create/index");
  }

  public function uploadimage(){
    $config["upload_path"] = "./application/upload/";
    $config["allowed_types"] = "gif|jpg|png";
    $config["max_size"] = 2000;

    /*
    ** TEST JURNAL
    ** BUAT DATABASE dengan nama gambar
    ** Lalu buat tabel dengan nama submit, columnya cuman 2, yaitu id dan namafile
    ** lalu tangkap inputan kalian disini dengan menggunakan $_FILES userfile name.
    ** lalu jangan lupa buat Model yang membuatmu bisa menyimpan kedatabase.
    ** BUAT INI BISA MENGUPLOAD GAMBAR, ANDA HANYA PERLU ME-LOAD LIBRARY YANG BERNAMA upload, lalu masukkan semua parameter config.
    ** screenshot segala prosesnya.
    */
	$this->load->library('upload',$config);
    if(!$this->upload->do_upload("userfile")){
      $error = array("Error" => $this->upload->display_errors());
	  if(!$config["upload_path"]){
		  echo"data penampung tidak ada";
	  }
	  if($error){
		  echo"data error";
	  }
     //$this->load->view("create/index");
    }
    else{
	$data = $this->upload->data();
      $namefile = $data['file_name'];
      $dataSave = array('id' => '','namafile' => $namefile);
      $this->index_model->save_data($dataSave);
	  redirect(base_url());
    }
  }
  

}

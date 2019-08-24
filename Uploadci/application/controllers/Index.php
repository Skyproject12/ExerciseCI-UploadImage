<?php


class Index extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('mod');
  }

  public function index(){
    $this->load->view("index");
  }

  public function uploadimage(){
    $config["upload_path"] = "./upload/";
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
      $this->load->view("index");
    }
    else{
      $namaFile = $this->upload->data();
      $namafile = $namaFile['file_name'];
      $this->mod->uploadimage($namafile);
      $data = array("upload_data" => $this->upload->data());
      $this->load->view("display", $data);
    }
  }

}

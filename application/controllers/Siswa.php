<?php

class Siswa extends CI_Controller
{

  function __construct(){
    parent::__construct();
    if ($this->session->userdata('udhmasuk')==false) {
      redirect('welcome');
    }
  }

  function siswa(){
    $data["title"]="Halaman Siswa";
    $this->load->view('siswa',$data);
  }
}
?>

<?php

class Admin extends CI_Controller
{

  function __construct(){
    parent::__construct();
    if ($this->session->userdata('udhmasuk')==false) {
      redirect('welcome');
    }
  }

  function index(){
    $data["title"]="Halaman Beranda";
		$this->load->view('beranda',$data);
  }
}
?>

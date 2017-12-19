<?php

class Guru extends CI_Controller
{

  function __construct(){
    parent::__construct();
    if ($this->session->userdata('udhmasuk')==false) {
      redirect('welcome');
    }
  }

  function guru(){
		$data["title"]="Halaman Guru";
		$this->load->view('guru',$data);
	}
}
?>

<?php

class Orangtua extends CI_Controller
{

  function __construct(){
    parent::__construct();
    if ($this->session->userdata('udhmasuk')==false) {
      redirect('welcome');
    }
  }

  function orangtua(){
		$data["title"]="Halaman Orang Tua";
		$this->load->view('orangtua',$data);
	}
}
?>

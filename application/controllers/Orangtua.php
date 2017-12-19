<?php

class Orangtua extends CI_Controller
{

  function __construct(){
    parent::__construct();
    if ($this->session->userdata('udhmasuk')==false) {
      redirect('welcome');
    }
  }

  function index(){
    $this->load->view('layout/header');
    $this->load->view('layout/bodyOrtu');
    $this->load->view('layout/footer');
	}
}
?>

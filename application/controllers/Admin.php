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
		$this->load->view('layout/header');
    $this->load->view('layout/body');
    $this->load->view('layout/footer');
  }
}
?>

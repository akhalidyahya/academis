<?php

class Guru extends CI_Controller
{

  function __construct(){
    parent::__construct();
    if ($this->session->userdata('udhmasuk')==false) {
      redirect('welcome');
    }
  }

  function index(){
    $data['title'] = "Dashboard";
		$this->load->view('layout/header');
    $this->load->view('layout/sidebar',$data);
    $this->load->view('layout/footer');
	}
}
?>

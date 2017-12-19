<?php

class Admin extends CI_Controller
{

  function __construct(){
    parent::__construct();
    if ($this->session->userdata('udhmasuk')==false) {
      redirect('login');
    }
  }

  function index(){
		$this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    // $this->load->view('layout/dashboard');
    $this->load->view('layout/footer');
  }

  function view_guru(){
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('pages/admin_view_data_guru');
    $this->load->view('layout/footer');
  }

  function add_guru(){
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('pages/admin_add_data_guru');
    $this->load->view('layout/footer');
  }
}
?>

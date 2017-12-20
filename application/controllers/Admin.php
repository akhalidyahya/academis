<?php

class Admin extends CI_Controller
{

  function __construct(){
    parent::__construct();
    $this->load->model('sik');
    if ($this->session->userdata('udhmasuk')==false) {
      redirect('login');
    }
  }

  function index(){
    $data['title'] = "Dashboard";
		$this->load->view('layout/header');
    $this->load->view('layout/sidebar',$data);
    // $this->load->view('layout/dashboard');
    $this->load->view('layout/footer');
  }

  function view_guru(){
    $data['title'] = "Data Guru";
    $data2['sql1']=$this->sik->get_guru();
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar',$data);
    $this->load->view('pages/admin_view_data_guru',$data2);
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

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	function ceklogin(){
		if (isset($_POST['login'])) {
			$user=$this->input->post('user',true);
			$pass=$this->input->post('pass',true);
			$cek=$this->sik->proseslogin($user, $pass);
			$hasil=count($cek);
			if ($hasil > 0) {
				$yglogin=$this->db->get_where('akun',array('username'=>$user, 'password'=>$pass))->row();
				$data = array('udhmasuk' => true,
					'username'=>$yglogin->username);
				$this->session->set_userdata($data);
				if ($yglogin->status == 'admin') {
					redirect('admin');
				}elseif ($yglogin->status == 'guru') {
					redirect('guru');
				}elseif ($yglogin->status == 'siswa') {
					redirect('siswa');
				}elseif ($yglogin->status == 'orangtua') {
					redirect('orangtua');
				}
			}else {
				redirect('index');
			}
		}
	}

	function keluar(){
		$this->session->sess_destroy();
		redirect('login');
	}
}

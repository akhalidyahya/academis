<?php

class Admin extends CI_Controller
{

  function __construct(){
    parent::__construct();
    $this->load->model('sik');
    $this->load->model('Calendar_model');
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

  function view_siswa(){
    $data['title'] = "Data Guru";
    $data2['sql1']=$this->sik->get_siswa();
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar',$data);
    $this->load->view('pages/admin_view_data_siswa',$data2);
    $this->load->view('layout/footer');
  }

  function add_guru(){
    $data['title'] = "Tambah data Guru";
    $data['op'] = 'tambah';
    $data['kelas'] = $this->sik->get_kelas();
    $data['mata_pelajaran'] = $this->sik->get_mata_pelajaran();
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar',$data);
    $this->load->view('pages/admin_add_data_guru',$data);
    $this->load->view('layout/footer');
  }

  function add_siswa(){
    $data['title'] = "Tambah data Siswa";
    $data['op'] = 'tambah';
    $data['kelas'] = $this->sik->get_kelas();
    $data['ortu'] = $this->sik->get_ortu();
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar',$data);
    $this->load->view('pages/admin_add_data_siswa',$data);
    $this->load->view('layout/footer');
  }

  function view_calendar()
  {
    $data['title'] = "Kalender event";
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar',$data);
    $this->load->view('pages/admin_calendar');
    $this->load->view('layout/footer');
  }

  public function guru_simpan()
	{
		$op = $this->input->post('op');
		$id_guru = $this->input->post('id_guru');
		$nama_depan = $this->input->post('nama_depan');
		$nama_tengah = $this->input->post('nama_tengah');
    $nama_belakang = $this->input->post('nama_belakang');
    $alamat = $this->input->post('alamat');
    $kelurahan = $this->input->post('kelurahan');
    $kecamatan = $this->input->post('kecamatan');
    $kota = $this->input->post('kota');
    $provinsi = $this->input->post('provinsi');
    $jenis_kelamin = $this->input->post('jenis_kelamin');
    $tempat_lahir = $this->input->post('tempat_lahir');
    $tanggal_lahir = $this->input->post('tanggal_lahir');
    $nip = $this->input->post('nip');
    $email = $this->input->post('email');
    $no_telp = $this->input->post('no_telp');
    $id_kelas = $this->input->post('id_kelas');
    $id_mapel = $this->input->post('id_mapel');
		$data = array(
			'nama_depan' => $nama_depan,
			'nama_tengah' => $nama_tengah,
      'nama_belakang' => $nama_belakang,
      'alamat' => $alamat,
      'kelurahan' => $kelurahan,
      'kecamatan' => $kecamatan,
      'kota' => $kota,
      'provinsi' => $provinsi,
      'jenis_kelamin' => $jenis_kelamin,
      'tempat_lahir' => $tempat_lahir,
      'tanggal_lahir' => $tanggal_lahir,
      'nip' => $nip,
      'email' => $email,
      'no_telp' => $no_telp,
      'id_kelas' => $id_kelas,
      'id_mapel' => $id_mapel
			);
		if ($op=="tambah") {
			$this->sik->simpan_guru($data);
		}else{
			$this->sik->update_guru($id_guru,$data);
		}
		redirect('admin/view_guru');
	}

  public function siswa_simpan()
	{
		$op = $this->input->post('op');
		$id_siswa = $this->input->post('id_siswa');
		$nama_depan = $this->input->post('nama_depan');
		$nama_tengah = $this->input->post('nama_tengah');
    $nama_belakang = $this->input->post('nama_belakang');
    $alamat = $this->input->post('alamat');
    $kelurahan = $this->input->post('kelurahan');
    $kecamatan = $this->input->post('kecamatan');
    $kota = $this->input->post('kota');
    $provinsi = $this->input->post('provinsi');
    $jenis_kelamin = $this->input->post('jenis_kelamin');
    $tempat_lahir = $this->input->post('tempat_lahir');
    $tanggal_lahir = $this->input->post('tanggal_lahir');
    $nis = $this->input->post('nis');
    $nisn = $this->input->post('nisn');
    $agama = $this->input->post('agama');
    $id_kelas = $this->input->post('id_kelas');
    $id_ortu = $this->input->post('id_ortu');
		$data = array(
			'nama_depan' => $nama_depan,
			'nama_tengah' => $nama_tengah,
      'nama_belakang' => $nama_belakang,
      'alamat' => $alamat,
      'kelurahan' => $kelurahan,
      'kecamatan' => $kecamatan,
      'kota' => $kota,
      'provinsi' => $provinsi,
      'jenis_kelamin' => $jenis_kelamin,
      'tempat_lahir' => $tempat_lahir,
      'tanggal_lahir' => $tanggal_lahir,
      'nis' => $nis,
      'nisn' => $nisn,
      'agama' => $agama,
      'id_kelas' => $id_kelas,
      'id_ortu' => $id_ortu
			);
		if ($op=="tambah") {
			$this->sik->simpan_siswa($data);
		}else{
			$this->sik->update_siswa($id_siswa,$data);
		}
		redirect('admin/view_siswa');
	}

	public function guru_hapus($id){
		$this->sik->hapus_guru($id);
		redirect('admin/view_guru');
	}

  public function siswa_hapus($id){
		$this->sik->hapus_siswa($id);
		redirect('admin/view_siswa');
	}

	public function guru_edit($id){
    $data['title'] = "Edit data Guru";
		$data['op'] = 'edit';
		$data['sql'] = $this->sik->edit_guru($id);
    $data['kelas'] = $this->sik->get_kelas();
    $data['mata_pelajaran'] = $this->sik->get_mata_pelajaran();
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar',$data);
    $this->load->view('pages/admin_add_data_guru',$data);
    $this->load->view('layout/footer');
	}

  public function siswa_edit($id){
    $data['title'] = "Edit data Siswa";
		$data['op'] = 'edit';
		$data['sql'] = $this->sik->edit_siswa($id);
    $data['kelas'] = $this->sik->get_kelas();
    $data['ortu'] = $this->sik->get_ortu();
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar',$data);
    $this->load->view('pages/admin_add_data_siswa',$data);
    $this->load->view('layout/footer');
	}

  public function view_kelas(){
    $data['title'] = "kelas";
    $data['sql'] = $this->sik->get_kelas();
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar',$data);
    $this->load->view('pages/admin_view_kelas',$data);
    $this->load->view('layout/footer');
  }

  public function hapus_kelas($id){
		$this->sik->hapus_kelas($id);
		redirect('admin/view_kelas');
	}

  public function simpan_kelas(){
    $kelas = $this->input->post('kelas');
    $data['nama_kelas'] = $kelas;
    $this->sik->simpan_kelas($data);
    redirect('admin/view_kelas');
  }

  public function view_mapel(){
    $data['title'] = "mata pelajaran";
    $data['sql'] = $this->sik->get_mata_pelajaran();
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar',$data);
    $this->load->view('pages/admin_view_mapel',$data);
    $this->load->view('layout/footer');
  }

  public function hapus_mapel($id){
		$this->sik->hapus_mapel($id);
		redirect('admin/view_mapel');
	}

  public function simpan_mapel(){
    $mapel = $this->input->post('mapel');
    $data['nama_mapel'] = $mapel;
    $this->sik->simpan_mapel($data);
    redirect('admin/view_mapel');
  }
}
?>

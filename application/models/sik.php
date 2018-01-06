<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sik extends CI_Model{

  public function get_guru(){
    $sql=$this->db->query("SELECT* FROM guru");
    return $sql->result();
  }

  public function get_siswa(){
    $sql=$this->db->query("SELECT* FROM siswa");
    return $sql->result();
  }

  function proseslogin($user,$pass){
    $this->db->where('username',$user);
    $this->db->where('password',$pass);
    return $this->db->get('akun')->row();
  }

  function simpan_guru($data){
		$this->db->insert('guru',$data);
	}

	function hapus_guru($id){
		$this->db->where("id_guru",$id);
		$this->db->delete('guru');
	}

  function hapus_siswa($id){
		$this->db->where("id_siswa",$id);
		$this->db->delete('siswa');
	}

	function edit_guru($id){
		$this->db->where("id_guru",$id);
		return $this->db->get('guru');
	}

  function edit_siswa($id){
		$this->db->where("id_siswa",$id);
		return $this->db->get('siswa');
	}

	function update_guru($id,$data){
		$this->db->where("id_guru",$id);
		$this->db->update('guru',$data);
	}

  function update_siswa($id,$data){
		$this->db->where("id_siswa",$id);
		$this->db->update('siswa',$data);
	}

  function get_kelas(){
    $sql=$this->db->query("SELECT* FROM kelas");
    return $sql;
  }

  function hapus_kelas($id){
		$this->db->where("id_kelas",$id);
		$this->db->delete('kelas');
	}

  function simpan_kelas($data){
    $this->db->insert('kelas',$data);
  }

  function get_mata_pelajaran(){
    $sql=$this->db->query("SELECT* FROM mata_pelajaran");
    return $sql;
  }

  function hapus_mapel($id){
		$this->db->where("id_mapel",$id);
		$this->db->delete('mata_pelajaran');
	}

  function simpan_mapel($data){
    $this->db->insert('mata_pelajaran',$data);
  }

  function simpan_siswa($data){
    $this->db->insert('siswa',$data);
  }

  function get_ortu(){
    $sql=$this->db->query("SELECT* FROM orang_tua");
    return $sql;
  }

  public function detail_Guru($id_guru)
  {
    $data=array();
    $options = array('id_guru' => $id_guru );
    $Q=$this->db->get_where('guru',$options,1);
    if ($Q->num_rows()>0) {
      $data = $Q->row_array();
    }
    $Q->free_result();
    return $data;
  }

  public function detail_Siswa($id_siswa)
  {
    $data=array();
    $options = array('id_siswa' => $id_siswa);
    $Q=$this->db->get_where('siswa',$options,1);
    if ($Q->num_rows()>0) {
      $data = $Q->row_array();
    }
    $Q->free_result();
    return $data;
  }

  function search_guru($keyword)
    {
        $this->db->like('nip',$keyword);
        $this->db->or_like('nama_depan',$keyword);
        $this->db->or_like('nama_tengah',$keyword);
        $this->db->or_like('nama_belakang',$keyword);
        $this->db->or_like('alamat',$keyword);
        $this->db->or_like('kelurahan',$keyword);
        $this->db->or_like('kecamatan',$keyword);
        $this->db->or_like('kota',$keyword);
        $this->db->or_like('provinsi',$keyword);
        $this->db->or_like('jenis_kelamin',$keyword);
        $this->db->or_like('tempat_lahir',$keyword);
        $this->db->or_like('tanggal_lahir',$keyword);
        $this->db->or_like('email',$keyword);
        $this->db->or_like('no_telp',$keyword);
        $query=$this->db->get('guru');
        return $query->result();
    }

    function search_siswa($keyword)
      {
          $this->db->like('nis',$keyword);
          $this->db->or_like('nama_depan',$keyword);
          $this->db->or_like('nama_tengah',$keyword);
          $this->db->or_like('nama_belakang',$keyword);
          $this->db->or_like('alamat',$keyword);
          $this->db->or_like('kelurahan',$keyword);
          $this->db->or_like('kecamatan',$keyword);
          $this->db->or_like('kota',$keyword);
          $this->db->or_like('provinsi',$keyword);
          $this->db->or_like('jenis_kelamin',$keyword);
          $this->db->or_like('tempat_lahir',$keyword);
          $this->db->or_like('tanggal_lahir',$keyword);
          $this->db->or_like('nisn',$keyword);
          $this->db->or_like('agama',$keyword);
          $query=$this->db->get('siswa');
          return $query->result();
      }

}
 ?>

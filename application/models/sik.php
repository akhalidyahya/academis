<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sik extends CI_Model{

  public function get_guru(){
    $sql=$this->db->query("SELECT* FROM guru");
    return $sql;
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

	function edit_guru($id){
		$this->db->where("id_guru",$id);
		return $this->db->get('guru');
	}

	function update_guru($id,$data){
		$this->db->where("id_guru",$id);
		$this->db->update('guru',$data);
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

}
 ?>

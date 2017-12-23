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
}
 ?>

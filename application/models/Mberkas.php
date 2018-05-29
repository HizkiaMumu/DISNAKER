<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mberkas extends CI_Model{

	public function getCari($q){
		$query=$this->db->query("SELECT * FROM registrasi_beasiswa WHERE nopendaftaran like '%$q%'");
		return $query->result_array();
	}

	public function getDapat($q){
		$query=$this->db->query("SELECT * FROM registrasi_beasiswa WHERE nopendaftaran like '%$q%'");
		return $query->row_array();
	}

	public function getAllBerkas(){
		$query=$this->db->query("SELECT * FROM berkas");
		return $query->result();
	}

	public function isiBerkasKosong($idberkas, $idpendaftar){
		$query=$this->db->query("INSERT INTO berkas_cek SET IDBERKAS='$idberkas', IDPENDAFTAR='$idpendaftar'");
		return $query;
	}

	public function nopendaftaran(){
        $query=$this->db->query("SELECT MAX(id) as idterbaru FROM registrasi_beasiswa");
		return $query->row_array();
    }

    public function getTerbaru($id){
		$query=$this->db->query("SELECT * FROM registrasi_beasiswa WHERE id='$id'");
		return $query->row_array();
	}



}
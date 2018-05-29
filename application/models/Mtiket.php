<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtiket extends CI_Model{
	private $table='tiket';

	public function getAll(){
		$query=$this->db->query("SELECT b.IDPERUSAHAAN, b.NPERUSAHAAN, a.IDTIKET, a.IDADMIN, a.JUDUL, a.TANGGAL, c.kategori, a.STATUS, d.surname  FROM tiket a LEFT JOIN Perusahaan b on a.IDPERUSAHAAN = b.IDPERUSAHAAN LEFT JOIN kategori_konsultasi c On a.IDKATEGORI = c.id_kategori LEFT JOIN users d ON a.IDADMIN = d.id ORDER BY IDTIKET DESC");
		return $query->result_array();
	}

	public function getPerPerusahaan(){
		$query=$this->db->query("SELECT b.IDPERUSAHAAN, b.NPERUSAHAAN, a.IDTIKET, a.IDADMIN, a.JUDUL, a.TANGGAL, c.kategori, a.STATUS, d.surname FROM tiket a LEFT JOIN Perusahaan b on a.IDPERUSAHAAN = b.IDPERUSAHAAN LEFT JOIN kategori_konsultasi c On a.IDKATEGORI = c.id_kategori LEFT JOIN users d ON a.IDADMIN = d.id ORDER BY IDTIKET DESC");
		return $query->result_array();
	}

	// public function getOneTiket($idtiket){
	// 	$query=$this->db->query("SELECT b.IDPERUSAHAAN, b.NPERUSAHAAN, a.IDTIKET, a.IDADMIN, a.JUDUL, a.TANGGAL FROM tiket a LEFT JOIN Perusahaan b on a.IDPERUSAHAAN = b.IDPERUSAHAAN WHERE a.IDTIKET='$idtiket'");
	// 	return $query->result_array();
	// }

	public function baru(){
		$tanggal = date('Y-m-d H:i:s');
		$data = array(
				'TANGGAL'		=> $tanggal,
				'JUDUL'			=> $this->input->post('judul'),
				'IDPERUSAHAAN'	=> $this->session->IDPERUSAHAAN,
				'IDKATEGORI'		=> $this->input->post('kategori'),
				'IDADMIN'		=> '0',
				'STATUS'		=> '0');
		$query  = $this->db->insert($this->table, $data);
		$id 	=$this->db->insert_id();
    	$res 	=$this->db->get_where($this->table,array('IDTIKET'=>$id))->row_array();
    	return $res;
	}

	public function idtiket($id){
    	$res 	=$this->db->query("SELECT MAX(IDTIKET) as its FROM tiket WHERE IDPERUSAHAAN='$id'");
    	return $res;
	}

	public function updateadmin($idtiket,$idadmin){
    	$res =$this->db->query("UPDATE tiket SET IDADMIN='$idadmin' WHERE IDTIKET='$idtiket'");
    	return $res;
	}

}

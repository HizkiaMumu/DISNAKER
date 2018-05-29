<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mhimbauan extends CI_Model{
	private $table='himbauan';

	public function getAll(){
		$this->db->select('*,date_format(tanggal,"%d-%m-%Y") as tanggal');
		$this->db->join('perusahaan','himbauan.id_perusahaan=perusahaan.IDPERUSAHAAN');
		$query=$this->db->get($this->table);
		return $query->result_array();
	}

	public function getAllemail(){
		$this->db->select('*,date_format(tgl_surat,"%d-%m-%Y") as tanggal');
		$this->db->join('perusahaan','himbauan_email.id_perusahaan=perusahaan.IDPERUSAHAAN');
		$query=$this->db->get('himbauan_email');
		return $query->result_array();
	}

	public function get($id){
		$this->db->select('*,date_format(tanggal,"%d-%m-%Y") as tanggal');
		$this->db->join('perusahaan','himbauan.id_perusahaan=perusahaan.IDPERUSAHAAN');
		$this->db->join('jenis_himbauan','himbauan.id_jenis_himbauan=jenis_himbauan.id_jenis');
		$this->db->where('id_himbauan',$id);
		$query=$this->db->get($this->table);
		return $query->row_array();
	}

	public function getOne($id){
		$this->db->where('id_perusahaan',$id);
		$query=$this->db->get($this->table);
		return $query->result();
	}

	public function create(array $data){
		$query=$this->db->insert($this->table,$data);
		return true;
	}

	public function update(array $data,$id){
		$this->db->where('id_himbauan',$id);
		$query=$this->db->update($this->table,$data);
		return true;
	}

	public function closetiket($id){
		$this->db->where('IDTIKET',$id);
		$query=$this->db->update('tiket',array('STATUS'=>'1'));
		return true;
	}

	public function getJenisHimbauan(){
		$query=$this->db->get('jenis_himbauan');
		return $query->result_array();
	}

	

}
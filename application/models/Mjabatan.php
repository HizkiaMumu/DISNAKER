<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mjabatan extends CI_Model{
	private $table='konfigurasi';

	public function getjabatan(){
		$query=$this->db->query("SELECT * FROM konfigurasi WHERE id_konfig='1'");
		return $query->row_array();
	}

	public function get($id){
		$query=$this->db->get_where($this->table,array('IDDASARHUKUM'=>$id));
		return $query->row_array();
	}

	public function create(array $newPengumuman){
    	$this->db->insert($this->table,$newPengumuman);
    	return true;
	}

	public function update(array $newPengumuman,$id){
    	$this->db->update($this->table,$newPengumuman,array('IDDASARHUKUM'=>$id));
    	return true;
	}

	public function delete($id)
	{
		$this->db->delete($this->table,array('IDDASARHUKUM'=>$id));			
		return true;		
	}

}
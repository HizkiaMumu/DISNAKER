<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mkonten extends CI_Model{
	private $table='content';

	public function getAll(){
		$query=$this->db->get($this->table);
		return $query->result_array();
	}

	public function get($id){
		$query=$this->db->get_where($this->table,array('id_content'=>$id));
		return $query->row_array();
	}

	public function create(array $newPengumuman){
    	$this->db->insert($this->table,$newPengumuman);
    	return true;
	}

	public function update(array $newPengumuman,$id){
    	$this->db->update($this->table,$newPengumuman,array('id_content'=>$id));
    	return true;
	}

	public function delete($id)
	{
		$this->db->delete($this->table,array('IDDASARHUKUM'=>$id));			
		return true;		
	}

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mfaq extends CI_Model{
	private $table='faq_isi';

	public function getAll(){
		$this->db->join('faq_kategori','faq_isi.id_faq_kategori=faq_kategori.id_faq_kategori');
		$query=$this->db->get($this->table);
		return $query->result_array();
	}

	public function get($id){
		$query=$this->db->get_where($this->table,array('id_faq'=>$id));
		return $query->row_array();
	}

	public function create(array $newPengumuman){
    	$this->db->insert($this->table,$newPengumuman);
    	return true;
	}

	public function update(array $newPengumuman,$id){
    	$this->db->update($this->table,$newPengumuman,array('id_faq'=>$id));
    	return true;
	}

	public function delete($id)
	{
		$this->db->delete($this->table,array('id_faq'=>$id));			
		return true;		
	}

}
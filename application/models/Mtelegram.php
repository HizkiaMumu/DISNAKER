<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtelegram extends CI_Model{
	private $table='telegram_outbox';

	public function outbox($jenis,$pesan,$tanggal){
		
		$this->db->query("INSERT INTO telegram_outbox SET 
			tanggal='$tanggal', 
			jenis='$jenis', 
			pesan='$pesan', 
			status='0'");			
		return true;		
	}

	// master lama ---------------------------------------------------------------------->
	public function getAll(){
		$query=$this->db->get($this->table);
		return $query->result_array();
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
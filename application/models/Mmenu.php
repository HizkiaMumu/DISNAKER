<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmenu extends CI_Model{
	private $table='menu_admin';

	public function getAll(){
		$this->db->select('menu_admin.*,a.TITLE as parent');
		$this->db->join('menu_admin as a',$this->table.'.IDPARENT=a.IDMENU','left');
		$query=$this->db->get($this->table);
		return $query->result_array();
	}

	public function get($idmenu){
		$query=$this->db->get_where($this->table,array('IDMENU'=>$idmenu));
		return $query->row_array();
	}

	public function create(array $newMenu){
    	$this->db->insert($this->table,$newMenu);
    	return true;
	}

	public function update(array $oldMenu,$id){
    	$this->db->update($this->table,$oldMenu,array('IDMENU'=>$id));
    	return true;
	}

	public function delete($idmenu)
	{
		$this->db->delete($this->table,array('IDMENU'=>$idmenu));			
		return true;		
	}

}
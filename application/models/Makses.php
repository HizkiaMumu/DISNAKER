<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Makses extends CI_Model{
	private $table='permissions';

	public function getAll(){
		$this->db->join('menu_admin',$this->table.'.idmenu=menu_admin.IDMENU','left');
		$query=$this->db->get($this->table);
		return $query->result_array();
	}

	public function get($access){
		$this->db->join('menu_admin',$this->table.'.idmenu=menu_admin.IDMENU','left');
		$query=$this->db->get_where($this->table,array('access'=>$access));
		return $query->row_array();
	}

	public function create(array $newAccess){
    	$this->db->insert($this->table,$newAccess);
    	return true;
	}

	public function update(array $oldAccess,$id){
    	$this->db->update($this->table,$oldAccess,array('access'=>$id));
    	return true;
	}

	public function delete($access)
	{
		$this->db->delete($this->table,array('access'=>$access));			
		return true;		
	}


}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mposts extends CI_Model{
	private $table='posts';

	public function getAll(){
		$this->db->select(' '.$this->table.'.*,users.username ');
		$this->db->join('users',$this->table.'.post_author=users.id','left');
		$query=$this->db->get($this->table);
		return $query->result_array();
	}

	public function get($id){
		$this->db->select(' '.$this->table.'.*,users.username ');
		$this->db->join('users',$this->table.'.post_author=users.id','left');
		$query=$this->db->get_where($this->table,array($this->table.'.id'=>$id));
		return $query->row_array();
	}

	public function create(array $newPosts){
    	$this->db->insert($this->table,$newPosts);
    	$id=$this->db->insert_id();
    	$res=$this->db->get_where($this->table,array('id'=>$id))->row_array();
    	return $res;
	}

	public function update(array $newPosts,$id){
    	$this->db->update($this->table,$newPosts,array('id'=>$id));
    	$res=$this->db->get_where($this->table,array('id'=>$id))->row_array();
    	return $res;
	}

	public function delete($id)
	{
		$this->db->delete($this->table,array('id'=>$id));			
		return true;		
	}

	public function countPermalink($str){
		$this->db->where('post_name',$str,'left');
		$count=$this->db->get('posts')->num_rows();
		return $count;
	}

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mprofil extends CI_Model{

	private $table='pencaker_master';

	public function __construct(){
		$this->load->database();
	}

	public function create(){
		$nik = $this->input->post('nik');

		$checkedNik = $this->db->get_where('pencaker_master', array('nik' => $nik));

		if ($checkedNik->row_array() != null) {
			return $this->db->where('nik', $nik)->update('pencaker_master', $this->input->post());
		} else {
			return $this->db->insert('pencaker_master', $this->input->post());
		}
	}

}

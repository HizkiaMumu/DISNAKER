<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlaporan extends CI_Model{
	private $table='panduan';

	public function JumPerusahaan(){
		$query = $this->db->query("SELECT * FROM perusahaan");
		return $query->result_array();
	}

	public function BelumWPP(){
		$query = $this->db->query("SELECT COUNT(IDPERUSAHAAN) as A FROM perusahaan WHERE (WNIL+WNIP+WNAL+WNAP) < '10'");
		return $query;
	}

	public function WajibPP(){
		$query = $this->db->query("SELECT * FROM perusahaan WHERE (WNIL+WNIP+WNAL+WNAP) >= '10' AND (WNIL+WNIP+WNAL+WNAP) < '50'");
		return $query->result_array();
	}

	public function Bipartit(){
		$query = $this->db->query("SELECT * FROM perusahaan WHERE (WNIL+WNIP+WNAL+WNAP) >= '50'");
		return $query->result_array();
	}

	public function MemilikiPP(){
		$query = $this->db->query("SELECT * FROM pengesahan_pp join perusahaan on pengesahan_pp.IDPERUSAHAAN=perusahaan.IDPERUSAHAAN");
		return $query;
	}
}
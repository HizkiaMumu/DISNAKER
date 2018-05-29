<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mstatistik extends CI_Model{
	private $table='panduan';

	public function JumPerusahaan(){
		$query = $this->db->query("SELECT COUNT(IDPERUSAHAAN) as A FROM perusahaan");
		return $query;
	}

	public function BelumWPP(){
		$query = $this->db->query("SELECT COUNT(IDPERUSAHAAN) as A FROM perusahaan WHERE (WNIL+WNIP+WNAL+WNAP) < '10'");
		return $query;
	}

	public function WajibPP(){
		$query = $this->db->query("SELECT COUNT(IDPERUSAHAAN) as A FROM perusahaan WHERE (WNIL+WNIP+WNAL+WNAP) >= '10' AND (WNIL+WNIP+WNAL+WNAP) < '50'");
		return $query;
	}

	public function Bipartit(){
		$query = $this->db->query("SELECT COUNT(IDPERUSAHAAN) as A FROM perusahaan WHERE (WNIL+WNIP+WNAL+WNAP) >= '50'");
		return $query;
	}

	public function MemilikiPP(){
		$query = $this->db->query("SELECT COUNT(IDPENGESAHAN) as A FROM pengesahan_pp");
		return $query;
	}

	public function PPeks2015(){
		$query = $this->db->query("SELECT COUNT(IDPENGESAHAN) as A FROM pengesahan_pp WHERE TGLMULAI like '%2015%'");
		return $query;
	}

	public function PPeks2016(){
		$query = $this->db->query("SELECT COUNT(IDPENGESAHAN) as A FROM pengesahan_pp WHERE TGLMULAI like '%2016%'");
		return $query;
	}

	public function PPeks2017(){
		$query = $this->db->query("SELECT COUNT(IDPENGESAHAN) as A FROM pengesahan_pp WHERE TGLMULAI like '%2017%'");
		return $query;
	}

}
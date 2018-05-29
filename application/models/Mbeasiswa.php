<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mbeasiswa extends CI_Model{
	private $table='registrasi_beasiswa';
	public $countFilteredRows=0;

	public function getAll(){
		$no=$this->input->post('start')+1;
		/*$this->db->select("{$no} as nomor,nama_lengkap,no_ktp,tempat_lahir,tanggal_lahir,jenis_perguruan_tinggi,program_studi,jurusan,semester,khs,id as pilihan");
		if($this->input->post("search[value]")!="")
		{
			$this->db->where("nama_lengkap like '%".$this->input->post("search[value]")."%' or no_ktp like '%".$this->input->post("search[value]")."%' or tempat_lahir like '%".$this->input->post("search[value]")."%' or tanggal_lahir like '%".$this->input->post("search[value]")."%' or jenis_perguruan_tinggi like '%".$this->input->post("search[value]")."%' or program_studi like '%".$this->input->post("search[value]")."%' or jurusan like '%".$this->input->post("search[value]")."%' or semester like '%".$this->input->post("search[value]")."%' or khs like '%".$this->input->post("search[value]")."%' ");
		}
		$this->db->from($this->table);
		*/
		$y=$this->input->post('length');
		$z=$this->input->post('start');
		if($y=="")$y=0;
		if($z=="")$z=0;
		$query=$this->db->query("SELECT {$no} as nomor,registrasi_beasiswa.nama_lengkap,registrasi_beasiswa.no_ktp,registrasi_beasiswa.tempat_lahir,registrasi_beasiswa.tanggal_lahir,registrasi_beasiswa.jenis_perguruan_tinggi,registrasi_beasiswa.program_studi,registrasi_beasiswa.jurusan,registrasi_beasiswa.semester,registrasi_beasiswa.khs,registrasi_beasiswa.id as pilihan,ifnull(x.id,'TIDAK_LULUS') as lulus FROM `registrasi_beasiswa` left join ( select *,1 as urut from (select * from registrasi_beasiswa where jenis='negeri' and jurusan='eksakta' order by khs desc limit 150) as a UNION ALL select *,2 as urut from (select * from registrasi_beasiswa where jenis='negeri' and jurusan='non_eksakta' order by khs desc limit 150) as b UNION ALL select *,3 as urut from (select * from registrasi_beasiswa where jenis='swasta' and jurusan='eksakta' order by khs desc limit 150) as c UNION ALL select *,4 as urut from (select * from registrasi_beasiswa where jenis='swasta' and jurusan='non_eksakta' order by khs desc limit 150) as d order by khs desc,urut ) as x on registrasi_beasiswa.id=x.id order by x.khs desc,urut limit ".$z.",".$y." ");
		
		$this->countFilteredRows=$this->db->count_all_results("(SELECT {$no} as nomor,registrasi_beasiswa.nama_lengkap,registrasi_beasiswa.no_ktp,registrasi_beasiswa.tempat_lahir,registrasi_beasiswa.tanggal_lahir,registrasi_beasiswa.jenis_perguruan_tinggi,registrasi_beasiswa.program_studi,registrasi_beasiswa.jurusan,registrasi_beasiswa.semester,registrasi_beasiswa.khs,registrasi_beasiswa.id as pilihan FROM `registrasi_beasiswa` left join ( select *,1 as urut from (select * from registrasi_beasiswa where jenis='negeri' and jurusan='eksakta' order by khs desc limit 150) as a UNION ALL select *,2 as urut from (select * from registrasi_beasiswa where jenis='negeri' and jurusan='non_eksakta' order by khs desc limit 150) as b UNION ALL select *,3 as urut from (select * from registrasi_beasiswa where jenis='swasta' and jurusan='eksakta' order by khs desc limit 150) as c UNION ALL select *,4 as urut from (select * from registrasi_beasiswa where jenis='swasta' and jurusan='non_eksakta' order by khs desc limit 150) as d order by khs desc,urut ) as x on registrasi_beasiswa.id=x.id order by x.khs desc,urut) as a ");
		//$query=$this->db->get($this->table);
		return $query->result_array();
	}

	public function getCountFilteredRows()
	{
		return $this->countFilteredRows;
	}

	public function countAll()
	{
		$query=$this->db->get($this->table);
		return $query->num_rows();
	}

	public function get($id){
		$query=$this->db->get_where($this->table,array('id'=>$id));
		return $query->row_array();
	}

	public function create(array $newBeasiswa){
    	$this->db->insert($this->table,$newBeasiswa);
    	return true;
	}

	public function update(array $newBeasiswa,$id){
    	$this->db->update($this->table,$newBeasiswa,array('id'=>$id));
    	return true;
	}

	public function delete($id)
	{
		$this->db->delete($this->table,array('id_beasiswa'=>$id));			
		return true;		
	}

	public function validCaptcha($captcha){
		$expiration = time() - 7200; // Two hour limit
		$this->db->where('captcha_time < ', $expiration)
		        ->delete('captcha');

		// Then see if a captcha exists:
		$sql = 'SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND ip_address = ? AND captcha_time > ?';
		$binds = array($captcha, $this->input->ip_address(), $expiration);
		$query = $this->db->query($sql, $binds);
		$row = $query->row();		
		if ($row->count == 0)
		{
		        return false;
		}
		return true;
	}
}
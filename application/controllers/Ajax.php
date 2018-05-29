<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {
		
	public function __construct(){
		parent::__construct();
		//$this->input->is_ajax_request() or die('Ajax Request Only');
	}

	public function ambilkelurahan(){

		$model=$this->input->post('model');
		$kelurahan = $this->db->get_where('kelurahan',array('id_kecamatan'=>$model))->result_array();
		foreach ($kelurahan as $kel ){
			$prefix.= "<option value='".$kel['id_kelurahan']."'>".$kel['nama_kelurahan']."</option>";
		}
		echo $prefix;
	}

	public function ajax_list_umkm(){

		//$sudah= $this->input->post("sudah");
		$this->db->limit($this->input->post('length'),$this->input->post('start'));
		$list = $this->db->get('mstr_umkm');
		$data = array();
		$no = $this->input->post('start');
		foreach ($list->result() as $umkm) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $umkm->nama_usaha;
			$row[] = $umkm->alamat_usaha;
			$row[] = $umkm->jenis_usaha;
			$row[] = $umkm->no_izin;
			$row[] = $umkm->id_umkm;
			$data[] = $row;
		}

		$output = array(
				"draw" => $this->input->post('draw'),
				"recordsTotal" => $this->db->get('mstr_umkm')->num_rows(),
				"recordsFiltered" => $this->db->get('mstr_umkm')->num_rows(),
				"data" => $data,
		);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_list_menengah(){

		//$sudah= $this->input->post("sudah");
		$this->db->limit($this->input->post('length'),$this->input->post('start'));
		$list = $this->db->get('mstr_menegahbesar');
		$data = array();
		$no = $this->input->post('start');
		foreach ($list->result() as $umkm) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $umkm->nama_perusahaan;
			$row[] = $umkm->alamat;
			$row[] = $umkm->no_telp;
			$row[] = $umkm->email;
			$row[] = $umkm->id_imb;
			$data[] = $row;
		}

		$output = array(
				"draw" => $this->input->post('draw'),
				"recordsTotal" => $this->db->get('mstr_menegahbesar')->num_rows(),
				"recordsFiltered" => $this->db->get('mstr_menegahbesar')->num_rows(),
				"data" => $data,
		);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_list_koperasi(){

		//$sudah= $this->input->post("sudah");
		$this->db->limit($this->input->post('length'),$this->input->post('start'));
		$list = $this->db->get('mstr_koperasi');
		$data = array();
		$no = $this->input->post('start');
		foreach ($list->result() as $umkm) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $umkm->nama_koperasi;
			$row[] = $umkm->no_badan_hukum;
			$row[] = $umkm->pengesahan_oleh;
			$row[] = $umkm->tempat_kedudukan;
			$row[] = $umkm->id_koperasi;
			$data[] = $row;
		}

		$output = array(
				"draw" => $this->input->post('draw'),
				"recordsTotal" => $this->db->get('mstr_koperasi')->num_rows(),
				"recordsFiltered" => $this->db->get('mstr_koperasi')->num_rows(),
				"data" => $data,
		);
		//output to json format
		echo json_encode($output);
	}

}
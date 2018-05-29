<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pencaker extends CI_Controller {
	public function  __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model(array('Mumkm'));
	}

	public function master()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/pencaker/index');
		$this->load->view('admin/footer');
	}

	public function baru(){
		$data=array(
			'kecamatan' => $this->db->get('kecamatan')->result()
		);

		$this->load->view('admin/header');
		$this->load->view('admin/pencaker/inputdata',$data);
		$this->load->view('admin/footer');
	}

	public function add(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_usaha','Nama Usaha','required');
		if($this->form_validation->run() == false){
			$this->baru();
		}else{
			$this->Mumkm->baru();
			redirect('umkm');			
		}
	}

	public function edit($id)
	{
		//if ($this->auth->check('admin#beasiswa')===false)show_error('Anda Tidak Memiliki Akses Ke Halaman Ini');
		$data=array(
			'kecamatan' => $this->db->get('kecamatan')->result(),
			'kelurahan' => $this->db->get('kelurahan')->result(),
			'umkm' => $this->db->select('*,date_format(tgl_izin,"%d-%m-%Y") as tgl_izin, date_format(tgl_akhir,"%d-%m-%Y") as tgl_akhir')->get_where('mstr_umkm',array('id_umkm'=>$id))->row_array()
		);

		$this->load->view('admin/header');
		$this->load->view('admin/umkm/edit',$data);
		$this->load->view('admin/footer');
	}

	public function update(){

		$this->Mumkm->update();
		redirect('umkm');
	}

	public function delete($id)
	{
		if(empty($id) )return show_404();
		$this->db->delete('mstr_umkm',array('id_umkm'=>$id));			
		redirect('umkm');		
	}
	
}


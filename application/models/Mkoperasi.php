<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mkoperasi extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

     public function get($id){
          return $this->db->join('proses_pp','proses_pp.id_proses=ppbaru.ID_PROSES')->select('*,date_format(TGL_SKIU,"%d-%m-%Y") as TGL_SKIU')->get_where('ppbaru',array('IDPERUSAHAAN'=>$id))->row_array();
     }

	public function baru()
	{
          $data=array('nama_koperasi'    => $this->input->post('nama_koperasi'),
                    'no_badan_hukum'  => $this->input->post('no_badan_hukum'),
                    'pengesahan_oleh'      => $this->input->post('pengesahan_oleh'),
                    'tempat_kedudukan'    => $this->input->post('tempat_kedudukan'),
                    'pembuat_akta'    => $this->input->post('pembuat_akta'),
                    'no_PAD'    => $this->input->post('no_PAD'),
                    'tgl_badan_hukum'      => convertDate($this->input->post('tgl_badan_hukum')),
                    'tgl_PAD'    => convertDate($this->input->post('tgl_PAD')),
                    'NPWP'       => $this->input->post('NPWP'),
                    );
        $this->db->insert("mstr_koperasi",$data);
	}

     public function update()
     {
          $data=array('nama_koperasi'    => $this->input->post('nama_koperasi'),
                    'no_badan_hukum'  => $this->input->post('no_badan_hukum'),
                    'pengesahan_oleh'      => $this->input->post('pengesahan_oleh'),
                    'tempat_kedudukan'    => $this->input->post('tempat_kedudukan'),
                    'pembuat_akta'    => $this->input->post('pembuat_akta'),
                    'no_PAD'    => $this->input->post('no_PAD'),
                    'tgl_badan_hukum'      => convertDate($this->input->post('tgl_badan_hukum')),
                    'tgl_PAD'    => convertDate($this->input->post('tgl_PAD')),
                    'NPWP'       => $this->input->post('NPWP'),
                    );
        $this->db->update("mstr_koperasi",$data,array('id_koperasi'=>$this->input->post('id_koperasi')));
     }

     public function count_all()
     {
          return $this->db->query("SELECT COUNT(id_umkm) FROM mstr_umkm")->row_array();
     }
     

}
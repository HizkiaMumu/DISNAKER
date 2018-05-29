<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmenengah extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

     public function get($id){
          return $this->db->join('proses_pp','proses_pp.id_proses=ppbaru.ID_PROSES')->select('*,date_format(TGL_SKIU,"%d-%m-%Y") as TGL_SKIU')->get_where('ppbaru',array('IDPERUSAHAAN'=>$id))->row_array();
     }

	public function baru()
	{
		$data=array('nama_perusahaan'    => $this->input->post('nama_perusahaan'),
                    'alamat'  => $this->input->post('alamat'),
                    'no_telp' 	   => $this->input->post('no_telp'),
                    'fax'    => $this->input->post('fax'),
                    'email'    => $this->input->post('email'),
                    'jum_pekerja'    => $this->input->post('jum_pekerja'),
                    'investasi'     => $this->input->post('investasi'),
                    'jenis_kbli'		   => $this->input->post('jenis_kbli'),
                    'keterangan'	   => $this->input->post('keterangan'),
                    );
        $this->db->insert("mstr_menegahbesar",$data);
	}

     public function update()
     {
          $data=array('nama_perusahaan'    => $this->input->post('nama_perusahaan'),
                    'alamat'  => $this->input->post('alamat'),
                    'no_telp'         => $this->input->post('no_telp'),
                    'fax'    => $this->input->post('fax'),
                    'email'    => $this->input->post('email'),
                    'jum_pekerja'    => $this->input->post('jum_pekerja'),
                    'investasi'     => $this->input->post('investasi'),
                    'jenis_kbli'           => $this->input->post('jenis_kbli'),
                    'keterangan'      => $this->input->post('keterangan'),
                    );
        $this->db->update("mstr_menegahbesar",$data,array('id_imb'=>$this->input->post('id_imb')));
     }

     public function count_all()
     {
          return $this->db->query("SELECT COUNT(id_umkm) FROM mstr_umkm")->row_array();
     }
     

}
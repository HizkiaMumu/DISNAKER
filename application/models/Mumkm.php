<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mumkm extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

     public function get($id){
          return $this->db->join('proses_pp','proses_pp.id_proses=ppbaru.ID_PROSES')->select('*,date_format(TGL_SKIU,"%d-%m-%Y") as TGL_SKIU')->get_where('ppbaru',array('IDPERUSAHAAN'=>$id))->row_array();
     }

	public function baru()
	{
		$data=array('nama_usaha'    => $this->input->post('nama_usaha'),
                    'nama_pengusaha'  => $this->input->post('nama_pengusaha'),
                    'jenis_usaha' 	   => $this->input->post('jenis_usaha'),
                    'alamat_usaha'    => $this->input->post('alamat_usaha'),
                    'kecamatan'    => $this->input->post('kecamatan'),
                    'kelurahan'    => $this->input->post('kelurahan'),
                    'modal_usaha'     => $this->input->post('modal_usaha'),
                    'no_izin'		   => $this->input->post('no_izin'),
                    'tgl_izin'	   => convertDate($this->input->post('tgl_izin')),
                    'tgl_akhir'	   => convertDate($this->input->post('tgl_akhir')),
                    'jenis_proses'	   => $this->input->post('keterangan'),
                    );
        $this->db->insert("mstr_umkm",$data);
	}

     public function update()
     {
          $data=array('nama_usaha'    => $this->input->post('nama_usaha'),
                    'nama_pengusaha'  => $this->input->post('nama_pengusaha'),
                    'jenis_usaha'     => $this->input->post('jenis_usaha'),
                    'alamat_usaha'    => $this->input->post('alamat_usaha'),
                    'kecamatan'    => $this->input->post('kecamatan'),
                    'kelurahan'    => $this->input->post('kelurahan'),
                    'modal_usaha'     => $this->input->post('modal_usaha'),
                    'no_izin'         => $this->input->post('no_izin'),
                    'tgl_izin'        => convertDate($this->input->post('tgl_izin')),
                    'tgl_akhir'       => convertDate($this->input->post('tgl_akhir')),
                    'jenis_proses'    => $this->input->post('keterangan'),
                    );
        $this->db->update("mstr_umkm",$data,array('id_umkm'=>$this->input->post('id_umkm')));
     }

     public function count_all()
     {
          return $this->db->query("SELECT COUNT(id_umkm) FROM mstr_umkm")->row_array();
     }
     

}
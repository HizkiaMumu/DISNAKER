<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpkb extends CI_Model{
	
	var $table = 'pkb_pendaftaran';
     var $column_order = array(null, 'tanggal','id_perisahaan','jenis_proses'); //set column field database for datatable orderable
     var $column_search = array('tanggal','id_perisahaan','jenis_proses'); //set column field database for datatable searchable 
     var $order = array('id_proses' => 'asc'); // default order 

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

     public function getAllNew(){
          return $this->db->query("SELECT a.id_pkb_pendaftaran, a.tanggal, a.id_perusahaan, b.NPERUSAHAAN, b.NAMA_SP, 'Pendaftaran' as jenis, a.status FROM pkb_pendaftaran a LEFT JOIN perusahaan b ON b.IDPERUSAHAAN = a.id_perusahaan 
               UNION 
               SELECT a.id_pkb_pelaporan, a.tanggal, a.id_perusahaan, b.NPERUSAHAAN, b.NAMA_SP, 'Pelaporan' as jenis, a.status FROM pkb_pelaporan a LEFT JOIN perusahaan b ON b.IDPERUSAHAAN = a.id_perusahaan ")->result_array();
     }

     public function getAllPendaftaran(){
          return $this->db->query("SELECT * FROM pkb_pendaftaran a LEFT JOIN perusahaan b ON b.IDPERUSAHAAN = a.id_perusahaan")->result_array();
     }

     public function getAllPelaporan(){
          return $this->db->query("SELECT * FROM pkb_pelaporan a LEFT JOIN perusahaan b ON b.IDPERUSAHAAN = a.id_perusahaan")->result_array();
     }

     public function getAllPengesahan(){
          return $this->db->query("SELECT * FROM pkb_pengesahan a LEFT JOIN perusahaan b ON b.IDPERUSAHAAN = a.id_perusahaan")->result_array();
     }

     public function getAllPotensi(){
          return $this->db->query("SELECT b.IDPERUSAHAAN, b.NPERUSAHAAN, a.NAMA_SP, a.JUMLAH_ANGGOTA FROM serikat_pekerja a JOIN perusahaan b ON a.IDPERUSAHAAN = b.IDPERUSAHAAN")->result_array();
     }

     public function insert($data)
     {
        $this->db->insert($this->table,$data);
     }

     public function update($data,$id)
     {
        $this->db->update($this->table,$data,array('id_perusahaan'=>$id));
     }

     // public function berkasproses($data,$id)
     // {
     //    $this->db->update($this->table,$data,array('id_perusahaan'=>$id));
     // }

     public function get($id){
          return $this->db->select('*,date_format(berkalu_pkb_awal,"%d-%m-%Y") as berkalu_pkb_awal,date_format(berkalu_pkb_akhir,"%d-%m-%Y") as berkalu_pkb_akhir')->get_where('pkb_pendaftaran',array('id_perusahaan'=>$id))->result();
     }

     public function getDetil($id){
          return $this->db->join('perusahaan','pkb_pendaftaran.id_perusahaan=perusahaan.IDPERUSAHAAN')->select('*,date_format(berkalu_pkb_awal,"%d-%m-%Y") as berkalu_pkb_awal,date_format(berkalu_pkb_akhir,"%d-%m-%Y") as berkalu_pkb_akhir')->get_where('pkb_pendaftaran',array('id_pkb_pendaftaran'=>$id))->row_array();
     }

     public function getDetilPelaporan($id){
          return $this->db->join('perusahaan','pkb_pengesahan.id_perusahaan=perusahaan.IDPERUSAHAAN')->select('*')->get_where('pkb_pengesahan',array('id_pencatatan_pkb'=>$id))->row_array();
     }

     public function getOneArr($id){
          return $this->db->query("SELECT *,date_format(berkalu_pkb_awal,'%d-%m-%Y') as berkalu_pkb_awal,date_format(berkalu_pkb_akhir,'%d-%m-%Y') as berkalu_pkb_akhir FROM pkb_pendaftaran a LEFT JOIN perusahaan b ON b.IDPERUSAHAAN = a.id_perusahaan WHERE a.id_perusahaan='$id'")->row_array();
     }

     public function getOne($id){
          return $this->db->get_where('pkb_pendaftaran',array('id_perusahaan'=>$id))->result();
     }

     public function getAllLampiran($id){
          return $this->db->get_where('lampiran',array('IDPERUSAHAAN'=>$id))->result_array();
     }

     public function getLampiran($idperusahaan,$jenislampiran){
          return $this->db->get_where('lampiran',array('IDPERUSAHAAN'=>$idperusahaan,'JENISLAMPIRAN'=>$jenislampiran))->row_array();
     }

     public function chek($id){
          $chek       =  $this->db->get_where('pkb_pendaftaran',array('id_perusahaan'=>$id));
          if($chek->num_rows()>0){
               return 1;
          }else{
               return 0;
          }
     }
     public function chekpelaporan($id){
          $chek       =  $this->db->get_where('pkb_pelaporan',array('id_perusahaan'=>$id));
          if($chek->num_rows()>0){
               return 1;
          }else{
               return 0;
          }
     }

     private function _get_datatables_query()
     {
          
          $this->db->from($this->tableproses);

          $i = 0;
     
          foreach ($this->column_search as $item) // loop column 
          {
               if($this->input->post('search')['value']) // if datatable send POST for search
               {
                    
                    if($i===0) // first loop
                    {
                         $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                         $this->db->like($item, $this->input->post('search')['value']);
                    }
                    else
                    {
                         $this->db->or_like($item, $this->input->post('search')['value']);
                    }

                    if(count($this->column_search) - 1 == $i) //last loop
                         $this->db->group_end(); //close bracket
               }
               $i++;
          }
          
               $order = $this->order;
               $this->db->order_by(key($order), $order[key($order)]);

     }

     public function getProsesPP(){
          return $this->db->get('proses_pp')->result();
     }

     public function count_all()
     {
          $this->db->from($this->table);
          return $this->db->count_all_results();
     }

     function count_filtered($pp="",$sudah="")
     {
          $this->_get_datatables_query($pp,$sudah);
          $query = $this->db->get();
          return $query->num_rows();
     }

    public function berkasproses($idpkb,$proses)
     {
          return $this->db->query("UPDATE pkb_pendaftaran SET status='$proses' WHERE id_pkb_pendaftaran='$idpkb'");
     }


}
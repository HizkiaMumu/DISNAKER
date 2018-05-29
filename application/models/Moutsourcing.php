<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Moutsourcing extends CI_Model{
	
	var $table = 'outsource_pelaporan';
     var $column_order = array(null, 'tanggal','id_perisahaan','jenis_proses'); //set column field database for datatable orderable
     var $column_search = array('tanggal','id_perisahaan','jenis_proses'); //set column field database for datatable searchable 
     var $order = array('id_proses' => 'asc'); // default order 

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

     public function insert($data)
     {
        $this->db->insert($this->table,$data);
        return $this->db->insert_id();
     }

     public function update($data,$id)
     {
        $this->db->update($this->table,$data,array('id_out_pelaporan'=>$id));
     }

     public function insertppj($data)
     {
        $this->db->insert('outsource_ppj',$data);
     }

     public function updateppj($data,$id)
     {
        $this->db->update('outsource_ppj',$data,array('id_out_ppj'=>$id));
     }

     public function insertppp($data)
     {
        $this->db->insert('outsource_ppp',$data);
     }

     public function updateppp($data,$id)
     {
        $this->db->update('outsource_ppp',$data,array('id_out_ppp'=>$id));
     }

     public function insertppk($data)
     {
        $this->db->insert('outsource_ppk',$data);
        return $this->db->insert_id();
     }

     public function updateppk($data,$id)
     {
        $this->db->update('outsource_ppk',$data,array('id_out_ppk'=>$id));
     }

     public function get($id){
          return $this->db->get_where('outsource_pelaporan',array('id_out_pelaporan'=>$id))->row_array();
     }

     public function getDetilPjpp($id){
          return $this->db->get_where('outsource_pelaporan',array('id_out_pelaporan'=>$id))->row_array();
     }

     public function getAll($id=""){
          //if(!empty($id))$this->db->where('id_perusahaan',$id);
          return $this->db->query("SELECT * FROM outsource_pelaporan a LEFT JOIN outsource_pelaporan_detail b ON a.id_out_pelaporan = b.id_out_pelaporan WHERE a.id_perusahaan='$id'")->result_array();
     }

     public function getppj($id){
          return $this->db->get_where('outsource_ppj',array('id_out_ppj'=>$id))->row_array();
     }

     public function getAllppj($id){
          return $this->db->get_where('outsource_ppj',array('id_perusahaan'=>$id))->result_array();
     }

     public function getAllAdminppj(){
          return $this->db->get('outsource_ppj')->result_array();
     }

     public function getppp($id){
          return $this->db->get_where('outsource_ppp',array('id_out_ppp'=>$id))->row_array();
     }

     public function getAllppp($id){
          return $this->db->get_where('outsource_ppp',array('id_perusahaan'=>$id))->result_array();
     }

     public function getAllAdminppp(){
          return $this->db->get_where('outsource_ppp')->result_array();
     }

     public function getppk($id){
          return $this->db->get_where('outsource_ppk',array('id_out_ppk'=>$id))->row_array();
     }

     public function getAllppk($id){
          return $this->db->get_where('outsource_ppk',array('id_perusahaan'=>$id))->result_array();
     }

     public function getAllAdminppk(){
          return $this->db->get_where('outsource_ppk')->result_array();
     }

     public function getAllLampiran($id){
          return $this->db->get_where('lampiran',array('IDPERUSAHAAN'=>$id))->result_array();
     }

     public function getLampiran($idperusahaan,$jenislampiran){
          return $this->db->get_where('lampiran',array('IDPERUSAHAAN'=>$idperusahaan,'JENISLAMPIRAN'=>$jenislampiran))->row_array();
     }

     public function chek($id){
          $chek       =  $this->db->get_where('ppbaru',array('IDPERUSAHAAN'=>$id));
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

    


}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mperusahaan extends CI_Model{
	
	var $table = 'perusahaan';

	var $column_order = array(null, 'NPERUSAHAAN','JENIS','ALAMAT','PEMILIK','EMAIL'); //set column field database for datatable orderable
	var $column_search = array('NPERUSAHAAN','JENIS','ALAMAT','PEMILIK','EMAIL'); //set column field database for datatable searchable 
	var $order = array('EMAIL' => 'DESC'); // default order 

	// var $column_order = array(null, 'NPERUSAHAAN','JENIS','ALAMAT','PEMILIK','PEKERJA'); //set column field database for datatable orderable
	// var $column_search = array('NPERUSAHAAN','JENIS','ALAMAT','PEMILIK','PEKERJA'); //set column field database for datatable searchable 
	// var $order = array('IDPERUSAHAAN' => 'asc'); // default order 


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private function _get_datatables_query($pp="",$sudah="")
	{
		
		$this->db->from($this->table);

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
		
		if($pp==1)$this->db->where('WNIL + WNIP + WNAL + WNAP >= 10',null,false);
		if($pp==2)$this->db->where('WNIL + WNIP + WNAL + WNAP >= 50',null,false);
		if($sudah==1)$this->db->where('STATUS_PP',1);
		if($sudah==3){
			$this->db->where('WNIL + WNIP + WNAL + WNAP >= 50',null,false);
		}
		if(is_numeric($sudah) && $sudah==0){
			$this->db->where('STATUS_PP',0);
			$this->db->where('IDPERUSAHAAN not in (select IDPERUSAHAAN from pengesahan_pp)');
		}
		//$this->db->order_by('(WNIL + WNIP + WNAL + WNAP)','desc');
		if($this->input->post('order')['0']['column']==5){
		$this->db->order_by('(WNIL + WNIP + WNAL + WNAP)',$this->input->post('order')['0']['dir']);			
		}else{
			if(isset($_POST['order'])) // here order processing
			{
				$this->db->order_by($this->column_order[$this->input->post('order')['0']['column']], $this->input->post('order')['0']['dir']);
			} 
			else if(isset($this->order))
			{
				$order = $this->order;
				$this->db->order_by(key($order), $order[key($order)]);
			}			
		}
	}

	function get_datatables($pp="",$sudah="")
	{
		$this->_get_datatables_query($pp,$sudah);
		if($this->input->post('length') != -1)
		$this->db->limit($this->input->post('length'), $this->input->post('start'));
		$query = $this->db->get();
		return $query->result();
	}

	function get_datatables_bipartit($pp="",$sudah="")
	{
		$this->_get_datatables_query($pp,$sudah);
		if($this->input->post('length') != -1)
		$this->db->limit($this->input->post('length'), $this->input->post('start'));
		$query = $this->db->get();
		return $query->result();
	}


	function count_filtered($pp="",$sudah="")
	{
		$this->_get_datatables_query($pp,$sudah);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	public function get($id){
		return $this->db->get_where('perusahaan',array('IDPERUSAHAAN'=>$id))->row_array();
	}

	public function getReg($id){
		return $this->db->select('*,register_perusahaan.EMAIL,register_perusahaan.PASSWORD')->join('perusahaan','register_perusahaan.IDPERUSAHAAN=perusahaan.IDPERUSAHAAN')->get_where('register_perusahaan',array('register_perusahaan.IDPERUSAHAAN'=>$id))->row_array();
	}

	public function getRegAll(){
		$query= $this->db->query('SELECT *,register_perusahaan.EMAIL,register_perusahaan.PASSWORD FROM register_perusahaan join perusahaan ON register_perusahaan.IDPERUSAHAAN=perusahaan.IDPERUSAHAAN');
		return $query->result_array();
	}

	public  function getSuratPermohonan($id){
		$this->db->join('ppbaru','perusahaan.IDPERUSAHAAN=ppbaru.IDPERUSAHAAN','left');
		return $this->db->get_where('perusahaan',array('perusahaan.IDPERUSAHAAN'=>$id))->row_array();
	}
}
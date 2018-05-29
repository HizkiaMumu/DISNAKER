<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mserikat extends CI_Model{
	
	var $table = 'serikat_pekerja';
	var $column_order = array(null, 'NPERUSAHAAN','JENIS','ALAMAT','PEMILIK'); //set column field database for datatable orderable
	var $column_search = array('NPERUSAHAAN','JENIS','ALAMAT','PEMILIK'); //set column field database for datatable searchable 
	var $order = array('IDPERUSAHAAN' => 'asc'); // default order 

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private function _get_datatables_query()
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
		
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);

	}

	function get_datatables()
	{
		$this->_get_datatables_query();
		if($this->input->post('length') != -1)
		$this->db->limit($this->input->post('length'), $this->input->post('start'));
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	public function getAll()
	{
		$serikat = $this->db->get($this->table);
		return $serikat->result();
	}

	public function get($id){
		return $this->db->get_where('perusahaan',array('IDPERUSAHAAN'=>$id))->row_array();
	}

	public  function getSuratPermohonan($id){
		$this->db->join('ppbaru','perusahaan.IDPERUSAHAAN=ppbaru.IDPERUSAHAAN','left');
		return $this->db->get_where('perusahaan',array('perusahaan.IDPERUSAHAAN'=>$id))->row_array();
	}
}
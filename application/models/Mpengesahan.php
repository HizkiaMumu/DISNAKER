<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpengesahan extends CI_Model{
	
	var $column_order = array(null, 'NPERUSAHAAN','JENISPENGESAHAN','NOREGISTRASI','NOKEPUTUSAN','TGLBERAKHIR'); //set column field database for datatable orderable
	var $column_search = array('NPERUSAHAAN','JENISPENGESAHAN','NOREGISTRASI','NOKEPUTUSAN'); //set column field database for datatable searchable 
	var $order = array('pengesahan_pp.TGLBERAKHIR' => 'ASC'); // default order 
	public function __construct()
	{
		parent::__construct();
	}

	private function _get_datatables_query($pp="",$sudah="")
	{
		
		$this->db->from('pengesahan_pp');
		$this->db->join('perusahaan','pengesahan_pp.IDPERUSAHAAN=perusahaan.IDPERUSAHAAN');
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
		$this->db->from('pengesahan_pp');
		return $this->db->count_all_results();
	}

	// public function getDetilPerusahaan($id){
	// 	$this->db->select('ppbaru.*,perusahaan.IDPERUSAHAAN,NPERUSAHAAN,ALAMAT,EMAIL,FAX,JENIS,TELP');
	// 	return $this->db->join('ppbaru','perusahaan.IDPERUSAHAAN=ppbaru.IDPERUSAHAAN','LEFT')->get_where('perusahaan',array('perusahaan.IDPERUSAHAAN'=>$id))->row_array();
	// }

	public function getDetilPerusahaan($id){
		$this->db->select('IDPERUSAHAAN,NPERUSAHAAN,ALAMAT,WNIL,WNIP,JENIS');
		return $this->db->get_where('perusahaan',array('perusahaan.IDPERUSAHAAN'=>$id))->row_array();
	}
	public function getOnePengesahan($id){
		$query = $this->db->query("SELECT * FROM pengesahan_pp a, perusahaan b WHERE a.IDPERUSAHAAN = b.IDPERUSAHAAN AND a.IDPERUSAHAAN='$id'");
		return $query->row_array();
	}

	public function pengesahan(array $newPengesahan){
    	$this->db->insert('pengesahan_pp',$newPengesahan);
    	return true;
	}

	public function updatepp($data,$id){
		$this->db->update('ppbaru',$data,array('IDPENGAJUANBARU'=>$id));
		return true;
	}
}

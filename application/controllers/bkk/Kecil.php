<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kecil extends CI_Controller {
	public function  __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		//if ($this->auth->check('admin#beasiswa')===false)show_error('Anda Tidak Memiliki Akses Ke Halaman Ini');
		$data=array(
			'csrf' => array(
		        'name' => $this->security->get_csrf_token_name(),
		        'hash' => $this->security->get_csrf_hash()
			),
		);

		$this->load->view('admin/header');
		$this->load->view('admin/industri/index-kecil',$data);
		$this->load->view('admin/footer');
	}

	
}


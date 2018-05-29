<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('form_validation','auth'));	
	}
	
	public function index()
	{
		// if ($this->auth->check('admin#dashboard')===false)
		// {
		// 	show_error('Anda Tidak Memiliki Akses Ke Halaman Ini');
		// }
		
		$data=array();
		$this->load->view('admin/header');
		$this->load->view('admin/dashboard',$data);
		$this->load->view('admin/footer');
	}

}
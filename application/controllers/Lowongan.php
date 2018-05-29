<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lowongan extends CI_Controller {
		
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('lowongan/index');
	}

	public function loginperusahaan(){
		$this->load->view('login/lowongan');
	}

}
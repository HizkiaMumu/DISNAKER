<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pencaker extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('pencaker-head');
		$this->load->view('pencaker/index');
		$this->load->view('pencaker-foot');
	}

	public function profil(){
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nik', 'nik', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('pencaker-head');
			$this->load->view('pencaker/profil');
			$this->load->view('pencaker-foot');
		} else {
			// $this->Mprofil->create();
			$this->load->view('pencaker-head');
			$this->load->view('pencaker/profil');
			$this->load->view('pencaker-foot');
		}
	}

}

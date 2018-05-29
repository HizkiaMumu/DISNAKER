<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
		
	public function __construct(){
		parent::__construct();
	}

	public function simpati(){
		$this->load->view('login/simpati');
	}

	public function imta(){
		$this->load->view('login/imta');
	}

	public function bkk(){
		$this->load->view('login/bkk');
	}

	public function pencaker(){
		$this->load->view('login/pencaker');
	}

	public function registrasi(){
		$this->load->view('login/registrasi');
	}

}
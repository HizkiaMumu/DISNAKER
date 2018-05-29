<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
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

	/**
	 * login form
	 *
	 * @return string form login
	 */
	public function login(){
		if($this->_validasiFormLogin()){
			if($this->auth->login($this->input->post('username'),$this->input->post('password'))){
				redirect('admin/dashboard','refresh');
			}		
		}

		$csrf = array(
		        'name' => $this->security->get_csrf_token_name(),
		        'hash' => $this->security->get_csrf_hash()
		);
		$data=array('csrf'=>$csrf);		
		$this->load->view('admin/login',$data);			

	}

	/**
	 * logout
	 *
	 * @return void
	 */
	public function logout(){
		$this->auth->logout();
		redirect('');
	}

	public function _validasiFormLogin(){
        $this->form_validation->set_rules('username', 'Username', 'required',
                array('required' => ' %s harus di isi.')
        );

        $this->form_validation->set_rules('password', 'Password', 'required',
                array('required' => ' %s harus di isi.')
        );
        if ($this->form_validation->run() == FALSE)
        {
                return false;
        }
        else
        {
                return true;
        }

	}


}

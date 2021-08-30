<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Login extends CI_Controller {
 
	function __construct()
	{
		parent::__construct();
		$this->load->model('Auth');
	}
 
	public function index()
	{
		$this->load->view('vlogin');
	}
 
	public function proses()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if($this->Auth->login_user($username,$password))
		{
            $datasession = array('nama' => $username, 'status' => 'login');
            $this->session->set_userdata($datasession);
			redirect('welcome');
		}
		else
		{
			$this->session->set_flashdata('error','Username & Password salah');
			redirect('login');
		}
	}
 
	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('is_login');
		redirect('login');
	}

    // public function cek_session()
	// {
	// 	$username = $this->session->username;
	// 	$logged_in = $this->session->logged_in;
	// 	if (empty($username) or empty($logged_in))
	// 	{
	// 		redirect(base_url());
	// 	}
	// }
 
	
 
}
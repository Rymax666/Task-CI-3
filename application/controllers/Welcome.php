<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('Anggota');
		$this->load->model('Auth');
		$this->Auth->cek_login();
	}


	public function index()
	{
		$record = $this->Anggota->getDataAnggota();
		$data = array('data_anggota' => $record );
		$this->load->view('home', $data);
	}
	public function insertData()
	{
		$this->load->view('insert');
	}
	public function updateData($id)
	{
		$record = $this->Anggota->getDataAnggotaDetail($id);
		$data = array('data_anggota' => $record);
		$this->load->view('update', $data);
	}
	public function insertAction()
	{
		$nip = $this->input->post('nip');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$gender = $this->input->post('gender');

		$record = $this->Anggota->getDataAnggota();

		if(strlen($nip) != 5){
			redirect("Welcome/insertData?msg_error=2");
			return;
		}

		if(!is_numeric($nip)){
			redirect("Welcome/insertData?msg_error=3");
			return;
		}

		foreach($record as $key){
			if($nip == $key->nip){
				redirect("Welcome/insertData?msg_error=1");
				return;
			}
			if($nama == $key->nama){
				redirect("Welcome/insertData?msg_error=4");
				return;
			}
			if($email == $key->email){
				redirect("Welcome/insertData?msg_error=6");
				return;
			}
		}

		$this->form_validation->set_rules('username', 'username','trim|required|min_length[1]|max_length[255]|is_unique[user.username]');
		if ($this->form_validation->run()==true){

		$dataInsert =array(
			'nip' => $nip,
			'nama' => $nama,
			'email' => $email,
			'gender' => $gender
		);

		$this->Anggota->insertDataAnggota($dataInsert);
		redirect(base_url('Welcome'));
		}else{
			redirect("Welcome/insertData?msg_error=5");
				return;
		}
	}

	public function editAction(){
		$nip = $this->input->post('nip');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$gender = $this->input->post('gender');

		$dataUpdate =array(
			'nama' => $nama,
			'email' => $email,
			'gender' => $gender
		);

		$this->Anggota->editDataAnggota($dataUpdate, $nip);
		redirect(base_url());
	}
	

	public function deleteAction($nip){
		$this->Anggota->deleteData($nip);
		redirect(base_url('welcome/index'));
	}



	public function Login()
	{
		$this->load->view('login');
	}
}

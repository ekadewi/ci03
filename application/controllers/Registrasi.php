<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('registrasiModel');
	}

	public function index()
	{
		$this->load->view('registrasi');		
	}

	public function insert()
	{
		$this->form_validation->set_rules('nama', 'nama', 'required',
			array(
				'required' 		=> 'kolom %s tidak boleh kosong!!!!!!!'
			));

		$this->form_validation->set_rules('alamat', 'alamat', 'required',
			array(
				'required' 		=> 'kolom %s tidak boleh kosong!!!!!!!'
			));
		$this->form_validation->set_rules('no_telp', 'No telp', 'required|numeric',
			array(
				'required' 		=> 'kolom %s tidak boleh kosong!!!!!!!',
				'numeric' 	=> 'kolom %s hanya boleh diisi angka'
			));
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email',
			array(
				'required' 		=> 'kolom %s tidak boleh kosong!!!!!!!',
				'valid_email' 	=> 'kolom %s harus diisi dengan format email'
			));
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]',
			array(
				'required' 		=> 'kolom %s tidak boleh kosong!!!!!!!',
				'is_unique'		=> 'isi dari kolom %s sudah ada'
			));
		$this->form_validation->set_rules('password', 'Password', 'required',
			array(
				'required' 		=> 'kolom %s tidak boleh kosong!!!!!!!'
			));
		$this->form_validation->set_rules('passconf', 'Password Konfirmasi', 'required|matches[password]',
			array(
				'required' 		=> 'kolom %s tidak boleh kosong!!!!!!!',
				'matches'		=> 'kolom %s tidak cocok dengan kolom Password'
			));

		if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('registrasi');
	    } else {
	    	$enc_password = md5($this->input->post('password'));
			if ($this->input->post('submit')) {
				$this->registrasiModel->insert_user($enc_password);
				redirect('registrasi');
			}
			$this->load->view('registrasi');
	    }
	}

}

/* End of file Registrasi.php */
/* Location: ./application/controllers/Registrasi.php */
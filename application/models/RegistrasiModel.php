<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistrasiModel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function insert_user($enc_password)
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'no_hp' => $this->input->post('no_telp'),
			'email' => $this->input->post('email'),
			'agama' => $this->input->post('agama'),
			'username' => $this->input->post('username'),
			'password' => $enc_password
		);

		$this->db->insert('user', $data);
	}	

}

/* End of file RegistrasiModel.php */
/* Location: ./application/models/RegistrasiModel.php */
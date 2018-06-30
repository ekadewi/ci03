<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel');
	}

	public function index()
	{
		$data['user'] = $this->UserModel->get_user();
		$this->load->view('tampil_user', $data);
	}

	public function update_user($id)
	{
		$data['single_user'] = $this->UserModel->get_single_user($id);
		if ($this->input->post('update')) {
			# code...
		}
		$this->load->view('update_user', $data);
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */
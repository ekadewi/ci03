<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

	public function get_user()
	{
		$this->db->from('user');
		$this->db->join('user_level', 'user.id = user_level.id_user');
		$this->db->join('level', 'user_level.id_level = level.id');

		return $this->db->get()->result();
	}
	
	public function get_single_user($id)
	{
		$this->db->from('user');
		$this->db->join('user_level', 'user.id = user_level.id_user');
		$this->db->join('level', 'user_level.id_level = level.id');
		$this->db->where('user.id', $id);

		return $this->db->get()->result();
	}

}

/* End of file UserModel.php */
/* Location: ./application/models/UserModel.php */
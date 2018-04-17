<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Model {

	public function get_artikels(){
		$query = $this->db->get('blog');
		return $query->result();
	}	

	public function get_single($id)
	{
		$query = $this->db->query('select * from blog where id='.$id);
		return $query->result();
	}

	public function upload()
	{
		$config['upload_path'] = './upload/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size']  = '2048';
		$config['remove_space']  = TRUE;
		
		$this->load->library('upload', $config);
		
		if ($this->upload->do_upload('input_gambar')){
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		} else {
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	public function insert($upload)
	{
		$data = array(
			'id' => '',
			'judul' => $this->input->post('input_judul'),
			'content' => $this->input->post('input_content'),
			'tanggal_post' => date("Y-m-d"),
			'image' => $upload['file']['file_name'],
			'author' => $this->input->post('input_author'),
			'email_author' => $this->input->post('input_email'),
			'no_telp' => $this->input->post('input_notelp'),
			'password' => $this->input->post('input_password')
		);

		$this->db->insert('blog', $data);
	}

	public function update($upload, $id){
		if ($upload['result']=='success') {
			$data = array(
				'judul' => $this->input->post('judul'),
				'content' => $this->input->post('content'),
				'image' => $upload['file']['file_name']
			);
		} else {
			$data = array(
				'judul' => $this->input->post('judul'),
				'content' => $this->input->post('content'),
			);
		}
		$this->db->where('id', $id);
		$this->db->update('blog', $data);
	}

	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('blog');
	}
}

/* End of file blog.php */
/* Location: ./application/models/blog.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Model {

	public function get_artikels($limit = FALSE, $offset = FALSE){
		if ($limit) {
			$this->db->limit($limit, $offset);
		}
		$query = $this->db->get('blog');
		return $query->result();
	}

	public function get_total()
	{
		return $this->db->count_all("blog");
	}

	public function get_all_blogs(){
		$this->db->select('*');
		$this->db->from('blog');
		$this->db->join('category', 'blog.id_category = category.id');
		return $this->db->get()->result();
	}	

	public function get_single($id)
	{
		// $query = $this->db->query('select a.judul, a.content, a.tanggal_post, a.image, b.cat_name from blog a INNER JOIN category b ON a.id_category = b.id WHERE a.id ='.$id);
		// $this->db->select('blog.judul', 'blog.content', 'blog.tanggal_post', 'category.cat_name');
		$this->db->select('*');
		$this->db->from('blog');
		$this->db->join('category', 'blog.id_category = category.id');
		$this->db->where('blog.id='.$id);
		return $this->db->get()->result();
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
			'username' => $this->input->post('input_username'),
			'password' => $this->input->post('input_password'),
			'id_category' => $this->input->post('cat_id')
		);

		$this->db->insert('blog', $data);
	}

	public function update($upload, $id){
		if ($upload['result']=='success') {
			$data = array(
				'judul' => $this->input->post('judul'),
				'content' => $this->input->post('content'),
				'image' => $upload['file']['file_name'],
				'author' => $this->input->post('input_author'),
				'email_author' => $this->input->post('input_email'),
				'no_telp' => $this->input->post('input_notelp'),
				'username' => $this->input->post('input_username'),
				'password' => $this->input->post('input_password'),
				'id_category' => $this->input->post('cat_id')
			);
		} else {
			$data = array(
				'judul' => $this->input->post('judul'),
				'content' => $this->input->post('content'),
				'author' => $this->input->post('input_author'),
				'email_author' => $this->input->post('input_email'),
				'no_telp' => $this->input->post('input_notelp'),
				'username' => $this->input->post('input_username'),
				'password' => $this->input->post('input_password'),
				'id_category' => $this->input->post('cat_id')
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
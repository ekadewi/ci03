<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
		$this->load->model('artikel');
		$data['artikel'] = $this->artikel->get_artikels();
		$this->load->view('home_view', $data);
	}

	public function detail($id)
	{
		$this->load->model('artikel');
		$data['detail'] = $this->artikel->get_single($id);
		$this->load->view('home_detail', $data);
	}

	// public function insert_artikels(){
	// 	$this->load->view('insert_blog');
	// }

	// public function proses_input(){
	// 	$config = [
	// 		'upload_path' => '../upload',
	// 		'allowed_types' => 'jpg|png',
	// 		// 'max_size' => 1000,
	// 	];
	// 	$this->load->library('upload', $config);

	// 	if (!$this->upload->do_upload('image')) {
	// 		$error = array('error' => $this->upload->display_errors());
	// 		$this->load->view('insert_blog', $error);
	// 	} else {
	// 		$file = $this->upload->data();
	// 		$data = [
	// 			'id' => set_value(''),
	// 			'judul' => set_value('judul'),
	// 			'content' => set_value('content'),
	// 			'tanggal_post' => set_value('tanggal'),
	// 			'image' => $file['file_name']
	// 		];
	// 		$this->artikel->save_artikel($data);
	// 		redirect('blog/index');
	// 	}
	// }

	public function tambah()
	{
		 $this->form_validation->set_rules('input_judul', 'Judul', 'required',
			array(
				'required' 		=> 'kolom %s tidak boleh kosong!!!!!!!'
			));

		$this->form_validation->set_rules('input_content', 'Content', 'required|min_length[10]',
			array(
				'required' 		=> 'kolom %s tidak boleh kosong!!!!!!!',
				'min_length' 	=> 'Isi kolom %s kurang panjang'
			));
		$this->form_validation->set_rules('input_author', 'Author', 'required|alpha',
			array(
				'required' 		=> 'kolom %s tidak boleh kosong!!!!!!!',
				'alpha' 	=> 'kolom %s hanya boleh diisi huruf'
			));
		$this->form_validation->set_rules('input_email', 'Email', 'required|valid_email',
			array(
				'required' 		=> 'kolom %s tidak boleh kosong!!!!!!!',
				'valid_email' 	=> 'kolom %s harus diisi dengan format email'
			));
		$this->form_validation->set_rules('input_notelp', 'NoTelp', 'required|numeric',
			array(
				'required' 		=> 'kolom %s tidak boleh kosong!!!!!!!',
				'numeric' 	=> 'kolom %s hanya boleh diisi angka'
			));
		$this->form_validation->set_rules('input_username', 'Username', 'required|is_unique[blog.username]',
			array(
				'required' 		=> 'kolom %s tidak boleh kosong!!!!!!!',
				'is_unique'		=> 'isi dari kolom %s sudah ada'
			));
		$this->form_validation->set_rules('input_password', 'Password', 'required',
			array(
				'required' 		=> 'kolom %s tidak boleh kosong!!!!!!!'
			));
		$this->form_validation->set_rules('input_passconf', 'Password Konfirmasi', 'required|matches[input_password]',
			array(
				'required' 		=> 'kolom %s tidak boleh kosong!!!!!!!',
				'matches'		=> 'kolom %s tidak cocok dengan kolom Password'
			));

		if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('insert_blog');
	    } else {
	    	$this->load->model('artikel');
			$data = array();

			if ($this->input->post('submit')) {
				$upload = $this->artikel->upload();

				if ($upload['result'] == 'success') {
					$this->artikel->insert($upload);
					redirect('blog');
				}else{
					$data['message'] = $upload['error'];
				}
			}
			$this->load->view('insert_blog', $data);
	    }
		
		
	}

	public function update($id) {
		$this->load->model('artikel');
		$data['single'] = $this->artikel->get_single($id);

		if ($this->input->post('update')) {
			$upload=$this->artikel->upload();
			$this->artikel->update($upload, $id);
			redirect('blog');
		}

		$this->load->view('update_blog', $data);
	}

	public function delete($id)
	{
		$this->load->model('artikel');
		$this->artikel->delete($id);
		redirect('blog');
	}



}



/* End of file Blog.php */
/* Location: ./application/controllers/Blog.php */
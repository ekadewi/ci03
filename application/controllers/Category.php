<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('categoryModel');
	}

	public function index()
	{
		$data['categories'] = $this->categoryModel->get_all_categories();
		$this->load->view('select_category', $data);
	}

	public function tambah()
	{
		$this->form_validation->set_rules('nama', 'nama_kategori', 'required|is_unique[category.cat_name]',
			array(
				'required' 		=> 'kolom %s tidak boleh kosong!!!!!!!',
				'is_unique'		=> 'isi dari kolom %s sudah ada'
			)
		);
		$this->form_validation->set_rules('deskripsi', 'deskripsi', 'required',
			array(
				'required' 		=> 'kolom %s tidak boleh kosong!!!!!!!'
			)
		);

		if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('insert_category');
	    } else {
			if ($this->input->post('simpan')) {
				$this->categoryModel->tambah();
				redirect('category');
			}

			$this->load->view('insert_category');
		}
	}

	public function update_category($id) {
		$data['detail'] = $this->categoryModel->get_single_category($id);

		if ($this->input->post('update')) {
			$this->categoryModel->update($id);
			redirect('category');
		}

		$this->load->view('update_category', $data);
	}

	public function delete_category($id)
	{
		$this->categoryModel->delete_category($id);
		redirect('category');
	}

}

/* End of file Category.php */
/* Location: ./application/controllers/Category.php */
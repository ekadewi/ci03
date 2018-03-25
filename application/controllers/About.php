<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$this->load->model('biodata');
		$data['bio'] = $this->biodata->bio();
		$data['sekolah'] = $this->biodata->sekolah();
		$data['hobi'] = $this->biodata->hobi();
		$this->load->view('about', $data);
	}

}

/* End of file about.php */
/* Location: ./application/controllers/about.php */
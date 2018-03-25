<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Model {

	function bio()
	{
		$eka = array('Eka Dewi Nur Anggraeni', 'Eka', '19');
		return $eka;
	}

	function sekolah()
	{
		$sekolah = array('Informatics Management', 'Information Technology', 'State Polytechnic of Malang');
		return $sekolah;
	}

	function hobi()
	{
		$hobi = array('Sleeping', 'Watching aime');
		return $hobi;
	}

}

/* End of file biodata.php */
/* Location: ./application/models/biodata.php */
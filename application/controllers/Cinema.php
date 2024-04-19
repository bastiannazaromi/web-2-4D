<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Cinema extends CI_Controller
{
	public function index()
	{
		$data = [
			'title' => 'Cinema',
			'page' => 'cinema/v_cinema'
		];

		$this->load->view('index', $data);
	}
}

/* End of file Cinema.php */

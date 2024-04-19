<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Cinema extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// memanggil model dengan nama M_User dan di rename menjadi user
		$this->load->model('M_Cinema', 'cinema');
	}

	public function index()
	{
		$data = [
			'title'  => 'Cinema',
			'page'   => 'cinema/v_cinema',
			'cinema' => $this->cinema->getAllCinema()
		];

		$this->load->view('index', $data);
	}
}

/* End of file Cinema.php */

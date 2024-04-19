<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function index()
	{
		$data = [
			'title' => 'Halaman Login'
		];

		$this->load->view('login', $data);
	}
}

/* End of file Login.php */

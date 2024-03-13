<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Coba extends CI_Controller
{
	public function index()
	{
		echo 'ini adalah index halaman coba';
	}

	public function tampilan()
	{
		$this->load->model('M_User');

		// M_User = nama model
		// getAllUser = nama function

		$user = $this->M_User->getAllUser();

		$data = [
			'user' => $user
		];

		$this->load->view('v_coba', $data);
	}
}

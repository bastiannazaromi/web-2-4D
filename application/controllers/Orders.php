<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Orders extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (empty($this->session->userdata('user_login'))) {
			$this->session->set_flashdata('error', 'Anda belum login');

			redirect('login', 'resfresh');
		}

		$this->load->model('M_Jadwal', 'jadwal');
	}

	public function index()
	{


		$data = [
			'title'  => 'List Orders',
			'page'   => 'orders/v_orders',
			'orders' => []
		];

		$this->load->view('index', $data);
	}

	public function add()
	{
		$jadwal = $this->jadwal->getAllJadwal();

		$data = [
			'title'  => 'Orders',
			'page'   => 'orders/v_addOrders',
			'jadwal' => $jadwal,
		];

		$this->load->view('index', $data);
	}
}

/* End of file Orders.php */

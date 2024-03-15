<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// memanggil model dengan nama M_User dan di rename menjadi user
		$this->load->model('M_User', 'user');
	}

	public function index()
	{
		// echo 'Ini adalah halaman user';

		$user = $this->user->getAllUser();

		$data = [
			'title' => 'Halaman User',
			'user'  => $user
		];

		// memanggil view dengan nama v_user
		$this->load->view('v_user', $data);
	}

	public function add()
	{
		$data = [
			'title' => 'Tambah User'
		];

		$this->load->view('v_addUser', $data);
	}

	public function store()
	{
		// xss clean dengan menambahkan TRUE

		$username = $this->input->post('username');
		$nama     = $this->input->post('nama');

		$data = [
			'username' => $username,
			'password' => password_hash('user123', PASSWORD_BCRYPT),
			'nama'     => $nama
		];

		$insert = $this->db->insert('user', $data);

		if ($insert) {
			// berisi pesan

			redirect('user', 'refresh');
		} else {
			// berisi pesan

			redirect('user', 'refresh');
		}
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$delete = $this->db->delete('user');

		if ($delete) {
			// berisi pesan

			redirect($_SERVER['HTTP_REFERER'], 'refresh');
			// redirect('user', 'refresh');
		} else {
			// berisi pesan

			redirect($_SERVER['HTTP_REFERER'], 'refresh');
			// redirect('user', 'refresh');
		}
	}
}

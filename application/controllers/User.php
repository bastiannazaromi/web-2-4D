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

		$this->form_validation->set_rules('username', 'Username', 'required', [
			'required' => 'Username tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('nama', 'Nama', 'required|alpha_numeric_spaces', [
			'required' => 'Nama tidak boleh kosong!',
			'alpha_numeric_spaces'    => 'Nama harus diisi dengan huruf'
		]);
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email', [
			'required' => 'Email tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('tahun', 'Tahun', 'required|min_length[4]|max_length[4]|numeric', [
			'required'   => 'Tahun tidak boleh kosong!',
			'min_length' => 'Tahun tidak boleh kurang dari 4 karakter',
			'max_length' => 'Tahun tidak boleh lebih dari 4 karakter',
			'numeric'    => 'Tahun harus diisi dengan angka'
		]);

		if ($this->form_validation->run() == FALSE) {
			$data = [
				'title' => 'Tambah User'
			];

			$this->load->view('v_addUser', $data);
		} else {
			$username = $this->input->post('username');
			$nama     = $this->input->post('nama');
			$email    = $this->input->post('email');
			$tahun    = $this->input->post('tahun');

			$data = [
				'username' => $username,
				'password' => password_hash('user123', PASSWORD_BCRYPT),
				'nama'     => $nama,
				'email'    => $email,
				'tahun'    => $tahun
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
	}

	public function edit($id)
	{
		$user = $this->user->getOneUser($id);

		$data = [
			'title' => 'Edit User',
			'user'  => $user
		];

		$this->load->view('v_editUser', $data);
	}

	public function update()
	{
		$id       = $this->input->post('id');
		$username = $this->input->post('username');
		$nama     = $this->input->post('nama');
		$email    = $this->input->post('email');
		$tahun    = $this->input->post('tahun');

		$data = [
			'username' => $username,
			'nama'     => $nama,
			'email'    => $email,
			'tahun'    => $tahun
		];

		$this->db->where('id', $id);
		$update = $this->db->update('user', $data);

		if ($update) {
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

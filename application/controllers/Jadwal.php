<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (empty($this->session->userdata('user_login'))) {
			$this->session->set_flashdata('error', 'Anda belum login');

			redirect('login', 'resfresh');
		}

		$this->load->model('M_Cinema', 'cinema');
		$this->load->model('M_Film', 'film');
		$this->load->model('M_Jadwal', 'jadwal');
	}

	public function index()
	{
		$data = [
			'title' => 'Jadwal Tayang',
			'page'  => 'jadwal/v_jadwal'
		];

		$this->load->view('index', $data);
	}

	public function add()
	{
		$data = [
			'title'  => 'Jadwal Tayang',
			'page'   => 'jadwal/v_addJadwal',
			'cinema' => $this->cinema->getAllCinema(),
			'film'   => $this->film->getAllFilm()
		];

		$this->load->view('index', $data);
	}

	public function store()
	{
		$this->form_validation->set_rules('idCinema', 'Nama Cinema', 'required');
		$this->form_validation->set_rules('idFilm', 'Nama Film', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal Tayang', 'required');
		$this->form_validation->set_rules('jamTayang', 'Jam Tayang', 'required');
		$this->form_validation->set_rules('jumlahKursi', 'Jumlah Kursi', 'required|numeric');

		if ($this->form_validation->run() == FALSE) {
			$this->add();
		} else {
			$idCinema    = $this->input->post('idCinema');
			$idFilm      = $this->input->post('idFilm');
			$tanggal     = $this->input->post('tanggal');
			$jamTayang   = $this->input->post('jamTayang');
			$jumlahKursi = $this->input->post('jumlahKursi');

			$data = [
				'idCinema'    => $idCinema,
				'idFilm'      => $idFilm,
				'tanggal'     => $tanggal,
				'jamTayang'   => $jamTayang,
				'jumlahKursi' => $jumlahKursi
			];

			$insert = $this->jadwal->addJadwal($data);

			if ($insert) {
				$this->session->set_flashdata('sukses', 'Data berhasil disimpan');
			} else {
				$this->session->set_flashdata('error', 'Data gagal disimpan!');
			}

			redirect('jadwal', 'refresh');
		}
	}
}

  /* End of file Jadwal.php */

<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = [
			'title' => 'Dashboard',
			'page'  => 'admin/dashboard'
		];

		$this->load->view('index', $data);
	}

	public function a()
	{
		function sumOddNumbers($N, $M)
		{
			// Pastikan N adalah bilangan ganjil
			if ($N % 2 == 0) {
				$N += 1;
			}

			// Jika N lebih besar dari M, tidak ada bilangan ganjil lagi untuk dijumlahkan
			if ($N > $M) {
				return 0;
			}

			echo $N . ',';
			// Jumlahkan N dengan hasil rekursif dari N + 2 dan M
			return $N + sumOddNumbers($N + 1, $M);
		}

		// Contoh penggunaan fungsi
		$N1 = 9;
		$M1 = 9;
		echo "Hasil jumlah bilangan ganjil antara $N1 dan $M1: " . sumOddNumbers($N1, $M1) . "\n"; // Output: 54 (5 + 7 + 9 + 11 + 13 + 15)

		$N2 = 10;
		$M2 = 13;
		echo "Hasil jumlah bilangan ganjil antara $N2 dan $M2: " . sumOddNumbers($N2, $M2) . "\n"; // Output: 96 (11 + 13 + 15 + 17 + 19 + 21)

	}
}

/* End of file Admin.php */

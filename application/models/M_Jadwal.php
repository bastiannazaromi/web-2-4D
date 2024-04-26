<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Jadwal extends CI_Model
{

	public function addJadwal($data)
	{
		return $this->db->insert('jadwal_tayang', $data);
	}
}

/* End of file M_Jadwal.php */

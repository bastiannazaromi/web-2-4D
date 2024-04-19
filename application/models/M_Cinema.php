<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Cinema extends CI_Model
{
	public function getAllCinema()
	{
		$this->db->order_by('namaCinema', 'asc');

		return $this->db->get('cinema')->result();
	}

	// untuk tambah data cinema
	public function addCinema($data)
	{
		return $this->db->insert('cinema', $data);
	}

	// mengambil 1 data cinema berdasarkan id
	public function getOneCinema($id)
	{
		$this->db->where('id', $id);

		return $this->db->get('cinema')->row();
	}
}

/* End of file M_Cinema.php */
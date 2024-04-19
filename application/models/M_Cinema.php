<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Cinema extends CI_Model
{
	public function getAllCinema()
	{
		$this->db->order_by('namaCinema', 'asc');

		return $this->db->get('cinema')->result();
	}
}

/* End of file M_Cinema.php */

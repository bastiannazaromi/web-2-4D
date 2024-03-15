<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_User extends CI_Model
{
	public function getAllUser()
	{
		// queri sql
		// SELECT * FROM user;

		// query builder
		return $this->db->get('user')->result();
	}

	// mengambil 1 data user berdasarkan id
	public function getOneUser($id)
	{
		$this->db->where('id', $id);

		return $this->db->get('user')->row();
	}
}

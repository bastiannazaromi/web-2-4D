<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Orders extends CI_Model
{
	public function addOrders($data)
	{
		return $this->db->insert('orders', $data);
	}
}

/* End of file M_Orders.php */

<?php

class admin_profile_model extends CI_Model
{
	public function show_data()
	{
		return $this->db->get('admin');
	}
}

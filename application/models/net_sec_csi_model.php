<?php
class net_sec_csi_model extends CI_Model
{
	public function get_csi_file()
	{
		return $this->db->get('net_sec_csi');
	}
}

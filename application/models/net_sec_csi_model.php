<?php
class net_sec_csi_model extends CI_Model
{
	public function get_csi_file()
	{
		return $this->db->get('net_sec_csi');
	}

	public function insert_csi_file($name)
	{
		$data = array(
			'file' => $name,
			'upload_date' => date(DATE_ATOM)
		);

		return $this->db->insert('net_sec_csi', $data);
	}

	public function delete_csi_file($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('net_sec_csi');
	}

	public function get_data_id($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('net_sec_csi');
	}
}

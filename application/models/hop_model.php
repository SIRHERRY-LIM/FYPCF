<?php

class hop_model extends CI_Model
{

	public function insertHOP($data)
	{
		return	$this->db->insert('hop', $data);
	}

	public function getHOP()
	{
		$query = $this->db->get('hop');
		return $query->result();
	}

	public function editHOP($hop_id)
	{
		$query = $this->db->get_where('hop', ['hop_id' => $hop_id]);
		return $query->row();
	}

	public function updateHOP($data, $hop_id)
	{
		return $this->db->update('hop', $data, ['hop_id' => $hop_id]);
	}

	public function deleteHOP($hop_id)
	{
		return $this->db->delete('hop', ['hop_id' => $hop_id]);
	}
}

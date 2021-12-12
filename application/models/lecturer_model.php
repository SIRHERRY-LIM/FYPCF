<?php

class lecturer_model extends CI_Model
{
	public function insertLecturer($data)
	{
		return	$this->db->insert('lecturer', $data);
	}

	public function getLecturer()
	{
		$query = $this->db->get('lecturer');
		return $query->result();
	}

	public function editLecturer($lecturer_id)
	{
		$query = $this->db->get_where('lecturer', ['lecturer_id' => $lecturer_id]);
		return $query->row();
	}

	public function updateLecturer($data, $lecturer_id)
	{
		return $this->db->update('lecturer', $data, ['lecturer_id' => $lecturer_id]);
	}

	public function deleteLecturer($lecturer_id)
	{
		return $this->db->delete('lecturer', ['lecturer_id' => $lecturer_id]);
	}
}

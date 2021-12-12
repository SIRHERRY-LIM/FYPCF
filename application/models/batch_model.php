
<?php

class batch_model extends CI_Model
{
	public function show_data($table)
	{
		return $this->db->get($table);
	}

	public function insert_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function edit_data($id_batch)
	{
		$query = $this->db->get_where('batch', ['id_batch' => $id_batch]);
		return $query->row();
	}
	public function update_data($data, $id_batch)
	{
		return $this->db->update('batch', $data, ['id_batch' => $id_batch]);
	}
}

<?php

class CadUsers_model extends CI_Model
{
	public function save($dados) {
		return $this->db->insert('usuarios', $dados);
	}

	public function update($dados, $id) {
		$this->db->where('id', $id);
		return $this->db->update('usuarios', $dados);
	}

	public function get($id) {
		$this->db->where('id', $id);
		return $this->db->get('usuarios')->row_array();
	}

	public function get_all() {
		return $this->db->get('usuarios')->result_array();
	}

}

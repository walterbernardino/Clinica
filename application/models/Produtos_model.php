<?php

class Produtos_model extends CI_Model
{
	public function save($dados) {
		return $this->db->insert('estogue', $dados);
	}

	public function update($dados, $id) {
		$this->db->where('id', $id);
		return $this->db->update('estogue', $dados);
	}

	public function get($id) {
		$this->db->where('id', $id);
		return $this->db->get('estogue')->row_array();
	}

	public function get_all() {
		return $this->db->get('estogue')->result_array();
	}
}
<?php

class Paciente_model extends CI_Model
{
	public function save($dados) {
		return $this->db->insert('pacientes', $dados);
	}

	public function update($dados, $id) {
		$this->db->where('id', $id);
		return $this->db->update('pacientes', $dados);
	}

	public function get($id) {
		$this->db->where('id', $id);
		return $this->db->get('pacientes')->row_array();
	}

	public function get_all() {
		return $this->db->get('pacientes')->result_array();
	}

}

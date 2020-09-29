<?php


class Clinica_model extends CI_Model
{
	public function save($dados) {
		return $this->db->insert("clinica", $dados);
	}

	public function update($dados, $id) {
		$this->db->where('id', $id);
		return $this->db->update('clinica', $dados);
	}

}

<?php


class Usuarios_model extends CI_Model
{
	//login
	public function doLogin($dados) {
		$result = $this->db->get_where('usuarios', $dados);

		if ($result->num_rows()) {
			$dados = $result->row_array();
			return $dados;
		}

		return false;
	}

}

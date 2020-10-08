<?php

class Controller_users extends CI_Controller {
	private $dadosUsuarios;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('CadUsers_model');
		$this->isLogged();
	}

	public function index()
	{
		$dados['usuarios'] = $this->CadUsers_model->get_all();
        $this->load->view('estrutura/cabepage');
        $this->load->view('admin/users',$dados);
        $this->load->view('estrutura/rodapage');
	}
	
	private function setDadosUsuarios() {
		$this->dadosUsuarios =  array(
			"nome" => htmlspecialchars($this->input->post('nome')),
			"email" => htmlspecialchars($this->input->post('email')),
			"senha" => htmlspecialchars($this->input->post('senha')),
			"permisao" => htmlspecialchars($this->input->post('permisao'))
		);
	}

	public function getDadosUsuarios() {
		return $this->dadosUsuarios;
	}

	public function save() {
		$this->setDadosUsuarios();
		if ($this->CadUsers_model->save($this->getDadosUsuarios())) {
			echo json_encode(array('sucess' => "Usuario cadastrado com sucesso"));
		} else {
			echo json_encode(array('error' => "erro ao cadastra Usuario"));
		}

	}

	public function update() {
		$id = $this->input->post('id');
		$this->setDadosUsuarios();
		if ($this->CadUsers_model->update($this->getDadosUsuarios(), $id)) {
			echo json_encode(array('sucess' => "dados atulizados com sucess"));
		} else {
			echo json_encode(array('error' => 'erro ao atulizar paciente'));
		}
	}

	public function tabela_usuarios() {
		$dados['usuarios'] = $this->CadUsers_model->get_all();
		$this->load->view('admin/tabela_usuarios', $dados);
	}

	//	verifica se osuario esta logado
    private function isLogged() {
		if (!$this->session->id_global) {
			redirect('./');
		}
	}

}
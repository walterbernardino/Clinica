<?php

class Controller_paciente extends CI_Controller {
    private $dadosPaciente;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Paciente_model');
		$this->isLogged();
    }
    
	public function index()
	{
		$dados['pacientes'] = $this->Paciente_model->get_all();
        $this->load->view('estrutura/cabepage');
        $this->load->view('corpo/pacientes', $dados);
        $this->load->view('estrutura/rodapage');
    }

    private function setDadosPaciente() {
		$this->dadosPaciente =  array(
			"nome" => htmlspecialchars($this->input->post('nome')),
			"sexo" => htmlspecialchars($this->input->post('sexo')),
			"telefone" => htmlspecialchars($this->input->post('telefone')),
			"email" => htmlspecialchars($this->input->post('email')),
			"cpf" => htmlspecialchars($this->input->post('cpf')),
			"cidade" => htmlspecialchars($this->input->post('cidade')),
			"logradouro" => htmlspecialchars($this->input->post('logradouro')),
			"numero_residencial" => htmlspecialchars($this->input->post('numero_residencial')),
			"complemento" => htmlspecialchars($this->input->post('complemento'))
		);
	}

	public function getDadosPaciente() {
		return $this->dadosPaciente;
	}

    public function save() {
		$this->setDadosPaciente();
		if ($this->Paciente_model->save($this->getDadosPaciente())) {
			echo json_encode(array('sucess' => "Paciente cadastrado com sucesso"));
		} else {
			echo json_encode(array('error' => "erro ao cadastra paciente"));
		}

	}

	public function update() {
		$id = $this->input->post('id');
		$this->setDadosPaciente();
		if ($this->Paciente_model->update($this->getDadosPaciente(), $id)) {
			echo json_encode(array('sucess' => "dados atulizados com sucess"));
		} else {
			echo json_encode(array('error' => 'erro ao atulizar paciente'));
		}
	}


	public function tabela_pacientes() {
		$dados['pacientes'] = $this->Paciente_model->get_all();
		$this->load->view('corpo/tabela_paciente', $dados);
	}

	//	verifica se osuario esta logado
	private function isLogged() {
		if (!$this->session->id_global) {
			redirect('./');
		}
	}
}

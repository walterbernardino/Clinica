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
        $this->load->view('estrutura/cabepage');
        $this->load->view('corpo/pacientes');
        $this->load->view('estrutura/rodapage');
    }

    private function setDadosPaciente() {
		$this->dadosPaciente =  array(
			"nome" => htmlspecialchars($this->input->post('nome')),
			"sexo" => htmlspecialchars($this->input->post('nome')),
			"telefone" => htmlspecialchars($this->input->post('nome')),
			"email" => htmlspecialchars($this->input->post('nome')),
			"cpf" => htmlspecialchars($this->input->post('nome')),
			"cidade" => htmlspecialchars($this->input->post('nome')),
			"logradoruro" => htmlspecialchars($this->input->post('nome')),
			"numero_residencial" => htmlspecialchars($this->input->post('nome')),
			"complemento" => htmlspecialchars($this->input->post('nome'))
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

	//	verifica se osuario esta logado
	private function isLogged() {
		if (!$this->session->id_global) {
			redirect('./');
		}
	}
}

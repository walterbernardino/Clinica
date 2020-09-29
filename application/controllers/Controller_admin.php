<?php


class Controller_admin extends CI_Controller
{
	private $dadosClinica = [];
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Clinica_model');
		$this->isLogged();
	}

	public function index()
	{
		$this->load->view('estrutura/cabepage');
		$this->load->view('admin/clinicas');
		$this->load->view('estrutura/rodapage');
	}

	private function setDadosClinica() {
		$this->dadosClinica = array(
			'nome_clinica' => htmlspecialchars($this->input->post('nome_clinica')),
			'logradouro' => htmlspecialchars($this->input->post('logradouro')),
			'cidade' => htmlspecialchars($this->input->post('cidade')),
			'cnpj' => htmlspecialchars($this->input->post('cnpj')),
			'numero' => htmlspecialchars($this->input->post('numero'))
		);
	}

	public function getDadosClinica() {
		return $this->dadosClinica;
	}

	public function save_clinica() {
		$this->setDadosClinica();

		if ($this->Clinica_model->save($this->getDadosClinica())) {
			echo json_encode(array('sucess' => "clinica cadastrada com sucesso"));
			return;
		}

		echo json_encode(array('error' => "error ao cadastrar clinica"));

	}


	public function update_clinica() {
		$this->setDadosClinica();
		$id = $this->input->post('id');
		if ($this->Clinica_model->update($this->getDadosClinica(), $id)) {
			echo json_encode(array('sucess' => "clinica atualizada com sucesso"));
			return;
		}

		echo json_encode(array('error' => "error ao atualizada clinica"));
	}


	//	verifica se osuario esta logado
	private function isLogged() {
		if (!$this->session->id_global) {
			redirect('./');
		}
	}
}

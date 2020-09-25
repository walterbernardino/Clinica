<?php

class Controller_produtos extends CI_Controller {
	private $dadosProdutos;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Produtos_model');
		$this->isLogged();
    }

    public function index()
	{
        $this->load->view('estrutura/cabepage');
        $this->load->view('corpo/produtos');
        $this->load->view('estrutura/rodapage');
    }


    private function setDadosProdutos() {
		$this->dadosProdutos =  array(
			"nome_produto" => htmlspecialchars($this->input->post('nome_produto')),
			"qtde" => htmlspecialchars($this->input->post('qtde')),
			"validate" => htmlspecialchars($this->input->post('validate')),
			"valor_unitario" => htmlspecialchars($this->input->post('valor_unitario')),
			"date_saita" => htmlspecialchars($this->input->post('date_saita')),
			//"id_clinica" => htmlspecialchars($this->input->post('id_clinica')),
			"motivo" => htmlspecialchars($this->input->post('motivo'))
		);
	}

	public function getDadosProdutos() {
		return $this->dadosProdutos;
	}

	 public function save() {
		$this->setDadosProdutos();
		if ($this->Produtos_model->save($this->getDadosProdutos())) {
			echo json_encode(array('sucess' => "Produto cadastrado com sucesso"));
		} else {
			echo json_encode(array('error' => "erro ao cadastra Produto"));
		}

	}

	public function update() {
		$id = $this->input->post('id');
		$this->setDadosProdutos();
		if ($this->Produtos_model->update($this->getDadosProdutos(), $id)) {
			echo json_encode(array('sucess' => "dados atulizados com sucesso"));
		} else {
			echo json_encode(array('error' => 'erro ao atulizar Produto'));
		}

	}


	
    private function isLogged() {
		if (!$this->session->id_global) {
			redirect('./');
		}
	}
}
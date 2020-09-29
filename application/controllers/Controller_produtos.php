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
		$dados['estogue'] = $this->Produtos_model->get_all();
        $this->load->view('estrutura/cabepage');
        $this->load->view('corpo/produtos',$dados);
        $this->load->view('estrutura/rodapage');
    }


    private function setDadosProdutos() {
		$this->dadosProdutos =  array(
			"nome_produto" => htmlspecialchars($this->input->post('nome_produto')),
			"qtde" => htmlspecialchars($this->input->post('qtde')),
			"validade" => htmlspecialchars($this->input->post('validade')),
			"valor_unitario" => htmlspecialchars($this->input->post('valor_unitario')),
			"date_compra" => htmlspecialchars($this->input->post('date_compra')),
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

	public function tabela_produtos() {
		$dados['estogue'] = $this->Produtos_model->get_all();
		$this->load->view('corpo/tabela_produto', $dados);
	}


	//	verifica se osuario esta logado
    private function isLogged() {
		if (!$this->session->id_global) {
			redirect('./');
		}
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->isLogged();
	}

	public function index()
	{
        $this->load->view('Estrutura/cabepage');
        $this->load->view('Corpo/index');
        $this->load->view('Estrutura/rodapage');
    }

	//	verifica se osuario esta logado
    private function isLogged() {
		if (!$this->session->id_global) {
			redirect('./');
		}
	}

}

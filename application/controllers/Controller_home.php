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
        $this->load->view('estrutura/cabepage');
        $this->load->view('corpo/index');
        $this->load->view('estrutura/rodapage');
    }

	//	verifica se osuario esta logado
    private function isLogged() {
		if (!$this->session->id_global) {
			redirect('./');
		}
	}

}

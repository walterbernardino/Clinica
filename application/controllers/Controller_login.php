<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Usuarios_model');
	}

	public function index()
	{
		$this->load->view('Login/Login');
	}

	public function attemp() {

		$dados = array(
			"email" => htmlspecialchars($this->input->post('email')),
			"senha" => md5(htmlspecialchars($this->input->post('pass')))
		);

		$result = $this->Usuarios_model->doLogin($dados);
		if ($result) {
			$this->session->set_userdata("id_global", $result);
			echo json_encode(array('sucess' => "Login relizado com sucess"));
			return;
		}

		echo json_encode(array('error' => "login e/ou senha errados"));

	}

	public function sair() {
		$this->session->unset_userdata('id_global');
		redirect("./");
	}


}

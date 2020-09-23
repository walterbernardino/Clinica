<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_paciente extends CI_Controller {

	public function index()
	{
        $this->load->view('Estrutura/cabepage');
        $this->load->view('corpo/pacientes');
        $this->load->view('Estrutura/rodapage');
    }
}
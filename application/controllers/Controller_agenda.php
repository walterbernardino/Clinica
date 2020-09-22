<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_agenda extends CI_Controller {

	public function index()
	{
        $this->load->view('Estrutura/cabepage');
        $this->load->view('corpo/agenda');
        $this->load->view('Estrutura/rodapage');
    }
}
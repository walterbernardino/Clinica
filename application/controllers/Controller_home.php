<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_home extends CI_Controller {

	public function index()
	{
        $this->load->view('Estrutura/cabepage');
        $this->load->view('Corpo/index');
        $this->load->view('Estrutura/rodapage');
    }
}
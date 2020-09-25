<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_produtos extends CI_Controller {

	public function index()
	{
        $this->load->view('estrutura/cabepage');
        $this->load->view('corpo/produtos');
        $this->load->view('estrutura/rodapage');
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_agenda extends CI_Controller {

	public function index()
	{
        $this->load->view('estrutura/cabepage');
        $this->load->view('atentende/agenda');
        $this->load->view('estrutura/rodapage');
    }
}
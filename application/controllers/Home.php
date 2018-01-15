<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('frontend/template/html-header');	
		$this->load->view('frontend/login');
		$this->load->view('frontend/cadastro');
		$this->load->view('frontend/template/footer');
	}
}

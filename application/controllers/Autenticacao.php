<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autenticacao extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		//$this->load->view('frontend/template/Html-header');
		$this->load->view('frontend/Login');
		//$this->load->view('frontend/template/Footer');
		//$this->load->view('frontend/template/Html-footer');
	}

	public function Cadastrar(){
		
	}

	public function RecuperarSenha(){
		
	}

	public function index(){
		
	}
}
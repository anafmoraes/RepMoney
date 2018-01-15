<?php
class Principal extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('usuarios_model', 'modelusuarios');
		if(!$this->session->userdata('logado')){
			redirect(base_url('login'));
		}
	}

	public function index()
	{
		$this->load->view('frontend/template/html-header');
		$this->load->view('frontend/template/headerUser');
		$this->load->view('frontend/template/menu');
		$this->load->view('frontend/principal');
		$this->load->view('frontend/template/footer');
	
	}
}

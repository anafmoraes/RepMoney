<?php
class Republica extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('republica_model', 'modelrepublica');
		if(!$this->session->userdata('logado')){
			redirect(base_url('login'));
		}
	}

	public function pag_despesas(){
		$this->load->view('frontend/template/html-header');
		$this->load->view('frontend/template/headerUser');
		$this->load->view('frontend/template/menu');
		$this->load->view('frontend/despesas');
		$this->load->view('frontend/template/footer');
	
	}

	public function dados_republica(){
		$this->load->view('frontend/template/html-header');
		$this->load->view('frontend/template/headerUser');
		$this->load->view('frontend/template/menu');
		$this->load->view('frontend/republica');
		$this->load->view('frontend/template/footer');
	
	}

	public function admin_republica(){
		$this->load->view('frontend/template/html-header');
		$this->load->view('frontend/template/headerUser');
		$this->load->view('frontend/template/menu');
		$this->load->view('frontend/republicasGerenciador');
		$this->load->view('frontend/template/footer');
	
	}

	public function admin_despesas(){
		$this->load->view('frontend/template/html-header');
		$this->load->view('frontend/template/headerUser');
		$this->load->view('frontend/template/menu');
		$this->load->view('frontend/despesasGerenciador');
		$this->load->view('frontend/template/footer');
	
	}

	public function editar_republica(){
		$this->load->view('frontend/template/html-header');
		$this->load->view('frontend/template/headerUser');
		$this->load->view('frontend/template/menu');
		$this->load->view('frontend/editarRepublica');
		$this->load->view('frontend/template/footer');
	}

	public function moradores(){
		$this->load->view('frontend/template/html-header');
		$this->load->view('frontend/template/headerUser');
		$this->load->view('frontend/template/menu');
		$this->load->view('frontend/gerenciarMoradores');
		$this->load->view('frontend/template/footer');
	}
	public function cadastrar_republica(){
		$this->load->view('frontend/template/html-header');
		$this->load->view('frontend/template/headerUser');
		$this->load->view('frontend/template/menu');
		$this->load->view('frontend/cadastroRepublica');
		$this->load->view('frontend/template/footer');
	}

	public function atualizar_dados(){
		$this->load->library('form_validation');
		if($this->form_validation->run() == FALSE){
			$this->editarRepublica();
		}else{
			$nome= $this->input->post('txt-nome');
			$email= $this->input->post('txt-email');
			$senha= $this->input->post('txt-senha');
			$codigo= $this->input->post('txt-codigo');
			$id = $this->session->userdata('userlogado')->id;
		
			if ($this->modelrepublica->atualizar($nome, $email, $codigo, $senha, $id)) {
					redirect(base_url('principal'));
				}else{
					echo "Houve um erro no sistema";
			}
		}
	}
}

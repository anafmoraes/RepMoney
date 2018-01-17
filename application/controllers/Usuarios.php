<?php
class Usuarios extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('usuarios_model', 'modelusuarios');
	}

	public function index()
	{
		$this->load->view('frontend/template/html-header');
		$this->load->view('frontend/cadastro');
		$this->load->view('frontend/template/footer');
	}

	public function inserir(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('txt-nome-cadastro', 'Nome do usuário', 'required|min_length[3]|is_unique[usuario.nome]'); #nome
		$this->form_validation->set_rules('txt-email-cadastro', 'Email', 'required|valid_email'); #email
		$this->form_validation->set_rules('txt-senha-cadastro', 'Senha', 'required|min_length[3]'); #senha
		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			$nome= $this->input->post('txt-nome-cadastro');
			$email= $this->input->post('txt-email-cadastro');
			$senha= $this->input->post('txt-senha-cadastro');
			$codigo= $this->input->post('txt-codigo');
			if ($this->modelusuarios->adicionar($nome, $email, $codigo, $senha)) {
				$this->db->where('email', $email);
				$this->db->where('senha', $senha);
				$userlogado = $this->db->get('usuario')->result();

				$dadosSessao['userlogado'] = $userlogado[0];
				$dadosSessao['logado'] = TRUE;
				$this->session->set_userdata($dadosSessao);
				redirect(base_url('principal'));
			}else{
				echo "Houve um erro no sistema";
			}
		}
	}

	public function atualizar_dados(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('txt-nome', 'Nome do usuário', 'required|min_length[3]|is_unique[usuario.nome]'); #nome
		$this->form_validation->set_rules('txt-email', 'Email', 'required|valid_email'); #email
		$this->form_validation->set_rules('txt-senha', 'Senha', 'required|min_length[3]'); #senha
		if($this->form_validation->run() == FALSE){
			$this->editar_perfil();
		}else{
			$nome= $this->input->post('txt-nome');
			$email= $this->input->post('txt-email');
			$senha= $this->input->post('txt-senha');
			$codigo= $this->input->post('txt-codigo');
			$id = $this->session->userdata('userlogado')->id;
		
			if ($this->modelusuarios->atualizar($nome, $email, $codigo, $senha, $id)) {
					redirect(base_url('principal'));
				}else{
					echo "Houve um erro no sistema";
			}
		}
	}

	public function pag_login(){
		$this->load->view('frontend/template/html-header');
		$this->load->view('frontend/login');
		$this->load->view('frontend/cadastro');
		$this->load->view('frontend/template/footer');
	}

	public function login(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('txt-email', 'Email', 'required|min_length[3]');
		$this->form_validation->set_rules('txt-senha', 'Senha', 'required|min_length[3]');

		if($this->form_validation->run() == FALSE){
			$this->pag_login();
		}else{
			$email = $this->input->post('txt-email');
			$senha = $this->input->post('txt-senha');
			$this->db->where('email', $email);
			$this->db->where('senha', $senha);
			$userlogado = $this->db->get('usuario')->result();

			if(count($userlogado)==1){
				$dadosSessao['userlogado'] = $userlogado[0];
				$dadosSessao['logado'] = TRUE;
				$this->session->set_userdata($dadosSessao);
				redirect(base_url('principal'));
			}else{
				$dadosSessao['userlogado'] = NULL;
				$dadosSessao['logado'] = FALSE;
				$this->session->set_userdata($dadosSessao);
				redirect(base_url('login'));
			}
		}
	}

	public function logout(){
		$dadosSessao['userlogado'] = NULL;
		$dadosSessao['logado'] = FALSE;
		$this->session->set_userdata($dadosSessao);
		redirect(base_url('login'));
	}

	public function pag_recuperarSenha(){
		$this->load->view('frontend/template/html-header');
		$this->load->view('frontend/recuperarSenha');
		$this->load->view('frontend/template/footer');
	}

	public function recuperarSenha(){
		$nome = $this->input->post('txt-nome');
		$email = $this->input->post('txt-email');
		echo "Olá, ". $nome . ". Sua senha é ". $senha = $this->modelusuarios->recuperar($nome, $email);
	}

	public function editar_perfil(){
		$this->load->view('frontend/template/html-header');
		$this->load->view('frontend/template/headerUser');
		$this->load->view('frontend/template/menu');
		$this->load->view('frontend/editar_perfil');
		$this->load->view('frontend/template/footer');
	}

	public function excluir_perfil(){
		$id = $this->session->userdata('userlogado')->id;
		if ($this->modelusuarios->excluir($id)) {
			redirect(base_url('logout'));
		}else{
			echo "Houve um erro no sistema!";
		}
	}

	public function excluir_morador($id){
		if ($this->modelusuarios->remover_rep($id)) {
			redirect(base_url('republica/moradores'));
		}else{
			echo "Houve um erro no sistema!";
		}
	}

	public function pag_extrato(){
		$this->load->view('frontend/template/html-header');
		$this->load->view('frontend/template/headerUser');
		$this->load->view('frontend/template/menu');
		$this->load->view('frontend/extrato');
		$this->load->view('frontend/template/footer');
	}

}

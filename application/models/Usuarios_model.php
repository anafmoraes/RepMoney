<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model{

	public $id;
	public $nome;

	public function __construct(){
		parent::__construct();

	}

	public function adicionar($nome, $email, $codigo, $senha){
		$dados['nome']= $nome;
		$dados['email']= $email;
		$dados['codigo']= $codigo;
		$dados['senha']= $senha;
		$dados['tipo'] = "morador";
		return $this->db->insert('usuario', $dados);
	}

	public function excluir($id){
		$this->db->where('id', $id);
		return $this->db->delete('usuario');
	}

	public function recuperar($nome, $email) {

		$this->db->where('email', $email);
		$this->db->where('nome', $nome);
		$query = $this->db->get('usuario');
		
		foreach ($query->result() as $row) {
		    return $row->senha;
		}
	}
	public function atualizar($nome, $email, $codigo, $senha, $id){
		$dados['nome']= $nome;
		$dados['email']= $email;
		$dados['codigo']= $codigo;
		$dados['senha']= $senha;
		$this->db->where('id', $id);
		return $this->db->update('usuario', $dados);
	}

	public function remover_rep($id){
		$dados['codigo']= NULL;
		$this->db->where('id', $id);
		return $this->db->update('usuario', $dados);
	}
}

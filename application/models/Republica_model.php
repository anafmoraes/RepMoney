<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Republica extends CI_Model{

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

	public function atualizar($nome, $email, $codigo, $senha, $id){
		$dados['nome']= $nome;
		$dados['email']= $email;
		$dados['codigo']= $codigo;
		$dados['senha']= $senha;
		$this->db->where('id', $id);
		return $this->db->update('usuario', $dados);
	}
}

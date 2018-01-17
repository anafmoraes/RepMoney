<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Republica_model extends CI_Model{

	public function __construct(){
		parent::__construct();

	}

	public function função1($nome, $email, $codigo, $senha){
		$dados['nome']= $nome;
		$dados['email']= $email;
		$dados['codigo']= $codigo;
		$dados['senha']= $senha;
		$dados['tipo'] = "morador";
		return $this->db->insert('usuario', $dados);
	}

	public function função2($id){
		$this->db->where('id', $id);
		return $this->db->delete('usuario');
	}

	public function atualizar($nome, $rua, $numero, $complemento, $bairro, $cidade, $estado, $id){
		$dados['nome']= $nome;
		$dados['rua']= $rua;
		$dados['numero']= $numero;
		$dados['complemento']= $complemento;
		$dados['bairro']= $bairro;
		$dados['cidade']= $cidade;
		$dados['estado']= "Minas Gerais";
		$this->db->where('id', $id);

		echo $nome . $rua . $numero . $complemento . $bairro . $cidade . $estado;

		return $this->db->update('republica', $dados);
	}
}
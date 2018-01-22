<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Despesa_model extends CI_Model{

	public function __construct(){
		parent::__construct();

	}

	public function excluir($id){
		$this->db->where('id', $id);
		return $this->db->delete('despesa');
	}

	public function atualizar($descricao, $valor, $data, $id){
		$dados['descricao']= $descricao;
		$dados['valor']= $valor;
		$dados['data']= $data;

		$this->db->where('id', $id);
		return $this->db->update('despesa', $dados);
	}
}
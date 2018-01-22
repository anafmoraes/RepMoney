<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Despesa extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('despesa_model', 'modeldespesa');
	}

	public function excluir_despesa($id){
		if ($this->modeldespesa->excluir($id)) {
			redirect(base_url('despesas_admin'));
		}else{
			echo "Houve um erro no sistema!";
		}
	}

	public function editar(){
		$id="1";
		$descricao= $this->input->post('descricao');
		$valor= $this->input->post('valor');
		$data= $this->input->post('data');
		echo $descricao . $valor . $data . $id;
		//if ($this->modeldespesa->atualizar($descricao, $valor, $data, $id)){
			
			//redirect(base_url('despesas_admin'));
		//}else{
		//	echo "Houve um erro no sistema";
		//}
	}
}

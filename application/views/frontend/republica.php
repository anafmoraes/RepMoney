<div class="container">
	<div class="row">
		<div class="col-sm">
      		<!--primeira coluna-->
      		<div class="customblock">
                        <?php 
                              $codigo = $this->session->userdata('userlogado')->codigo;
                              $this->db->where('codigo_rep', $codigo);
                              $query = $this->db->get('republica');
                                    foreach ($query->result() as $row) {

                                          echo "Endereço: Rua ". $row->rua . ", n°: " . $row->numero;?> <br>
                                          <?php echo "Bairro: ". $row->bairro; ?><br>
                                          <?php  echo $row->complemento;?>
                                          <br>
                                          <?php  echo $row->cidade . ", ", $row->estado;?><br>
                                          Código único da república:
                                          <?php echo $row->codigo_rep;

                                    }?>
      		</div>
      	</div>
      	<div class="col-sm">
      		<!--segunda coluna-->
      		<div class="customblock">
      			<p> Você não é o gerenciador da república, por isso não pode editar ou excluir os dados da mesma</p>
      			<!--p> Gerenciador atual da república: <b>@gerenciadorrsrs</b>
      			</p-->
      		</div>
      	</div>
    </div>
</div>
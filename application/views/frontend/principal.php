<div class="container">
	<div class="row">
		<div class="col-sm">
      		<!--primeira coluna-->
      		<div class="customblock">

      			<?php
      			$codigo_rep = $this->session->userdata('userlogado')->codigo;
      			$this->db->where('codigo_rep', $codigo_rep);
                $query = $this->db->get('republica');
                foreach ($query->result() as $row) {
                	$nome_rep = $row->nome;
                }?>
                
      			<h4 align="center"><?php  echo $this->session->userdata('userlogado')->nome;?>, você faz parte da República <?php  echo $nome_rep;?></h4>
      				<center>
	      				<a class="btn custombtn" href="<?php echo base_url('editar')?>">Editar perfil</a>
	      				<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Excluir conta</button>
      				</center>
      				<div class="modal fade" id="myModal" role="dialog">
					    <div class="modal-dialog">
					      <!-- Modal content-->
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">Confirmar alteração</h4>
					        </div>
					        <div class="modal-body">
					          <p>Tem certeza que deseja excluir sua conta?</p>
					        </div>
					        <div class="modal-footer">
					          <button type="btn custombutton" class="btn btn-default" data-dismiss="modal">Não</button>
					        </div>
					        <div class="modal-footer">
					        	<a class="btn custombtn" href="<?php echo base_url('excluir')?>">Excluir conta</a>
					        </div>
					      </div>
					    </div>
 					</div>
      		</div>
    	</div>

   		<div class="col-sm">
      		<!--segunda coluna-->
      		<div class="customblock">
      			<h4 align="center">Prioridade de pagamento</h4>
      				<table class="table table-striped">
					  <thead style="background-color:#33cc33;">
					    <tr>
					      <th scope="col">Data de vencimento</th>
					      <th scope="col">Descrição</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php
					  	$codigo_rep = $this->session->userdata('userlogado')->codigo;
	        			$this->db->where('codigo_rep', $codigo_rep);
	        			$this->db->order_by("vencimento", "asc");
						$query = $this->db->get('despesa');
						foreach ($query->result() as $row) {
						?>
					    <tr>
					      <th scope="row"><?php echo $row->vencimento;?></th>
					      <td><?php echo $row->descricao;?></td>
					    </tr>
					    <?php } ?>
					  </tbody>
					</table>
      		</div>
    	</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm">
      		<!--primeira coluna-->
        <div class="customblock">
          <?php 
          $codigo = $this->session->userdata('userlogado')->codigo;
          $this->db->where('codigo_rep', $codigo);
          $query = $this->db->get('republica');
          foreach ($query->result() as $row) {?>

          <h4><?php echo "República ". $row->nome ?></h4>

          <?php
            echo "Endereço: Rua ". $row->rua . ", n°: " . $row->numero;?> <br>
            <?php echo "Bairro: ". $row->bairro; ?><br>
            <?php  echo $row->complemento;?><br>
            <?php  echo $row->cidade . ", ", $row->estado;?><br>
            Código único da república: <?php echo $row->codigo_rep;
          }?>
        </div>
    </div>

      	<div class="col-sm">
      		<!--segunda coluna-->
      		<div class="customblock">
            <?php
            $codigo_rep = $this->session->userdata('userlogado')->codigo;
            $this->db->where('codigo_rep', $codigo_rep);
                $query = $this->db->get('republica');
                foreach ($query->result() as $row) {
                  $nome_rep = $row->nome;
                }?>

            <p> Você é o gerenciador da <?php echo $nome_rep;?>, portando deve certificar-se que todos os dados estão corretos. Atualize as informações da república sempre que necessário. </p>
            
      			<!--a class="btn custombtn" href="<?php //echo base_url('excluir_republica')?>">Excluir república</a-->
            <a class="btn custombtn" href="<?php echo base_url('editar_republica')?>">Editar república</a>
            <a class="btn custombtn" href="<?php echo base_url('gerenciar_moradores')?>">Gerenciar moradores</a>
      			
      		</div>
      	</div>
    </div>
</div>
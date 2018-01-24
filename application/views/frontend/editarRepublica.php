<div class="container">
  <div class="row">
    <div class="col-sm">
      <!--primeira coluna-->
      <div class="customblock" style="margin-top: -3px">

          <?php
          $codigo_rep = $this->session->userdata('userlogado')->codigo;
          $this->db->where('codigo_rep', $codigo_rep);
          $query = $this->db->get('republica');
          foreach ($query->result() as $row) {
            $nome_rep = $row->nome;
            $rua = $row->rua;
            $numero = $row->numero;
            $complemento = $row->complemento;
            $bairro = $row->bairro;
            $cidade = $row->cidade;
            $estado = $row->estado;
          }

          echo validation_errors('<div class="alert alert-danger">', '</div>');
          echo form_open('republica/atualizar_dados');
          ?>
          
            <div class="form-group">
              <label for="nomeRep">República</label>
              <input type="text" class="form-control" name="nomeRep" id="nomeRep" value="<?php echo set_value('nomeRep', $nome_rep); ?>">
            </div>

            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="rua">Rua</label>
              <input type="text" class="form-control" name="rua" id= "rua" value="<?php echo set_value('rua', $rua); ?>">
            </div>

          <div class="form-group col-md-6">
            <label for="numero">Número</label>
            <input type="text" class="form-control" name="numero" id="numero" value="<?php echo set_value('numero', $numero); ?>">
          </div>
          </div>

          <div class="form-group">
            <label for="complemento">Complemento</label>
            <input type="text" class="form-control" name="complemento" id="complemento" value="<?php echo set_value('complemento', $complemento); ?>">
          </div>
          <div class="form-group">
            <label for="bairro">Bairro</label>
            <input type="text" class="form-control" name="bairro" id="bairro" value="<?php echo set_value('bairro', $bairro); ?>">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="cidade">Cidade</label>
              <input type="text" class="form-control" name="cidade" id="cidade" value="<?php echo set_value('cidade', $cidade); ?>">
            </div>
            <div class="form-group">
            <label for="bairro">Estado</label>
            <input type="text" class="form-control" name="estado" id="estado" value="<?php echo set_value('estado', $estado); ?>">
          </div>
          </div>
          <div style="margin-bottom: 50px">
          <button type="submit" class="btn custombtn">Salvar</button>
          <?php echo form_close();?>

        </div>
      </div>
    </div>
    <div class="col-sm">
      <!--segunda coluna-->
          <div class="customblock">
            

            <p> Você é o gerenciador da <?php echo $nome_rep;?>, portando deve certificar-se que todos os dados estão corretos. Atualize as informações da república sempre que necessário. </p>
            <a class="btn custombtn" href="<?php echo base_url('editar_republica')?>">Editar república</a>
            <a class="btn custombtn" href="<?php echo base_url('gerenciar_moradores')?>">Gerenciar moradores</a>
          </div>
        </div>
    </div>
</div>
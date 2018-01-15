<div class="container">
  <div class="row">
    <div class="col-sm">
      <!--primeira coluna-->
      <div class="customblock">
        <form>
          <?php
          echo validation_errors('<div class="alert alert-danger">', '</div>');
          echo form_open('republica/atualizar_dados');
          ?>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="nomeRep">República</label>
              <input type="text" class="form-control" id="nomeRep" placeholder="Nome da república">
            </div>
            <div class="form-group col-md-6">
              <label for="emailRep">E-mail</label>
              <input type="email" class="form-control" id="emailRep" placeholder="E-mail do gerenciador">
            </div>
          </div>
                
          <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" id="endereco" placeholder="Rua dos loucos, n 0">
          </div>
          <div class="form-group">
            <label for="bairro">Bairro</label>
            <input type="text" class="form-control" id="bairro" placeholder="Barreiro">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="cidade">Cidade</label>
              <input type="text" class="form-control" id="cidade">
            </div>
            <div class="form-group col-md-4">
              <label for="estado">Estado</label>
              <select id="estado" class="form-control">
                <option selected value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="cep">CEP</label>
              <input type="text" class="form-control" id="cep">
            </div>
          </div>
          <button type="submit" class="btn custombtn">Salvar</button>
          <?php echo form_close();?>
        </form>
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
            <a class="btn custombtn" href="<?php echo base_url('editar_republica')?>">Editar república</a>
            <a class="btn custombtn" href="<?php echo base_url('gerenciar_moradores')?>">Gerenciar moradores</a>
          </div>
        </div>
    </div>
</div>
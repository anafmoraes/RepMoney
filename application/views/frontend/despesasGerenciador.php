
<div class="container">
  <form>
    <!--div class="form-row">
      <div class="form-inline">
        <label for="mes">Selecione o período desejado: &nbsp &nbsp </label>
        <select id="mes" class="form-control">
          <option selected>Janeiro</option>
          <option>Fevereiro</option>
          <option>Março</option>
          <option>Abril</option>
          <option>Maio</option>
          <option>Junho</option>
          <option>Julho</option>
          <option>Agosto</option>
          <option>Setembro</option>
          <option>Outubro</option>
          <option>Novembro</option>
          <option>Dezembro</option>
        </select>
        <button type="submit" class="btn custombtn">Ok</button>
      </div> 
    </div>
  </form-->
  <br/><br/>
  <table class="table table-striped" style="margin-top: 20px;">
    <thead style="background-color:#33cc33;">
      <tr>
        <th scope="col">Tipo</th>
        <th scope="col">Descrição</th>
        <th scope="col">Valor total</th>
        <th scope="col">Vencimento</th>
        <th scope="col">Seu valor</th>
        <th scope="col">Opções</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
                <?php
                $codigo_rep = $this->session->userdata('userlogado')->codigo;
                $this->db->where('codigo_rep', $codigo_rep);
                $query = $this->db->get('republica');
                foreach ($query->result() as $row) {
                  $quant_moradores = $row->quant_moradores;
                }
                                
                $this->db->where('codigo_rep', $codigo_rep);
                $this->db->order_by("vencimento", "asc");
                $query = $this->db->get('despesa');
                
                foreach ($query->result() as $row) {?>
                <tr>
                  <th scope="row"><?php if ($row->fixa == "1") {echo "Fixa";} else {echo "Não fixa";}?></th>
                  <td><?php echo $row->descricao;?></td>
                  <td><?php echo "R$" . $row->valor;?></td>
                  <td><?php echo $row->vencimento;?></td>
                  <?php $valor_morador = $row->valor/$quant_moradores;?>
                  <td><?php echo "R$" . $valor_morador;?></td>
                  <td>
                    <button type ="button" class= "btn custombtn" data-toggle="modal" data-target="#modalEditar">editar </button> 
                    <!--button type ="button" class= "btn custombtn" data-toggle="modal" data-target="#modalDividir">dividir </button--> 
                    <button type ="button" class= "btn custombtn" data-toggle="modal" data-target="#modalExcluir">excluir </button> 
                  </td>
                  <td>
                    Paga
                  </td>
                </tr>

                <?php } ?>
    </tbody>
  </table>

  <center><button type="button" class="btn custombtn" data-toggle="modal" data-target="#modalCadastrar">Cadastrar nova despesa </button></center>
</div>




<!-- Modal editar -->
<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar despesa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>     
      </div>
      <div class="modal-body">
        <?php  
        echo validation_errors('<div class="alert alert-danger">','</div>');
        echo form_open('despesa/editar');
        ?>
      <fieldset>
          <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" name="descricao">
          </div>
          <div class="form-group">
            <label for="valor">Valor</label>
            <input type="text" class="form-control" name="valor" placeholder="R$00,00">
          </div>
          <div class="form-group">
            <label for="data">Vencimento:</label>
            <input type="text" class="form-control" name="data" placeholder="ano-mes-dia">
          </div>
        </fieldset>
      </div>
      <div class="modal-footer">
        <button class="btn custombtn"> Salvar </button>
        <button type="button" class="btn custombtn" data-dismiss="modal">Cancelar</button>
        <?php echo form_close();?>
      </div>
    </div>
  </div>
</div>


<!-- Modal dividir -->
<div class="modal fade" id="modalDividir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar despesa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>

          <div class="form-group">
            <label for="valor">Valor</label>
            <input type="text" class="form-control" id="valor" placeholder="R$00,00">
          </div>
          <div class="form-group">
            <label for="quantidade">Quantidade de moradores:</label>
            <input type="text" class="form-control" id="quantidade">
            
          </div>
          
        </form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn custombtn" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn custombtn">Dividir</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal excluir -->
<div class="modal fade" id="modalExcluir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar despesa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Certeza que deseja excluir a despesa?        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn custombtn" data-dismiss="modal">Cancelar</button>
        <a class="btn custombtn" href="<?php echo base_url('despesa/excluir_despesa/'.$row->id)?>">Excluir</a>
      </div>
    </div>
  </div>
</div>


<!-- Modal cadastrar -->
<div class="modal fade" id="modalCadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar nova despesa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" id="descricao">
          </div>
          <div class="form-group">
            <label for="valor">Valor</label>
            <input type="text" class="form-control" id="valor" placeholder="R$00,00">
          </div>
          <div class="form-group">
            <label for="data">Vencimento:</label>
            <input type="text" class="form-control" id="data">
            
          </div>
          
        </form>       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn custombtn" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn custombtn">Cadastrar</button>
      </div>
    </div>
  </div>
</div>
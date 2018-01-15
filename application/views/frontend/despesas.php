<div class="container">
	<div class="row">
		<div class="col-8">
      		<!--primeira coluna-->
      		<div class="customblock">
      			 <form>
            <div class="form-row">
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
          </form>
            <br/><br/>
            <table class="table table-striped">
              <thead style="background-color:#33cc33;">
                <tr>
                  <th scope="col">Tipo</th>
                  <th scope="col">Descrição</th>
                  <th scope="col">Valor total</th>
                  <th scope="col">Vencimento</th>
                  <th scope="col">Seu valor</th>
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
                  <td>Paga</td>
                </tr>

                <?php } ?>
              </tbody>
            </table>
      		</div>
      	</div>

      	<div class="col-sm">
      		<!--segunda coluna-->
      		<div class="customblock">
      			<!--p>*** o gerenciador da república ainda não dividiu este valor paratodos os moradores! </p-->
            <p>Você não é o gerenciador da república, por isso não pode editar/excluir/cadastrar despesas. </p>
            <p>Gerenciador atual da república: <b>@fulaninhors</b></p>
      		</div>
      	</div>
    </div>
</div>
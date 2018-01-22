<div class="container">
	<table class="table table-striped" style="margin-top: 50px;">
    <thead class="table-primary">
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">E-mail</th>
        <th scope="col">Opção</th>
        
      </tr>
    </thead>
    <tbody>
      <?php
          $codigo_rep = $this->session->userdata('userlogado')->codigo;
          $this->db->where('codigo', $codigo_rep);
          $query = $this->db->get('usuario');
          foreach ($query->result() as $row) {
      ?>
      <tr>
        <th scope="row"><?php echo $row->nome;?></th>
        <td><?php echo $row->email;?></td>
        <td>
          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#excluir_morador">Excluir morador</button>
        </td>
      </tr><?php } ?>
    </tbody>
  </table>

  <div class="modal fade" id="excluir_morador" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Confirmar alteração</h4>
                  </div>
                  <div class="modal-body">
                    <p>Tem certeza que deseja excluir esse morador?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="btn custombutton" class="btn btn-default" data-dismiss="modal">Não</button>
                  </div>
                  <div class="modal-footer">
                    <a class="btn custombtn" href="<?php echo base_url('usuarios/excluir_morador/'.$row->id)?>">Excluir morador</a>
                  </div>
                </div>
              </div>
          </div>
</div>
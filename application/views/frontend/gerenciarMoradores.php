<div class="container">
	<table class="table table-striped" style="margin-top: 50px;">
    <thead class="table-primary">
      <tr>
        <th scope="col"></th>
        <th scope="col">Nome</th>
        <th scope="col">E-mail</th>
        
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
        <th scope="row"><?php echo $row->email;?></th>
        <td><?php echo $row->nome;?></td>
        <td><a class="btn custombtn" href="<?php echo base_url('usuarios/excluir_morador')?>">Excluir morador</a></td>
      </tr><?php } ?>
    </tbody>
  </table>
</div>
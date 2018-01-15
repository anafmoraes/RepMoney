<div class="container">
    <?php
          echo validation_errors('<div class="alert alert-danger">', '</div>');
          echo form_open('usuarios/atualizar_dados');
      ?>
    <div class="form-group">
      <label for="inputNome">Nome</label>
      <input type="text" class="form-control" placeholder="Nome" name="txt-nome" id="txt-nome" value="<?php echo set_value('txt-nome')?>">
    </div>
    <div class="form-group">
      <label for="inputEmail2">E-mail</label>
      <input type="Email" class="form-control" placeholder="email@email.com" name="txt-email" id="txt-email" value="<?php echo set_value('txt-email')?>">
    </div>
    <div class="form-group">
      <label for="inputCodigo">Código da República</label>
      <input type="code" class="form-control" name="txt-codigo" id="txt-codigo">
    </div>
    <div class="form-group">
      <label for="inputSenha2">Senha</label>
      <input type="password" class="form-control" placeholder="****" name="txt-senha" id="txt-senha">
    </div>
    <button type="submit" class="btn custombtn">Salvar</button>
    <?php echo form_close();?>
</div>
    <nav class="navbar navbar-light bg-light justify-content-between">
            <a class="customtitle" href="#">Sistema RepMoney</a>
            <?php  
                        echo validation_errors('<div class="alert alert-danger">','</div>');
                        echo form_open('usuarios/login');

                    ?>
                    <fieldset>
                <div class="form-inline">
                <div class="form-group">
                    <div class="custominput"> <input type="email" class="form-control"  placeholder="Email" name="txt-email"></div>
                </div> 
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Senha" name="txt-senha">
                </div>  
                <button class="btn custombtn"> Entrar </button>
                <button type ="button" class= "btn custombtn" data-toggle="modal" data-target="#recuperarSenha">Esqueci minha senha </button> 
            </div>
            </fieldset>
            <?php echo form_close();?>
        </nav>

<!-- Modal Recuperar Senha -->
<div class="modal fade" id="recuperarSenha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Recuperar Senha</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php  
        echo validation_errors('<div class="alert alert-danger">','</div>');
        echo form_open('usuarios/recuperarSenha');
        ?>
        <fieldset>
          <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome">
          </div>
          <div class="form-group">
            <label for="email">E-mail: </label>
            <input type="email" class="form-control" name="email">
          </div>
       </fieldset>
      </div>
      <div class="modal-footer">
        <button class="btn custombtn"> Recuperar senha </button>
        <button type="button" class="btn custombtn" data-dismiss="modal">Cancelar</button>
        <?php echo form_close();?>
      </div>
    </div>
  </div>
</div>

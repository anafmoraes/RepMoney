
            <?php  
                echo validation_errors('<div class="alert alert-danger">','</div>');
                echo form_open('usuarios/recuperarSenha');
            ?>
            <fieldset>
                <div class="form-inline">
                    <div class="form-group">
                        <div class="custominput"><input type="text" class="form-control" placeholder="Nome" name="txt-nome"></div>
                    </div>  
                    <div class="form-group">
                        <div class="custominput"> <input type="email" class="form-control"  placeholder="Email" name="txt-email"></div>
                    </div> 
                    <button class="btn custombtn" >Recuperar senha</button>
                </div>
            </fieldset>
            <?php echo form_close();?>

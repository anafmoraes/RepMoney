<div class="container">
  <div class="row">
    <div class="col-sm">
      <!--primeira coluna-->
      <div class="customblock">
        
        <p  align="right">
          O RepMoney é um sistema de gerenciamento financeiro para repúblicas estudantis com o objetivo de auxiliar na organização financeira de jovens que muitas vezes estão lidando com contas pela primeira vez.
        </p> 
        <p  align="right">
         Vamos proporcionar transparência financeira na prestação de contas a fim de melhor controlar as despesas; agilizar o pagamento das contas evitando atrasos e multas; diminuir o valor total de gastos com a divulgação de serviços econômicos aos estudantes.
          <h3 align="right">Repúblicas que já utilizam o RepMoney:</h3>
        </p>
      </div>
    </div>
    <div class="col-sm">
      <!--segunda coluna-->
      <div class="customblock">
        <p class="lead" align="right">
        <h4 align="center">CADASTRE-SE</h4>
        <!--formulario de cadastro-->
        	<?php
					echo validation_errors('<div class="alert alert-danger">', '</div>');
					echo form_open('usuarios/inserir');
			?>

          <div class="form-group">
            <label for="inputNome">Nome completo</label>
            <input type="text" class="form-control" placeholder="Nome" name="txt-nome-cadastro" id="txt-nome-cadastro" value="<?php echo set_value('txt-nome-cadastro')?>">
          </div>
          <div class="form-group">
            <label for="inputEmail2">E-mail</label>
            <input type="email" class="form-control" id="txt-email-cadastro" name="txt-email-cadastro" placeholder="exemplo@email.com" value="<?php echo set_value('txt-email-cadastro') ?>">
          </div>
          <div class="form-group">
            <label for="txt-senha2">Senha</label>
            <input type="password" class="form-control" id="txt-senha-cadastro" name="txt-senha-cadastro" placeholder="Senha">
          </div>
          <div class="form-group">
            <label for="txt-codigo">A sua república já foi cadastrada? Se sim, insira o CÓDIGO ÚNICO no campo abaixo</label>
            <input type="text" class="form-control" id="txt-codigo" name="txt-codigo" placeholder="CÓDIGO ÚNICO">
          </div>
          <button type="submit" class="btn custombtn">Salvar</button>
          <p>Sua república ainda não foi cadastrada?
      		<a href="<?php echo base_url('cadastrar_republica')?>" class="btn custombtn">Cadastre sua república agora</a></p>
          <br/><br/><br/>
		  <?php echo form_close();?>
      </div>
    </div>
  </div>
</div>
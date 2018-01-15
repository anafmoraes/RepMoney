<?php
  include ("headerUser.php");
?>

<?php
  include ("menu.php");
?>

<div class="container">
	<div class="row">
		<div class="col-sm">
      		<!--primeira coluna-->
      		<div class="customblock">
      			<h4 align="center">Alterando senha</h4>
      				<form>
					  <div class="form-group row">
					    <label for="senhaAtual" class="col-sm-2 col-form-label">Atual</label>
					    <div class="col-sm-10">
					      <input type="password" class="form-control" id="senhaAtual" placeholder="Senha atual">
					    </div>
					  </div>
					  <div class="form-group row">
					    <label for="senhaNova" class="col-sm-2 col-form-label">Nova</label>
					    <div class="col-sm-10">
					      <input type="password" class="form-control" id="senhaNova" placeholder="Senha nova">
					    </div>
					  </div>
					  <button type="submit" class="btn btn-link"> Salvar </button>
					</form>
	      				
      		</div>
    	</div>

   		<div class="col-sm">
      		<!--segunda coluna-->
      		<div class="customblock">
      			<h4 align="center">Datas de vencimento para o mês</h4>
      				<table class="table table-striped">
					  <thead class="table-primary">
					    <tr>
					      <th scope="col">Data</th>
					      <th scope="col">Descrição</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">12/12/12</th>
					      <td>Luz</td>

					    </tr>
					    <tr>
					      <th scope="row">15/12/12</th>
					      <td>Água</td>
					    </tr>
					  </tbody>
					</table>
      		</div>
    	</div>
	</div>
</div>

<?php
  include ("footer.php");
?>
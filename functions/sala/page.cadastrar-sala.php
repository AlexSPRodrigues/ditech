<?php
	include('../../header.php')
?>

	<div class="formulario">
		<form action="form.cadastrar-sala.php" method="post">
			<div class="form-group">
  				<label for="usr">Nome da Sala: </label>
	  			<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome da Sala" required>
			</div>
			<button type="submit" class="btn btn-primary">Cadastrar Sala!</button>
			<button type="reset" class="btn btn-danger">Limpar Campo!</button>
		</form>	
	</div>
	
	<div class="alertas">
		<?php
			include('page.mensagens-retorno.php');
		?>
	</div>

<?php
	include('../../footer.php')
?>
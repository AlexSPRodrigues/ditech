<?php
	include('header.php')
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
		
		<?php if(isset($_GET['cadastro']) && $_GET['cadastro'] == "true"){ ?>
			<div class="alert alert-success">
  				<strong>Successo!</strong> Sala cadastrada com sucesso.
			</div>
		<?php } ?>

		<?php if(isset($_GET['cadastro']) && $_GET['cadastro'] == "false"){ ?>
			<div class="alert alert-danger">
  				<strong>Erro!</strong> Sala não cadastrada, verifique o preenchimento dos campos.
			</div>
		<?php } ?>

	</div>

<?php
	include('footer.php')
?>

<script>
	$(document).ready(function(){

		setInterval(function(){ 
			$('.alert-danger').fadeOut('slow'); 
			$('.alert-success').fadeOut('slow'); 
		}, 2000);
	
	});
</script>
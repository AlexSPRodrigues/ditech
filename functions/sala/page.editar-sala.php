<?php
	include('../../header.php');

	$id = $_GET['id'];
	$objeto = new Sala($db);
	$sala = $objeto->get($id);

?>

	<div class="formulario">
		<form action="<?=$config['admin_url']?>sala/editar" method="post">

			<input type="hidden" name="id" value="<?=$id?>">

			<div class="form-group">
  				<label for="usr">Nome da Sala: </label>
	  			<input type="text" class="form-control" id="nome" name="nome" value="<?=$sala['nome']?>" placeholder="Nome da Sala" required>
			</div>
			<button type="submit" class="btn btn-primary">Editar Sala!</button>
			<button type="reset" class="btn btn-danger">Limpar Campo!</button>
		</form>	
	</div>

<?php
	include('../../footer.php')
?>
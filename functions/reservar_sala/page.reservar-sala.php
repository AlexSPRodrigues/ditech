<?php
	include('../../header.php');

	$horario = new Horario($db);
	$lista_horarios = $horario->getAll();

	$usuario = new Usuario($db);
	$lista_usuarios = $usuario->getAll();

	$sala = new Sala($db);
	$lista_salas = $sala->getAll();

?>

	<div class="formulario">
		<form action="<?=$config['admin_url']?>reservar/salvar" method="post">
			
			<input type="hidden" name="usuario" value="<?=$_SESSION['id'];?>">

			<div class="form-group">
  				<label for="usr">Sala: </label>
	  			<select class="form-control" id="sala" name="sala" required>
				    <option value="">Selecione a sala</option>
				    <?
				    	if(count($lista_salas) > 0){
				    		foreach($lista_salas as $sala){
				    ?>
				    	<option value="<?=$sala['id']?>"><?=$sala['nome']?></option>
				    <?
				    	}
				    }
				    ?>
			  	</select>
			</div>

			<div class="form-group">
  				<label for="usr">Data: </label>
	  			<input type="date" class="form-control" name="data_reserva" min="<?=date("Y-m-d");?>" required>
			</div>



			<div class="form-group">
  				<label for="usr">Horário: </label>
	  			<select class="form-control" id="horario" name="horario" required>
				    <option value="">Selecione o horário</option>
				    <?
				    	if(count($lista_horarios) > 0){
				    		foreach($lista_horarios as $horario){
				    ?>
				    	<option value="<?=$horario['id']?>"><?=$horario['horario']?></option>
				    <?
				    	}
				    }
				    ?>
			  	</select>
			</div>

			<button type="submit" class="btn btn-primary">Reservar Sala!</button>
			<button type="reset" class="btn btn-danger">Limpar Campos!</button>

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
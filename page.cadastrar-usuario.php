<?php
	include('header.php')
?>

	<div class="formulario">
		<form action="form.cadastrar-usuario.php" method="post">
			<div class="form-group">
  				<label for="usr">Nome do Usuário: </label>
	  			<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
			</div>

			<div class="form-group">
  				<label for="usr">E-mail do Usuário: </label>
	  			<input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
			</div>
		
			<div class="form-group">
  				<label for="usr">Papel do Usuário no Sistema: </label>
	  			<select class="form-control" id="papel" name="papel" required>
				    <option value="">Selecione o nível do usuário</option>
				    <option value="administrador">Administrador</option>
				    <option value="usuario">Usuário</option>
			  	</select>
			</div>

			<div class="form-group">
  				<label for="usr">Senha do Usúario: </label>
	  			<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required>
			</div>

			<button type="submit" class="btn btn-primary">Cadastrar Usuário!</button>
			<button type="reset" class="btn btn-danger">Limpar Campos!</button>
		</form>	
	</div>
	
	<div class="alertas">
		<?php
			include('page.mensagens-retorno.php');
		?>
	</div>

<?php
	include('footer.php')
?>
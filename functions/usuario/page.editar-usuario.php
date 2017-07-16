<?php
	include('../../header.php');

	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$objeto = new Usuario($db);
		$usuario = $objeto->get($id);
	}

	// echo "<pre>";
	// print_r($usuario);
	// echo "</pre>";
	// die;

?>

	<div class="formulario">
		<form action="<?=$config['admin_url']?>usuario/editar" method="post">
  			<input type="hidden" name="id" value="<?=$usuario['id']?>">
			
			<div class="form-group">
  				<label for="usr">Nome do Usuário: </label>
	  			<input type="text" class="form-control" name="nome" placeholder="Nome" value="<?=$usuario['nome']?>" required>
			</div>

			<div class="form-group">
  				<label for="usr">E-mail do Usuário: </label>
	  			<input type="email" class="form-control" name="email" placeholder="E-mail"  value="<?=$usuario['email']?>" disabled>
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
  				<label for="usr">Senha do Usúario: (Se não for preenchido, a senha permanecerá a mesma já cadastrada)</label>
	  			<input type="password" class="form-control" name="senha" placeholder="Senha">
			</div>

			<button type="submit" class="btn btn-primary">Editar Usuário!</button>
			<button type="reset" class="btn btn-danger">Limpar Campos!</button>
		</form>	
	</div>

<?php
	include('../../footer.php')
?>
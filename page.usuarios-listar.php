<?php
	include('header.php');
	$objeto = new Usuario($db);
	$usuarios = $objeto->getAll();

	// echo "<pre>";
	// print_r($usuarios);
	// echo "</pre>";
	// die;

?>

	<div class="tabela-salas">
		<h2 class="text-center">Listagem de Usuários</h2>
		
		<table class="table">
			<thead>
				<th>ID</th>
				<th>Nome</th>
				<th>E-mail</th>
				<th>Papel</th>
				<th>Ações</th>
			</thead>
			<tbody>
				<? if(count($usuarios) < 1){ ?>
					<tr>
						<td colspan="4">
							<strong>Não existem usuários cadastradas!</strong>
						</td>
					</tr>
				<? }else{ ?>
					<? foreach($usuarios as $usuario){ ?>
						<tr>
							<td><?= $usuario['id'] ?></td>
							<td><?= $usuario['nome'] ?></td>
							<td><?= $usuario['email'] ?></td>
							<td>
								<? if($usuario['papel'] == "usuario"){ ?>
									Usuário
								<? }else{ ?>
									Adminstrador
								<? } ?>
							</td>
							<td>
								<a href="page.editar-usuario.php?id=<?=$usuario['id']?>" class="btn btn-primary btn-xs">
									<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar
								</a>
								<form action="form.deletar-usuario.php" method="get" style="display: inline;">
									<input type="hidden" name="id" value="<?=$usuario['id']?>">
									<input type="submit" class="btn btn-danger btn-xs" value="Excluir"></input>	
								</form>
								
							</td>
						</tr>
					<? } ?>
				<? } ?>
			</tbody>
		</table>

		<div class="alertas">
			<?php
				include('page.mensagens-retorno.php');
			?>
		</div>
	
	</div>
	
<?php
	include('footer.php')
?>
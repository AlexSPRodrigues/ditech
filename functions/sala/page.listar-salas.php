<?php
	include('../../header.php');
	$sala = new Sala($db);
	$lista_salas = $sala->getAll();

	// echo "<pre>";
	// print_r($lista_salas);
	// echo "</pre>";
	// die;

?>

	<div class="tabela-salas">
		<h2 class="text-center">Listagem de Salas</h2>
		
		<table class="table">
			<thead>
				<th>ID</th>
				<th>Nome</th>
				<th>Ações</th>
			</thead>
			<tbody>
				<? if(count($lista_salas) < 1){ ?>
					<tr>
						<td colspan="3">
							<strong>Não existem salas cadastradas!</strong>
						</td>
					</tr>
				<? }else{ ?>
					<? foreach($lista_salas as $sala){ ?>
						<tr>
							<td><?= $sala['id'] ?></td>
							<td><?= $sala['nome'] ?></td>
							<td>
								<a href="<?=$config['admin_url']?>sala/atualizar?id=<?=$sala['id']?>" class="btn btn-primary btn-xs">
									<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar
								</a>

								<a href="<?=$config['admin_url']?>sala/excluir?id=<?=$sala['id']?>" class="btn btn-danger btn-xs">
									<i class="fa fa-trash" aria-hidden="true"></i> Excluir
								</a>
								
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
	include('../../footer.php')
?>
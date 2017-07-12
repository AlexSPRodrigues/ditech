<?php
	include('header.php');
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
								<button type="button" class="btn btn-primary btn-xs">Editar</button>
								<button type="button" class="btn btn-danger btn-xs">Excluir</button>
							</td>
						</tr>
					<? } ?>
				<? } ?>
			</tbody>
		</table>
	
	</div>
	
<?php
	include('footer.php')
?>
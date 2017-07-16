<?php
	include('../../header.php');
	
	$reserva = new ReservaSala($db);
	$lista_reservas = $reserva->getAll();

	// echo "<pre>";
	// print_r($lista_salas);
	// echo "</pre>";
	// die;

?>

	<div class="tabela-salas">
		<h2 class="text-center">Listagem de Reservas</h2>
		
		<table class="table">
			<thead>
				<th>ID</th>
				<th>Usuário</th>
				<th>Sala</th>
				<th>Data</th>
				<th>Horário</th>
				<th>Ações</th>
			</thead>
			<tbody>
				<? if(count($lista_reservas) < 1){ ?>
					<tr>
						<td colspan="6" class="text-center">
							<strong>Não existem salas cadastradas!</strong>
						</td>
					</tr>
				<? }else{ ?>
					<? foreach($lista_reservas as $reserva){ ?>
						<tr>
							<td><?= $reserva['id'] ?></td>
							<td><?= $reserva['nome_usuario'] ?></td>
							<td><?= $reserva['nome_sala'] ?></td>
							<td><?= $reserva['data_reserva'] ?></td>
							<td><?= $reserva['horario'] ?></td>
							<td>
								<a href="<?=$config['admin_url']?>reservar/excluir?id=<?=$reserva['id']?>" class="btn btn-danger btn-xs">
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
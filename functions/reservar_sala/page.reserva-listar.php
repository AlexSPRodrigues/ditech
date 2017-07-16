<?php

	include('../../header.php');


	if($_SESSION['papel'] == "administrador"){
		$reserva = new ReservaSala($db);
		$lista_reservas = $reserva->getAll();	
	}else{
		$id = $_SESSION['id'];
		$reserva = new ReservaSala($db);
		$lista_reservas = $reserva->getReservaCliente($id);
	}	
	

	// echo "<pre>";
	// print_r($lista_salas);
	// echo "</pre>";
	// die;

?>

	<div class="tabela-salas">
		<h2 class="text-center">Listagem de Reservas</h2>
		
		<table class="table">
			<thead>
				<th class="text-center"><strong>ID</strong></th>
				<th class="text-center"><strong>Usuário</strong></th>
				<th class="text-center"><strong>Sala</strong></th>
				<th class="text-center"><strong>Data</strong></th>
				<th class="text-center"><strong>Horário</strong></th>
				<th class="text-center"><strong>Ações</strong></th>
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
							<td class="text-center"><?= $reserva['id'] ?></td>
							<td class="text-center"><?= $reserva['nome_usuario'] ?></td>
							<td class="text-center"><?= $reserva['nome_sala'] ?></td>
							<td class="text-center"><?= $reserva['data_reserva'] ?></td>
							<td class="text-center"><?= $reserva['horario'] ?></td>
							<td class="text-center">
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
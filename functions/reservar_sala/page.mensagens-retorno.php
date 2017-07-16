<!-- GRUPO DE MENSAGENS PARA CADASTRO DE SALA -->
	<?php if(isset($_GET['cadastrar']) && $_GET['cadastrar'] == "true"){ ?>
		<div class="alert alert-success">
				<strong>Successo!</strong> Reserva cadastrada com sucesso.
		</div>
	<?php } ?>

	<?php if(isset($_GET['cadastrar']) && $_GET['cadastrar'] == "false"){ ?>
		<div class="alert alert-danger">
				<strong>Erro!</strong> Reserva não realizada, verifique o preenchimento dos campos.
		</div>
	<?php } ?>
<!-- GRUPO DE MENSAGENS PARA CADASTRO DE SALA -->

<!-- GRUPO DE MENSAGENS PARA EXCLUSÃO DE SALA -->
	<?php if(isset($_GET['excluir']) && $_GET['excluir'] == "true"){ ?>
		<div class="alert alert-success">
				<strong>Successo!</strong> Reserva excluída com sucesso.
		</div>
	<?php } ?>

	<?php if(isset($_GET['excluir']) && $_GET['excluir'] == "false"){ ?>
		<div class="alert alert-danger">
				<strong>Erro!</strong> Reserva não excluída.
		</div>
	<?php } ?>
<!-- GRUPO DE MENSAGENS PARA EXCLUSÃO DE SALA -->
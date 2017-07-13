<!-- GRUPO DE MENSAGENS PARA CADASTRO DE SALA -->
	<?php if(isset($_GET['cadastrar']) && $_GET['cadastrar'] == "true"){ ?>
		<div class="alert alert-success">
				<strong>Successo!</strong> Sala cadastrada com sucesso.
		</div>
	<?php } ?>

	<?php if(isset($_GET['cadastrar']) && $_GET['cadastrar'] == "false"){ ?>
		<div class="alert alert-danger">
				<strong>Erro!</strong> Sala não cadastrada, verifique o preenchimento dos campos.
		</div>
	<?php } ?>
<!-- GRUPO DE MENSAGENS PARA CADASTRO DE SALA -->


<!-- GRUPO DE MENSAGENS PARA EDIÇÃO DE SALA -->
	<?php if(isset($_GET['editar']) && $_GET['editar'] == "true"){ ?>
		<div class="alert alert-success">
				<strong>Successo!</strong> Sala editada com sucesso.
		</div>
	<?php } ?>

	<?php if(isset($_GET['editar']) && $_GET['editar'] == "false"){ ?>
		<div class="alert alert-danger">
				<strong>Erro!</strong> Sala não editada, verifique o preenchimento dos campos.
		</div>
	<?php } ?>
<!-- GRUPO DE MENSAGENS PARA EDIÇÃO DE SALA -->


<!-- GRUPO DE MENSAGENS PARA EXCLUSÃO DE SALA -->
	<?php if(isset($_GET['delete']) && $_GET['delete'] == "true"){ ?>
		<div class="alert alert-success">
				<strong>Successo!</strong> Sala excluída com sucesso.
		</div>
	<?php } ?>

	<?php if(isset($_GET['delete']) && $_GET['delete'] == "false"){ ?>
		<div class="alert alert-danger">
				<strong>Erro!</strong> Sala não excluída.
		</div>
	<?php } ?>
<!-- GRUPO DE MENSAGENS PARA EXCLUSÃO DE SALA -->
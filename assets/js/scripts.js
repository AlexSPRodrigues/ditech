$(document).ready(function(){

// DATATABLE
	$('#tabela').DataTable();
// DATATABLE


// SCRIPT PARA DESAPARECER COM A MENSAGEM 
	setInterval(function(){ 
		$('.alert-danger').fadeOut('slow'); 
		$('.alert-success').fadeOut('slow'); 
		$('.alert-warning').fadeOut('slow'); 
	}, 2000);
// SCRIPT PARA DESAPARECER COM A MENSAGEM 

});
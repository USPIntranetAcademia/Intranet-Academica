$(document).ready(function(){

	$('.btn-editar').click(function(e) {
		var id_persona = $(this).attr('data-id');
		$.post('../negocio/editarpersona.php',{id_persona:id_persona},function(result){
			$('.body-persona').html(result);
		});
		$('#Modalepersona').modal('show');
	});	
        
        $('.btn-e-curso').click(function(e) {
		var id_persona = $(this).attr('data-id');
		$.post('../negocio/editarcurso.php',{id_persona:id_persona},function(result){
			$('.body-persona').html(result);
		});
		$('#Modalepersona').modal('show');
	});

});

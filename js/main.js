$(document).ready(function(){
	$('.prox').load('php/consulta_proxima.php');
	$('.recientes').load('php/consulta_reciente.php');
});

$(document).ajaxComplete(function(){
	$('.boton-news').click(function(){
		var codigo = $(this).attr('value');
		location.href = 'http://localhost/rotary/actividades.php?codigo='+codigo;
	});
	$('#formulario_proximo').on('submit',function(e){
		e.preventDefault();
		var details = $('#formulario_proximo').serialize();
		$.post('php/registro_noticia.php',details,function(data){
			$("form").trigger("reset");
			$('#response').html(data);
		});
	});
	$('#formulario_reciente').on('submit',function(e){
        e.preventDefault();
        var details = $('#formulario_reciente').serialize();
        $.post('php/registro_reciente.php',details,function(data){
        	$("form").trigger("reset");
          	$('#response').html(data);
        });
	});
	$('.eliminar').click(function(e){
		e.preventDefault();
		var titulo = $(this).attr('value');
		    //if (confirm("¿Está seguro que desea eliminar la noticia "+titulo+"?") == true) {
		        $.post('php/eliminar_reciente.php',titulo,function(data){
		        //	$('#response').html(data);
		        	console.log(titulo);
		        });
		    //} else {
		     //   console.log('no eliminado');
		    //}
	});
});
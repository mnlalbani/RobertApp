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
	$(".eliminar").unbind('click'); //remueve el evento click de los enlaces con clase ".eliminar", evita la doble llamada del evento
	$('.eliminar').click(function(e){
		e.preventDefault();
		var tr = $(this).closest("tr");
		var codigo = "codigo="+$(this).attr('value');
		var titulo = $(this).attr('titulo');
		    if (confirm("¿Está seguro que desea eliminar la noticia "+titulo+"?") == true) {
		        $.post('php/eliminar_reciente.php',codigo,function(data){
		        	tr.remove();
		   			$('#response').html(data);
		        	console.log(titulo, codigo, tr);
		        });
		    } else {
		     	return false;
		    }
	});
});
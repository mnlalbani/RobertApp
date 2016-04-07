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
	$('#formulario_reciente').unbind('submit'); 
	$('#formulario_reciente').on('submit',function(e){
        e.preventDefault();
        var details = $('#formulario_reciente').serialize();
        $.post('php/registro_reciente.php',details,function(data){
        	$("form").trigger("reset");
          	$('#response').html(data);
        });
	});


	$('#formulario_modificar').unbind('submit'); 
	$('#formulario_modificar').on('submit',function(e){
        e.preventDefault();
        var modificar = 'modificar';
        var codigo =  $(this).attr('codigo');
        var details = $('#formulario_modificar').serialize();
        $.post('php/modificar_noticia.php',details,function(data){
        	console.log(details);
        	//$("form").trigger("reset");
          	$('#response').html(data);
        });
	});
	
//----------Eliminar----------//
	$('.eliminar').unbind('click'); 
	$('.eliminar').click(function(e){
		e.preventDefault();
		var tr = $(this).closest("tr"); 
		var codigo = $(this).attr('value');
		var titulo = $(this).attr('titulo');
		var tipo = $(this).attr('tipo');
		    if (confirm("¿Está seguro que desea eliminar  <b>"+titulo+"</b>?") == true) {
		        $.post('php/eliminar_noticia.php',{codigo:codigo,tipo:tipo},function(data){
		        tr.hide("slow", function(){ 
		        	 	$(this).remove();
		        	 	 });
		   			//$('#response').html(data);
		        	//console.log(titulo, codigo, tr);
		        });
		    } else {
		     	return false;
		    }
	});

//----------Modificar----------//
	$('.modificar').unbind('click');
	$('.modificar').click(function(e){
		e.preventDefault();
		var codigo = $(this).attr('value');
		var consulta = "consulta";
		$.post('php/modificar_noticia.php',{codigo:codigo,consulta:consulta},function(data){
			$('#main-content').html(data);
			//.load('php/modificar_noticia.php?codigo='+codigo+'&consulta='+consulta);
		});
	});
});
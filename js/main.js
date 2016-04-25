$(document).ready(function(){
	$('.prox').load('php/consulta_proxima.php');
	$('.recientes').load('php/consulta_reciente.php');

	$('#login-form').unbind('submit');
	$('#login-form').on('submit',function(e){
		e.preventDefault();
		var details = $('#login-form').serialize();
		$.post('php/log.php',details,function(data){
			var arr = JSON.parse(data);
			console.log(arr);
			if(arr.success == true) {
				location.href = 'http://localhost/rotary/admin.php';
			}
			else{
			$('#response').html(arr.errors.invalido);
			}
		});
	});

	$('#contact-form').unbind('submit');
	$('#contact-form').on('submit',function(e){
		e.preventDefault();
		var details = $(this).serialize();
		$.post('php/correo.php',details,function(){
			$('#contact-form').trigger("reset");
			$('.responde').html("su mensaje ha sido enviado");
		});
	});

});

$(document).ajaxComplete(function(){
	$('.boton-news').click(function(){
		var codigo = $(this).attr('value');
		location.href = 'http://localhost/rotary/actividades.php?codigo='+codigo+'&tipo=reciente';
	});
	$('.boton-prox').click(function(){
		var codigo = $(this).attr('value');
		location.href = 'http://localhost/rotary/actividades.php?codigo='+codigo+'&tipo=proxima';
	});
	//Noticia Proxima
	$('#formulario_proximo').unbind('submit');
	$('#formulario_proximo').on('submit',function(e){
		e.preventDefault();
		var details = $('#formulario_proximo').serialize();
		$.post('php/registro_noticia.php',details,function(data){
			$("form").trigger("reset");
			$('#response').html(data);
		});
	});
	//Noticia Reciente

	$('#formulario_reciente').unbind('submit'); 
	$("#formulario_reciente").on('submit',function(){
	    var formData = $('#formulario_reciente').serializeFiles();
	    console.log(formData);

	    $.ajax({
	        url: 'php/registro_reciente.php',
	        type: 'POST',
	        data: formData,
	        async: true,
	        success: function (data) {
	            $('form').trigger('reset');
	            console.log("success");
	        },
	        error: function(data){
	        	console.log("error");
	        },
	        cache: false,
	        contentType: false,
	        processData: false
	    });

    return false;
	});

//----------Eliminar----------//
	$('.eliminar').unbind('click'); 
	$('.eliminar').click(function(e){
		e.preventDefault();
		var tr = $(this).closest("tr"); 
		var codigo = $(this).attr('value');
		var titulo = $(this).attr('titulo');
		var tipo = $(this).attr('tipo');
		    if (confirm("¿Está seguro que desea eliminar "+titulo+"?") == true) {
		        $.post('php/eliminar_noticia.php',{codigo:codigo,tipo:tipo},function(data){
		        tr.hide("slow", function(){ 
		        	 	$(this).remove();
		        	 	 });
		   			//$('#response').html(data);
		        });
		    } else {
		     	return false;
		    }
	});

//----------Modificar Noticias----------//
	$('.modificar').unbind('click');
	$('.modificar').click(function(e){
		e.preventDefault();
		var codigo = $(this).attr('value');
		var tipo = $(this).attr('tipo')
		var consulta = "consulta";
		$.post('php/modificar_noticia.php',{codigo:codigo,tipo:tipo,consulta:consulta},function(data){
			$('#main-content').html(data);
		});
	});

	$('#formulario_modificar').unbind('submit'); 
	$('#formulario_modificar').on('submit',function(e){
        e.preventDefault();
        var details = $('#formulario_modificar').serialize();
        $.post('php/modificar_noticia.php',details,function(data){
          	$('#response').html(data);
        });
	});
//----------Modificar Usuarios----------//
	$('.modificar_u').unbind('click');
	$('.modificar_u').click(function(e){
		e.preventDefault();
		var codigo = $(this).attr('value');
		var consulta = "consulta";
		$.post('php/modificar_usuario.php',{codigo:codigo,consulta:consulta},function(data){
			$('#main-content').html(data);
		});
	});
	$('#formulario_modificar_u').unbind('submit'); 
	$('#formulario_modificar_u').on('submit',function(e){
        e.preventDefault();
        var details = $('#formulario_modificar_u').serialize();
        $.post('php/modificar_usuario.php',details,function(data){
        	
          	$('#response').html(data);
        });
	});

	//Subir Usuario
	$('#formulario_subir_usuarios').unbind('submit');
	$('#formulario_subir_usuarios').on('submit',function(e){
		e.preventDefault();
		var details = $('#formulario_subir_usuarios').serialize();
		$.post('php/subir_usuario.php',details,function(data){
			$("form").trigger("reset");
			var arr = JSON.parse(data);
			if (arr.success == true) {
				$('#response').html(arr.message);
			}
			else{
				$('#response').html(arr.errors.usuario);
			}
		});
	});
});
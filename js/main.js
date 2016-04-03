$(document).ready(function(){

	$('#formulario_proximo').on('submit',function(e){
		e.preventDefault();
		var details = $('#formulario_proximo').serialize();
		$.post('php/registro_noticia.php',details,function(data){
			$('#response').html(data);
		});
	});

	$('#formulario_reciente').on('submit',function(e){
		e.preventDefault();
		var details = $('#formulario_reciente').serialize();
		$.post('php/registro_reciente.php',details,function(data){
			$('#response').html(data);
		});
	});

	$('.prox').load('php/consulta_proxima.php');
	$('.recientes').load('php/consulta_reciente.php');
	//$('#caratula').load('php/mostrar_noticia');

	
});

$(document).ajaxComplete(function(){
	$('.boton-news').click(function(){
		var codigo = $(this).attr('value');
		$.get('php/mostrar_noticia.php',{codigo:codigo});
		console.log(codigo);
	});
})
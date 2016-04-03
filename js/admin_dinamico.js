$(document).ready(function(){
	$('#reciente').click(function(){
		$('#main-content').load('php/recursos_admin.php #vista_portada_noticias');
		return false;
	});
	$('#proxima').click(function(){
		$('#main-content').load('php/recursos_admin.php #vista_portada_noticias');
		return false;
	});
	$('#usuario').click(function(){
		$('#main-content').load('php/recursos_admin.php #vista_listar_usuario');
		return false;
	});
});

$(document).ajaxComplete(function(){
	$('#subir_noticia').click(function(){
		$('#main-content').load('php/recursos_admin.php #vista_subir_noticias');
		return false;
	});
	$('#editar_noticia').click(function(){
		$('#main-content').load('php/recursos_admin.php #vista_listar_noticias');
		return false;
	});
});
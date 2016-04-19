$(document).ready(function(){
	$('#reciente').click(function(){
		$('#main-content').load('php/recursos_admin.php #vista_portada_noticias');
		return false;
	});
	$('#proxima').click(function(){
		$('#main-content').load('php/recursos_admin.php #vista_portada_noticias_proxima');
		return false;
	});
	$('#usuario').click(function(){
		$('#main-content').load('php/recursos_admin.php #vista_portada_usuarios');
		return false;
	});
	$('#notAllowed').hover(function(){
		$(this).css('cursor','not-allowed');
	});


});

$(document).ajaxComplete(function(){
	$('#subir_noticia_reciente').click(function(){
		$('#main-content').load('php/recursos_admin.php #vista_subir_noticias_recientes');
		return false;
	});
	$('#subir_noticia_proxima').click(function(){
		$('#main-content').load('php/recursos_admin.php #vista_subir_noticias_proximas');
		return false;
	});
	$('#editar_noticia_reciente').click(function(){
		$('#main-content').load('php/recursos_admin.php #vista_listar_noticias_reciente');
		return false;
	});
	$('#editar_noticia_proxima').click(function(){
		$('#main-content').load('php/recursos_admin.php #vista_listar_noticias_proximas');
		return false;
	});
	$('#lista_mod_usuario').click(function(){
		$('#main-content').load('php/recursos_admin.php #vista_listar_usuario');
		return false;
	});
	$('#subir_usuarios').click(function(){
		$('#main-content').load('php/recursos_admin.php #vista_subir_usuarios');
		return false;
	});
});


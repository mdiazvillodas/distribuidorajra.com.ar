<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es-AR" lang="es-AR">
<head>
	<title>JRA Distribuidora de productos de limpieza</title>
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	<link href="<?php echo $baseUri; ?>./estilos/estilo.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="<?php echo $baseUri; ?>./js/mootools.js"></script>
	<script type="text/javascript" src="<?php echo $baseUri; ?>./js/mootools-more.js"></script>
	<script type="text/javascript" src="<?php echo $baseUri; ?>./js/funciones.js"></script>
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<script type="text/javascript">
		function openLinkSimple(href, div){
			var request = new Request.HTML({
                        url: href,
                        method: 'get',
                        update: $(div),
                        onFailure: function(xhr){
                                $(div).setProperty('html', xhr.responseText);
                                }
                        });
			request.send();
			}
	</script>
</head>
<body>
	<div id="wrap">
		<div class="contenido">
			<div class="main">
				<img src="<?php echo $baseUri; ?>./img/splash.png"/>
			</div>
			<div class="top">
				<li class="menu">
					<ul onclick="openLinkSimple('main.php','contenido')" class="item">Home</ul>
					<ul onclick="openLinkSimple('quienes.php','contenido')" class="item">¿Quiénes Somos?</ul>
					<ul onclick="openLinkSimple('quienes.php','contenido')" class="item">Productos</ul>
					<ul onclick="openLinkSimple('quienes.php','contenido')" class="item">Servicios</ul>
					<ul onclick="openLinkSimple('contacto.php','contenido')" class="item">Contacto</ul>
				</li>
			</div>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es-AR" lang="es-AR">
<head>
	<title>JRA Distribuidora de productos de limpieza</title>
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	<link href="./estilos/estilo.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="./jvs/mootools.js"></script>
	<script type="text/javascript" src="./jvs/mootools-more.js"></script>
	<script type="text/javascript" src="./jvs/funciones.js"></script>
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
	<div id="quienes">
		<div class="header">
			¿Quienes Somos?
		</div>
		<p>
Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.			
		</p>
	</div>
</body>
</html>
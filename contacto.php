<div id="contacto">
	<div class="content">
		<div class="header">
			<div class="head">Contacto</div>
			<div class="social">
				<div class="soc" id="hface"></div>
				<div class="soc" id="hln"></div>
			</div>
		</div>
		<div class="formulario">
			<div class="row">
				<div class="label">Nombre y Apellido</div>
				<input type="text" id="nombre">
			</div>
			<div class="row">
				<div class="label">Empresa</div>
				<input type="text" id="empresa">
			</div>
			<div class="row">
				<div class="label">E-mail</div>
				<input type="text" id="mail">
			</div>
			<div class="row">
				<div class="label">Teléfono de contacto</div>
				<input type="text" id="tel">
			</div>
			<div class="row">
				<div class="label">Mensaje</div>
				<textarea style="resize:none;" id="mensaje"></textarea>
			</div>
			<div id="send" class="button">Enviar</div>
		</div>
	</div>
</div>
<script type="text/javascript">
		$('send').addEvent('click', function(){
		var nombre,email,mensaje, empresa, tel;
		nombre = $('nombre').getProperty('value');
		empresa = $('empresa').getProperty('value');		
		email = $('mail').getProperty('value');
		tel = $('tel').getProperty('value');		
		mensaje = $('mensaje').getProperty('value');
		
		new Request.HTML({
			url: 'enviar.php',
			data:{
				'n': nombre,
				'e': email,
				's': empresa,
				'h': tel,
				'm': mensaje
			},
			onSuccess:function(){
				alert('Mensaje Enviado');
			}
		}).send();
	});
</script>
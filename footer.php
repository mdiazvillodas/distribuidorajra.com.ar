			<footer>
				info@distribuidorajra.com.ar; Munro, Vicente López; tel:1123456789
			</footer>
		</div>
	</div>
</body>
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
</html>
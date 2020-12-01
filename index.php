<!DOCTYPE html>
<html>
<head>
	<title>Pagina Principal</title>
	<link rel="stylesheet" href="css/stylejs.css">
	
</head>
<body id="cuerpo">
	<div class="contenedor">
		<?php include("estructura/cabecera.html") ?>
		<div class="contenido">
			<div class="principal">	

				<form name="form1" id="miformulario" action="" method="post">
					<p>
						<label id="nombre">Nombre:</label>
						<input type="text" name="nombre" id="nombre" size="40"> 
					</p>
					<p>
						<label id="apellido">Apellido:</label>
						<input type="text" name="apellido" id="apellido" size="40"> 
					</p>
					<p>
						<label id="contraseña">Contraseña</label>
						<input type="password" name="contraseña" id="contraseña" size="40">
					</p>
					<p>
						<label id="edad">edad</label>
						<input type="text" name="edad" id="contraseña" size="40">
					</p>
						
						<input type="submit" name="enviar" id="enviar">
				</form>

				<script>
					/*
					var $cuerpo = document.getElementById("cuerpo");

					var $colorWeb = prompt("Introduce el colo de fondo Azul/Verde/Rojo");

					if($colorWeb.toLowerCase() == "azul"){
						$cuerpo.style.backgroundColor = "blue";
					}else if ($colorWeb.toLowerCase() == "verde") {
						$cuerpo.style.backgroundColor = "green";
					} else if ($colorWeb.toLowerCase()	 == "rojo") {
						$cuerpo.style.backgroundColor = "red";
					}else{
						alert("Color no contemplado");
					}*/



				</script>

			</div>
		</div>
	</div>
</body>
</html>
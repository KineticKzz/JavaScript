<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="stylejs.css">
</head>
<body>
	<div class="contenedor">
		<div class="header">
			<p class="logo"><a href="index.php">Curso JavaScripts</a></p>
			<ul>
				<li><a href="calculadora.html">calculadora</a></li>
				<li><a href="aprendiendo_javascripts.html">Aprendiendo JavaScripts</a></li>
			</ul>
		</div>
	
	

		<div class="contenido">
				<div class="principal">	
				<?php 
					if (isset($_POST["enviar"])){

						$usuario = $_POST["nombre"];
						$contraseña = $_POST["contraseña"];
						if($usuario== "Juan" & $contraseña == 1234){
							print("Usuario y contraseña correcto");
						}else{
							print("Usuario o contraseña incorrecto");
						}

					}
				?>
			</div>
		</div>
	</div>

</body>
</html>
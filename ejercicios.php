<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylejs.css">
    <title>MaquinaFiesta</title>
    <script src="js/ejercicios.js"></script>
</head>
<body>
<div class="contenedor">
      <?php include "estructura/cabecera.html"?>
		<div class="contenido">
			<div class="principal" id="principal">	
                <h1>MAQUINA FIESTA</h1>
                <label for="nombre">¿Comó se llama?:</label>
                <input type="text" class="nombre">
                <label for="edad">Introduzca su edad:</label>
                <input type="text" class="edad">
                <label for="hora">Introduzca la hora:</label>
                <input type="text" class="hora">
                <input type="submit" class="enviar" onClink="maquinaFiesta()">
			</div>
		</div>
	</div>

    
</body>
</html>
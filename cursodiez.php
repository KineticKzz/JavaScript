<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylejs.css">
    <title>Titulo Plantilla</title>
    <script src="js/aprendiendoJavaScripts.js"></script>
   
</head>
<body> 
    <div class="contenedor">
        <?php include "estructura/cabecera.html"?>
        <div class="contenido">
			<div class="principal">	
                <h1>ASISTENCIA ALUMNOS</h1>
                <div id="cuadroAsistencia">
                    <p>Introduzca el numero de alumnos:</p>
                    <input type="text" name="numAlumnos" id="numAlumnos">
                    <input type="submit" name="enviar" id="enviar" onClick="asistenciaClases()">
                </div>	
			</div>
		</div>
	</div>
</body>
</body>
</html>
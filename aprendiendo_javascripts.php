<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylejs.css">
    <title>Document</title>  
    <script>

        var $articulos = ["Zapatillas","Camiseta","Pantalón","Calcetines"];
        //var $articulos = new Array("Zapatillas","Camiseta","Pantalón","Calcetines");

    </script>  
</head>
<body>
    <div class="contenedor">
        <?php include "estructura/cabecera.html"?>

        <div class="contenido">
            <div class="principal">
                <h1>Jugando con las variables</h1>

                <script>
                    document.write("<p> El primer articulo es <strong>" + $articulos[0] + "</strong></p>");
                    
                    document.write("<p>El último elemento es <strong>" + $articulos[$articulos.length-1] + "</strong><p>");
                    
                    $articulos.unshift("Balón");

                    document.write("<p>Ahora el primer elemento es <strong>" + $articulos[0] + "</strong></p>")
                    
                    $articulos.push(prompt("Introduce un articulo: "));

                    document.write("<p>Agregemos un elemento mas al final <strong>" + $articulos[$articulos.length-1] + "</strong></p>");
                        
                    document.write("<p>MOSTRANDO TODOS LOS ELEMENTOS DE NUESTRO ARRAY:</p>");

                    var $contador = 0;

                    while ($contador < $articulos.length) {
                        document.write("<p><strong>" + $articulos[$contador] + "</strong></p>");
                        $contador++;
                    }

                </script>

            </div>
        </div>
    </div>
</body>
</html>
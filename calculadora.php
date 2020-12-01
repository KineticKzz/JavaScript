<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/stylejs.css">

	<script>

		var $cifra = "";
		var $acumulado = 0;
		var $sumar = false;
		var $restar = false;
		var $p_operacion = true;

		function display_numeros(valor){

			document.getElementById("display").value=$cifra+valor;
			$cifra = document.getElementById("display").value;
		}

		function suma(){

			if ($restar) {
				$acumulado-=parseInt($cifra);
				document.getElementById("display").value =$acumulado;
			}else{
				$acumulado+=parseInt($cifra);
				document.getElementById("display").value = $acumulado;
			}
			$cifra = "";
			$sumar = true;
			$restar = false;
			$p_operacion = false;
			
		}

		function resta(){
			if($p_operacion == false){

				if ($sumar) {
					$acumulado+=parseInt($cifra);
					document.getElementById("display").value =$acumulado;
				}else{
					$acumulado = $acumulado - parseInt($cifra);
					document.getElementById("display").value =$acumulado;
				}
			}else{
				$acumulado = parseInt($cifra);
				$p_operacion = false;
			}
			
			$cifra = "";
			$sumar = false;
			$restar = true;
		}

		function resultado(){
			if($sumar){
				document.getElementById("display").value = $acumulado + parseInt($cifra);
			}else if ($restar) {
				document.getElementById("display").value = $acumulado - parseInt($cifra);
			}
			$acumulado = parseInt(document.getElementById("diplay").value);
			$cifra = 0;
		}
			
	</script>

</head>

<body>
	<div class="contenedor">
		<?php include "estructura/cabecera.html"?>
		<div class="contenido">
			<div class="principal">
				<div class="calculadora">

					<input type="text" name="display" id="display" size="25">
					
					<p class="linea_calculadora">
						<input name="button" type="button" class="numero" id="button" value="+" onclick="suma()">
						<input name="button2" type="button" class="numero" id="button2" value="-" onclick="resta()">
						<input name="button4" type="button" class="numero" id="button4" value="/" onclick="operador('multi')">
						<input name="button3" type="button" class="numero" id="button3" value="*" onclick="operador('division')">
					</p>
					<p>
						<input name="button7" type="button" class="numero" id="num7" value="7" onclick="display_numeros(7)">
						<input name="button8" type="button" class="numero" id="num8" value="8" onclick="display_numeros(8)">
						<input name="button9" type="button" class="numero" id="num9" value="9" onclick="display_numeros(9)">
					</p>
					<p>
						<input name="button4" type="button" class="numero" id="num4" value="4" onclick="display_numeros(4)">
						<input name="button5" type="button" class="numero" id="num5" value="5" onclick="display_numeros(5)">
						<input name="button6" type="button" class="numero" id="num6" value="6" onclick="display_numeros(6)">
					</p>
					<p>
						<input name="button1" type="button" class="numero" id="num1" value="1" onclick="display_numeros(1)">
						<input name="button2" type="button" class="numero" id="num2" value="2" onclick="display_numeros(2)">
						<input name="button3" type="button" class="numero" id="num3" value="3" onclick="display_numeros(3)">
					</p>
					<p>
						<input name="button0" type="button" class="numero" id="num0" value="0" onclick="display_numeros(0)">
						<input name="buttoncoma" type="button" class="numero" id="buttoncoma" value="," onclick="operador('coma')">
						<input name="buttonigual" type="button" class="numero" id="buttonigual" value="=" onclick="resultado()">
					</p>
				</div>

				<script>
					document.getElementById("display").value = 0;	
				</script>

			</div>
		</div>
	</div>
</body>
</html>
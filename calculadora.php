<html>
	<head>
		<title>Operadores Aritm&eacute;meticos</title>
	</head>
	<body bgcolor="#6574F0">
		
		<h1 >Calculadora</h1>
		<form action="calculadora.php" method="post">
			<select name="operador">
				<option value="suma">Suma</option>
				<option value="resta">Resta</option>
				<option value="multiplicacion">Multiplicaci&oacute;n</option>
				<option value="division">Divisi&oacute;n</option>
			</select><br />
			Ingresa tu primer n&uacute;mero:<br />
			<input type="text" name="valor1"value="0"><br />
			Ingresa tu segundo valor:<br />
			<input type="text" name="valor2" value="0"><br>
			<input type="reset" value="Borrar">
			<input type="submit" value="Enviar">
		</form>
		<?php 
	if ($_POST ["valor1"] !="" and $_POST ["valor2"]!=""){
		if ($_POST["operador"] == "suma") {
			print ($resultado = $_POST ["valor1"] + $_POST ["valor2"]);
			print ('<br /><a href="calculadora.php">Volver</a>');
		} 
		elseif ($_POST["operador"] == "resta") {
			print ($resultado = $_POST ["valor1"] - $_POST ["valor2"]);
			print ('<br /><a href="calculadora.php">Volver</a>');
		}
		 elseif ($_POST["operador"] == "multiplicacion") {
			print ($resultado = $_POST ["valor1"] * $_POST ["valor2"]);
			print ('<br /><a href="calculadora.php">Volver</a>');
		} 
		elseif ($_POST["operador"] == "division") {
			print ($resultado = $_POST ["valor1"] / $_POST ["valor2"]);
			print ('<br /><a href="calculadora.php">Volver</a>');
		}
	} else {
		print("Ingresa alg&uacute;n valor");
		print ('<br /><a href="calculadora.php">Volver</a>');
	}
?>
	</body>
</html>

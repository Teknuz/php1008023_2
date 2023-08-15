
</form>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<h1>Ingrese los datos para calcular la temperatura.</h1>
<form action="ejercicio5.php" method="POST">
	<input type="text" name="txtgrados" placeholder="Ingrese la temperatura">
	<input type="submit" name="btn_enviar" value="Calcular">
<select name="opcion">
<option value="1">Farenheit</option>
<option value="2">Celsius</option>
<option value="3">Kelvin</option>
</select>
</form>
<?php
if($_POST){
	$grados = $_POST["txtgrados"];
	$opcion = $_POST["opcion"];

	if($opcion=="1"){
	$conversion1=(($grados-32)*5/9);	
	$conversion_formato=number_format($conversion1, 2, '.', '');
	print"En grados Celsius es :".$conversion_formato ."°C";
		}else if($opcion=="2"){
			$conversion2=(($grados*9/5)+32);	
			$conversion_formato2=number_format($conversion2, 1, '.', '');
			print"En grados Farenheit es :".$conversion_formato2."°F";
		}else if($opcion=="3"){
			$conversion2=($grados+273.15);	
			$conversion_formato2=number_format($conversion2, 1, '.', '');
			print"En grados Kelvin es :".$conversion_formato2."K";
		}
}
?>
<form action=ejercicio5.php>
<input type="submit" name="btn_borrar" value="Borrar">	</input>	
</form>
<form action="ejercitario.php">
    <input type="submit" name="btn_volver" value="Volver">
</form>
</body>
</html>
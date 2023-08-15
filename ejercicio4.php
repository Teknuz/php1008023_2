<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
Escribir un programa que convierta guaraníes a dólares. Recibirá un número decimal correspondiente a la cantidad en guaraníes y contestará con la cantidad correspondiente en dólares. Suponer que el cambio es de 7500 guaraníes por 1 Dólar.";

<h2>Ingresa el monto<br></h2>

    <form action="ejercicio4.php" method="POST">
    <input type="text" name="txtmonto" placeholder="Ingrese aqui el monto"> </input>
    <input type="submit" name="btn_calcular" value="Calcular"></input>
    <select name="opcion">
<option value="1">Dolares</option>
<option value="2">Guaranies</option>
</select>
    </form>
<?php
if($_POST){
	$monto = $_POST["txtmonto"];
	$opcion = $_POST["opcion"];

	if($opcion=="1"){
	$conversion1=($monto/7500);	
	$conversion_formato=number_format($conversion1, 2, '.', '');
    print"El monto que ingreso es :".number_format($monto,0,'.',',') ."Gs<br>";
	print"El monto en dolares es :".$conversion_formato ."$";
		}else if($opcion=="2"){
			$conversion2=($monto*7500);	
			$conversion_formato2=number_format($conversion2, 0, '.', '.');
            print"El monto que ingreso es :".number_format($monto,2,'.','') ."$<br>";
			print"El monto es guaranies es:".$conversion_formato2."Gs";
        }
    }
//$valor="100000";
//$conversion=($valor/7500);
//$formato_decimal = number_format($conversion, 2, '.', '');

//$frase2="<br>El monto en dolares es: $formato_decimal $";
//echo "$frase2";
?>
<form action="ejercicio4.php">
    <input type="submit" name="btn_borrar" value="Borrar">
</form>
<form action="ejercitario.php">
    <input type="submit" name="btn_volver" value="Volver">
</form>
</body>
</html>
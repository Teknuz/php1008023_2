<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$frase="Escribir un programa que imprima la suma de 5000 y 250, la resta de 3215 y 782, la multiplicación de 3 y 100, la división de 15000 entre 500, la raíz cuadrada de 25 y elevar 5 a la 3ra potencia.";
echo "$frase";
$suma1=(5000+250);
echo "<br>La suma de 5000 y 250 es: $suma1";
$resta1=(3215-782);
echo "<br>La resta de 3215 y 782 es: $resta1";
$multi1=(3*100);
echo "<br>La multiplicacion de 3 x 100 es: $multi1";
$division1=(1500/500);
echo "<br>La division de 1500 y 500 es: $division1";
$raiz1=sqrt(25);
echo "<br>La raiz de 25 es: $raiz1";
$potencia1=(pow(5, 3));
echo "<br>El numero 5 elevado a la tercera potencia es: $potencia1";
?>
<form action="ejercitario.php">
    <input type="submit" name="btn_volver" value="Volver">
</form>
</body>
</html>
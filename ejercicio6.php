<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Escribir un programa que calcule el volumen de una esfera cuyo valor del diámetro se ingresa por teclado.
La fórmula para calcular el volumen de una esfera es: V = 4/3.π.r3</h1>
<form action="ejercicio6.php" method="POST">
    <input type="number" name="txtradio" placeholder="Ingrese el radio"></input>
    <input type="submit" name="btn_calcular" value="Calcular"></input>
    <?php
    if($_POST){
    $radio = $_POST["txtradio"];
    $radio3=pow($radio,3);
    $pi=3.1416;
    $volumen=(4/3*$pi*$radio3);
    print"<br>El volumen segun el radio que ingreso es :".number_format($volumen,2,'.',',') ."cm3<br>";
    }
    ?>
 
</form>
<form action="ejercicio6.php">
    <input type="submit" name="btn_borrar" value="Borrar">
</form>
<form action="ejercitario.php">
    <input type="submit" name="btn_volver" value="Volver">
</form>
</body>
</html>
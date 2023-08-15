<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Escribir un programa que pida la altura y el diámetro de un cilindro en metros. Calcular el volumen del cilindro y mostrar el resultado.
La fórmula para calcular el volumen de un cilindro es: V = Pi * radio2 * altura.</h1>

<form action="ejercicio8.php" method="POST">
    <input type="number" name="txtradio" placeholder="Ingrese el radio"></input>
    <input type="number" name="txtaltura" placeholder="Ingrese la altura"></input>
    <input type="submit" name="btn_calcular" value="Calcular"></input>
    <?php
    if($_POST){
    $radio = $_POST["txtradio"];
    $altura = $_POST["txtaltura"];
    $radio2=pow($radio,2);
    $pi=3.1416;
    $volumen=($pi*$radio2*$altura);
    print"<br>Los datos que ingreso son:<br> Radio : ".$radio ."<br> Altura : ".$altura;
    print"<br>El volumen segun el radio y altura que ingreso es :".number_format($volumen,2,',','') ." m2<br>";
    }
    ?>
 
</form>
<form action="ejercicio8.php">
    <input type="submit" name="btn_borrar" value="Borrar">
</form>
<form action="ejercitario.php">
    <input type="submit" name="btn_volver" value="Volver">
</form>
</body>
</html>
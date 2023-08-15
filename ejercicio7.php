<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Escribir un programa que calcule el volumen de un cubo cuyo lado se ingresa por teclado.
La fórmula para calcular el volumen de un cubo es: V = lado3</h1>

<form action="ejercicio7.php" method="POST">
    <input type="number" name="txtlado" placeholder="Ingrese el lado"></input>
    <input type="submit" name="btn_calcular" value="Calcular"></input>
    <?php
    if($_POST){
    $lado = $_POST["txtlado"];
    $lado3=pow($lado,3);
    $volumen=($lado3);
    print"<br>El lado que ingreso es : ".$lado;
    print"<br>El volumen segun el radio que ingreso es :".number_format($volumen,2,'.',',') ."cm3<br>";
    }
    ?>
 
</form>
<form action="ejercicio7.php">
    <input type="submit" name="btn_borrar" value="Borrar">
</form>
<form action="ejercitario.php">
    <input type="submit" name="btn_volver" value="Volver">
</form>
</body>
</html>
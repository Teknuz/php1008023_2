<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calcular el área y perímetro de un círculo.
La fórmula para calcular el PERIMETRO = 2 * PI * radio
La fórmula para calcular el AREA: A = PI * radio2</h1>
<form action="ejercicio16.php" method="POST">
    <input type="number" name="txtradio" placeholder="Ingrese el radio"></input>
    <input type="submit" name="btn_calcular" value="Calcular"></input>
    <?php
    if($_POST){
    $radio = $_POST["txtradio"];
    $radio2=pow($radio,2);
    $pi=3.1416;
    $perimetro=(2*$pi*$radio);
    $area=($pi*$radio2);
    print"<br>El dato que ingreso es:<br> Radio : ".$radio ;
    print"<br>El area segun el radio que ingreso es :".number_format($area,2,',','') ." m2<br>";
    print"<br>El perimetro segun el radio que ingreso es :".number_format($perimetro,2,',','') ." m<br>";
}
    
    ?>
 
</form>
<form action="ejercicio16.php">
    <input type="submit" name="btn_borrar" value="Borrar">
</form>
<form action="ejercitario.php">
    <input type="submit" name="btn_volver" value="Volver">
</form>
    
</body>
</html>
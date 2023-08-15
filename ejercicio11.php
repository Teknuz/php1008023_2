<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calcular el área de una corona circular. </h1>
    <h2>area = pi * radio mayor2 - radiomenor2</h2>
    <form action="ejercicio11.php" method="POST">
    <input type="number" name="txtradiomayor" placeholder="Ingrese el radio mayor"></input>
    <input type="number" name="txtradiomenor" placeholder="Ingrese el radio menor"></input>
    <input type="submit" name="btn_calcular" value="Calcular"></input>
    <?php
    if($_POST){
    $rmayor = $_POST["txtradiomayor"];
    $rmenor = $_POST["txtradiomenor"];
    $rmayor2=pow($rmayor,2);
    $rmenor2=pow($rmenor,2);
    $pi=3.1416;
    $area=($pi*($rmayor2-$rmenor2));
    print"<br>Los datos que ingreso son:<br> Radio Mayor : ".$rmayor ."<br> Radio Menor: ".$rmenor;
    print"<br>Teniendo en cuenta que pi es: 3.1416";
    print"<br>El area segun los datos es :".number_format($area,2,',','') ." cm2<br>";
    }
    ?>
 
</form>
<form action="ejercicio11.php">
    <input type="submit" name="btn_borrar" value="Borrar">
</form>
<form action="ejercitario.php">
    <input type="submit" name="btn_volver" value="Volver">
</form>
</body>
</html>
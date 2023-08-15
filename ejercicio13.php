<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calcular el área de un ortoedro.</h1>
    <h2>Area = 2 * (a*b + a*c + b*c)</h2>
    <form action="ejercicio13.php" method="POST">
    <input type="number" name="txta" placeholder="Ingrese la cara a"></input>
    <input type="number" name="txtb" placeholder="Ingrese la cara b"></input>
    <input type="number" name="txtc" placeholder="Ingrese la cara c"></input>
 
    <input type="submit" name="btn_calcular" value="Calcular"></input>
    <?php
    if($_POST){
    $caraa = $_POST["txta"];
    $carab = $_POST["txtb"];
    $carac = $_POST["txtc"];
   
    $a_b=($caraa*$carab);
    $a_c=($caraa*$carac);
    $b_c=($carab*$carac);
    $area=(2*($a_b+$a_c+$b_c));
    print"<br>Los datos que ingreso son:<br> Cara A : ".$caraa."<br> Cara B : ".$carab."<br> Cara C : ".$carac;
    print"<br>El area segun los datos es :".number_format($area,2,',','') ." cm2<br>";
    }
    ?>
 
</form>
<form action="ejercicio13.php">
    <input type="submit" name="btn_borrar" value="Borrar">
</form>
<form action="ejercitario.php">
    <input type="submit" name="btn_volver" value="Volver">
</form>
</body>
</html>
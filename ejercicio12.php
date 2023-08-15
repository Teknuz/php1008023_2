<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calcular el área de un tetraedro.
Area = √3 * a2 (a = arista)</h1>

<form action="ejercicio12.php" method="POST">
    <input type="number" name="txtarista" placeholder="Ingrese el arista"></input>
   
    <input type="submit" name="btn_calcular" value="Calcular"></input>
    <?php
    if($_POST){
    $arista= $_POST["txtarista"];
    $arista2=pow($arista,2);
    $raiz3=sqrt(3);

    $area=($raiz3*$arista2);
    print"<br>Los datos que ingreso son:<br> Arista : ".$arista ;
    print"<br>El area segun la arista que ingreso es :".number_format($area,2,',','') ." cm2<br>";
    }
    ?>
 
</form>
<form action="ejercicio12.php">
    <input type="submit" name="btn_borrar" value="Borrar">
</form>
<form action="ejercitario.php">
    <input type="submit" name="btn_volver" value="Volver">
</form>
</body>
</html>
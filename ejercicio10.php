<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calcular el área de un trapecio.
Area = (Base Mayor + Base Menor) * altura / 2</h1>
<form action="ejercicio10.php" method="POST">
    <input type="number" name="txtbmayor" placeholder="Ingrese la base mayor"></input>
    <input type="number" name="txtbmenor" placeholder="Ingrese la base menor"></input>
    <input type="number" name="txtaltura" placeholder="Ingrese la altura"></input>
    <input type="submit" name="btn_calcular" value="Calcular"></input>
    <?php
    if($_POST){
    $bmayor = $_POST["txtbmayor"];
    $bmenor = $_POST["txtbmenor"];
    $altura = $_POST["txtaltura"];
    $area =($bmayor+$bmenor)*$altura/2;
    print"<br>Los datos que ingreso son:<br> B.Mayor : ".$bmayor ."<br> B.Menor : ".$bmenor."<br>Altura :".$altura;
    print"<br>El area segun los datos que ingreso es :".number_format($area,2,',','') ." cm2<br>";
    }
    ?>
 
</form>
<form action="ejercicio10.php">
    <input type="submit" name="btn_borrar" value="Borrar">
</form>
<form action="ejercitario.php">
    <input type="submit" name="btn_volver" value="Volver">
</form>
</body>
</html>
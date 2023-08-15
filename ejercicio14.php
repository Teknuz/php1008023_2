<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>14. Calcular el área y perímetro de un rectángulo.
La fórmula para calcular el PERIMETRO = 2 * h + 2 * b.
La fórmula para calcular el AREA: A = b * h</h1>
<form action="ejercicio14.php" method="POST">
    <input type="number" inputmode="decimal" name="txtbase" placeholder="Ingrese la base"></input>
    <input type="number" inputmode="decimal" name="txtaltura" placeholder="Ingrese la altura"></input>
    <input type="submit" name="btn_calcular" value="Calcular"></input>
  

   
    <?php
    if($_POST){
    $base = $_POST["txtbase"];
    $altura = $_POST["txtaltura"];

    $area=($base*$altura);
    $perimetro=(2*$altura + 2*$base);
  
    print"<br>El area segun los datos ingresados es :".number_format($area,2,',','') ." cm2<br>";

    print"<br>Los datos que ingreso son:<br> Base : ".$base."<br> Altura : ".$altura."<br>";
    print"<br>El perimetro segun los datos que ingreso es:".number_format($perimetro,2,',','') ." cm<br>";
    
}
    ?>
 
</form>
<form action="ejercicio14.php">
    <input type="submit" name="btn_borrar" value="Borrar">
</form>
<form action="ejercitario.php">
    <input type="submit" name="btn_volver" value="Volver">
</form>
    
</body>
</html>
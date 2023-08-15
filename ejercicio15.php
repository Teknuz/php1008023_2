<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>15. Calcular el área y perímetro de un cuadrado.
La fórmula para calcular el PERIMETRO = lado * 4.
La fórmula para calcular el AREA: A = lado2</h1>
<form action="ejercicio15.php" method="POST">
    <input type="number" inputmode="decimal" name="txtlado" placeholder="Ingrese el lado"></input>
    <input type="submit" name="btn_calcular" value="Calcular"></input>
  

   
    <?php
    if($_POST){
    $lado = $_POST["txtlado"];
    $area=(pow($lado,2));
    $perimetro=($lado * 4);
  
    print"<br>El area segun los datos ingresados es :".number_format($area,2,',','') ." cm2";
    print"<br>El perimetro segun los datos que ingreso es:".number_format($perimetro,2,',','') ." cm<br>";
    print"<br>El dato que ingreso es: Lado: ".$lado;
}
    ?>
 
</form>
<form action="ejercicio15.php">
    <input type="submit" name="btn_borrar" value="Borrar">
</form>
<form action="ejercitario.php">
    <input type="submit" name="btn_volver" value="Volver">
</form>
</body>
</html>
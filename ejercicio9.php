<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Escribir un programa que calcule el área y perímetro de un triángulo equilátero.</h1>
    <h2>Para calcular el perimetro y luego el area</h2>
    <form action="ejercicio9.php" method="POST">
    <input type="number" inputmode="decimal" name="txtlado" placeholder="Ingrese el lado"></input>
    <input type="submit" name="btn_calcular" value="Calcular"></input>
  

   
    <?php
    if($_POST){
    $base = $_POST["txtbase"];
    $altura = $_POST["txtaltura"];
  
    $lado= $_POST["txtlado"];
    $lado2=pow($lado,2);
    $raiz3=sqrt(3);
    $area=($lado2 * $raiz3) /4;
    $perimetro=($lado*3);
  
    print"<br>El area segun el lado que ingreso es :".number_format($area,2,',','') ." cm2<br>";

    print"<br>Los datos que ingreso son:<br> Lado : ".$lado."<br>";
    print"<br>El perimetro segun el lado que ingreso es:".number_format($perimetro,2,',','') ." cm<br>";
    
}
    ?>
 
</form>
<form action="ejercicio9.php">
    <input type="submit" name="btn_borrar" value="Borrar">
</form>
<form action="ejercitario.php">
    <input type="submit" name="btn_volver" value="Volver">
</form>
</body>
</html>
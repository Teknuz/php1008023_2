<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Imprimir el promedio de cinco números ingresados por teclado</h1>
    <form action="ejercicio18.php" method="POST">
    <input type="number" name="n1" placeholder="Ingrese un numero"></input>
    <input type="number" name="n2" placeholder="Ingrese un numero"></input>
    <input type="number" name="n3" placeholder="Ingrese un numero"></input>
    <input type="number" name="n4" placeholder="Ingrese un numero"></input>
    <input type="number" name="n5" placeholder="Ingrese un numero"></input>
    <input type="submit" name="btn_calcular" value="Calcular"></input>
    <?php
    if($_POST){
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $n3 = $_POST["n3"];
    $n4 = $_POST["n4"];
    $n5 = $_POST["n5"];
 $promedio=($n1+$n2+$n3+$n4+$n5)/5;
    print"<br>Los numeros que ingreso son: ".$n1." ".$n2." ".$n3." ".$n4." ".$n5." ";
    print"<br>El promedio de los numeros ingresados es :".number_format($promedio,2,',','') ;
} 
    ?>
 
</form>
<form action="ejercicio18.php">
    <input type="submit" name="btn_borrar" value="Borrar">
</form>
<form action="ejercitario.php">
    <input type="submit" name="btn_volver" value="Volver">
</form>
</body>
</html>
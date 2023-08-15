<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Imprimir la raíz cuadrada y la cuarta potencia de un número que se ingresa por teclado</h1>
    <form action="ejercicio17.php" method="POST">
    <input type="number" name="txtnumero" placeholder="Ingrese un numero"></input>
    <input type="submit" name="btn_calcular" value="Calcular"></input>
    <?php
    if($_POST){
    $numero = $_POST["txtnumero"];
    $npotencia4=pow($numero,4);
    $nraiz=sqrt($numero);
  
    print"<br>El dato que ingreso es:<br> Numero : ".$numero ;
    print"<br>La raiz del numero que ingreso es :".number_format($nraiz,2,',','') ;
    print"<br>El numero elevado a la 4ta potecnia que ingreso es : ".($npotencia4) ." <br>";
}
    
    ?>
 
</form>
<form action="ejercicio17.php">
    <input type="submit" name="btn_borrar" value="Borrar">
</form>
<form action="ejercitario.php">
    <input type="submit" name="btn_volver" value="Volver">
</form>
</body>
</html>
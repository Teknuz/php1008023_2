
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
$frase="El área de un cuadrado es 5,76 cm2. Calcular el perímetro del cuadrado.";
echo "$frase";
$area=5.76;
$perimetro= $area * 4;
$frase2=("El perimetro del cuadrado es: $perimetro cm2");
echo "<br>$frase2";

?>

<form action="ejercitario.php">
    <input type="submit" name="btn_volver" value="Volver">
</form>

</body>
</html>
<?php

$numero =5;
	echo "Esto es una variable numero : $numero <br>";

$palabra = "palabra";
	echo "Esto es una variable texto: $palabra<br>";

$boleana = true;
	echo"Esto es una variable booleana : $boleana <br>";

$colores = array("rojo","amarillo");
	echo "Esto es una variable arreglo: $colores[1] <br>";

$verduras = array("verdura1"=>"lechuga","verdura2"=>"cebolla");
	echo "Esto es una variable arreglo con propiedades : $verduras[verdura1] <br>";

$frutas=(object)["fruta1"=>"pera","fruta2"=>"manzana"];
	echo "Esto es una variable objeto $frutas->fruta1<br>";
var_dump($frutas);

$nombre="Jose Andres";
$apellido="Gomez Arrua";
$profesion="y mi profesion es la barberia";

echo ("Mi nombre es:" .$nombre	."y mi apellido es :.$apellido<br>");
?>
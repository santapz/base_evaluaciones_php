<!doctype html>
<html>
<head>
	<title>Ejemplo Array</title>
	<meta charset="utf-8"/>
</head>
<body><?php
$tabla = array ("Lagartija", "Ara�a", "Perro", "Gato", "Rat�n");

//aumentamos el tama�o del array
array_push($tabla, "Gorri�n", "Paloma", "Oso");

foreach ($tabla as $actual)
	echo $actual . "<br>";
?></body>
</html>
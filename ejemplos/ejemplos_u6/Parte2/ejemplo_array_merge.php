<!doctype html>
<html>
<head>
	<title>Ejemplo Array</title>
	<meta charset="utf-8"/>
</head>
<body><?php
$tabla = array ("Lagartija", "Ara�a", "Perro", "Gato", "Rat�n");
$tabla2 = array ("12","34","45","52","12");
$tabla3 = array ("Sauce","Pino","Naranjo","Chopo","Perro","34");

//aumentamos el tama�o del array
$resultado = array_merge($tabla, $tabla2, $tabla3);

foreach ($resultado as $actual)
	echo $actual . "<br/>";
?></body>
</html>
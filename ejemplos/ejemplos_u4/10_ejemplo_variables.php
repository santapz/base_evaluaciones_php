<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo variables</title>
</head>
<body>

<?php

/* Caso 1 */
$Cadena = "Hola Mundo"; //Asignaci�n de una variable tipo string 

/* Caso 2 */
echo $Cadena."<br/>"; //Muestra por pantalla el valor de $Cadena 

/* Caso 3 */
$NumeroUno = 1; //Asignaci�n de una variable de tipo int.

/* Caso 4 */
$NumeroDos = "2"; //Asignaci�n de una variable tipo string.

/* Caso 5 */
echo $NumeroUno + $NumeroDos."<br/>"; //Muestra por pantalla '3', no importa el tipo de dato, intenta hacer la operaci�n igualmente.

/* Caso 6 */
echo $NumeroDos + $Cadena; //Muestra por pantalla '2', es imposible hacer la suma.

?>
</body>
</html>
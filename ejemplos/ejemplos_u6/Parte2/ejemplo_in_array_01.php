<!doctype html>
<html>
<head>
	<title>Ejemplo Array</title>
	<meta charset="utf-8"/>
</head>
<body>

<?php

// inicializaci�n del vector

$dias=array("domingo","lunes","martes","mi�rcoles","jueves","viernes","s�bado");
$dias_descanso=array("domingo","s�bado");


$d = "martes";
echo "<h2>"."vector de d�as"."</h2>";
while (list($i,$valor)=each($dias))
{
	  echo $valor. " ";
}
echo "<br/>";
echo "<br/>";
if (in_array($d,$dias))
echo "$d existe en el vector dias";
else
echo "$d no existe en el vector dias";

echo "<br/>";
echo "<br/>";
if (in_array($d,$dias_descanso))
echo "$d existe en el vector dias";
else
echo "$d no existe en el vector dias_descanso";
?>

</body>

</html>
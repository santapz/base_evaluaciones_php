<!doctype html>
<html>
<head>
  <title>Ejemplo Array</title>
  <meta charset="utf-8"/>
</head>
<body>

<?php
 
 // inicializaci�n del vector

  $dia[0] = "domingo";
  $dia[1] = "lunes";
  $dia[2] = "martes";
  $dia[3] = "mi�rcoles";
  $dia[4] = "jueves";
  $dia[5] = "viernes";
  $dia[6] = "s�bado";
 
 // impresi�n del vector

  for($i=0; $i<7; $i++)
   
{
    echo ($dia[$i] . "<br/>") ;
   }

 ?>
</body>
</html>

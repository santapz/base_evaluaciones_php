<!doctype html>
<html>
<head>
  <title>Ejemplo Array</title>
  <meta charset="utf-8"/>
</head>
<body>
<?php
  // inicializaci�n del vector
     $nombre[100] = "Javier";
     $nombre[200] = "Cintia";
     $nombre[150] = "Ricardo";
     $nombre[350] = "Ra�l";
     $nombre[120] = "Guillermo";
	 
  // impresi�n del vector
  reset($nombre);
  echo "<h2>"."vector de nombres"."</h2>";
  while (list($i,$valor)=each($nombre))
   {
     echo "legajo: " . $i . " - ";
     echo "nombre: " . $valor;
     echo "<br/>";
    }
 ?>
</body>
</html>

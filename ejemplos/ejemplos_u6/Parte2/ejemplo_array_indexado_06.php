<!doctype html>
<html>
<head>
  <title>Ejemplo Array</title>
  <meta charset="utf-8"/>
</head>
<body>
<?php
  // inicializaci�n del vector
     $nombre[10] = "marcelo";
     $nombre[20] = "alicia";
     $nombre[15] = "alejandra";
     $nombre[35] = "mario";
     $nombre[12] = "alberto";
  // impresi�n del vector
  reset($nombre); 
  echo ("<h2>" . "vector de nombres"."</h2>");
  do
    {
     // buscar posici�n especificada
     $i = key($nombre);
     // buscar contenido en esa posici�n
     $valor = current($nombre);
     echo ("posici�n: " . $i . " - ");
     echo ("contenido: " . $valor);
     echo ("<br/>");
    }
    while (next($nombre));
 ?>
</body>
</html>

<!doctype html>
<html>
<head>
  <title>Ejemplo Array</title>
  <meta charset="utf-8"/>
</head>
<body><?php

  // inicializacion del vector

  $nombres = array("Mar�a", "Luis", "Alberto", "Cesar", "Adriana");
  
// ordenamiento del vector

  sort($nombres);
  echo "<h2>"."vector de nombres ordenados"."</h2>";

  while (list($i,$valor)=each($nombres))
   {
     echo "posici�n: " . $i . " - ";
     echo "contenido: " . $valor;
     echo "<br/>";
    }
 ?>
</body>
</html>

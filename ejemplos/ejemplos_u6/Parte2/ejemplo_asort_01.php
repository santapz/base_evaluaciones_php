<!doctype html>
<html>
<head>
  <title>Ejemplo Array</title>
  <meta charset="utf-8"/>
</head>
<body>
<?php
  // inicializacion del vector
  $ciudad = array("par" => "Par�s",
                            "lon" => "Londres",
                            "ate" => "Atenas",
                            "ber" => "Berl�n",
                            "lim" => "Lima");
  asort($ciudad);
  echo "<h2>"."Vector de ciudades ordenado"."</h2>";
  while (list($i,$valor)=each($ciudad))
   {
     echo "posici�n: " . $i . " - ";
     echo "contenido: " . $valor;
     echo "<br/>";
    }
 ?>
</body>
</html>

<!doctype html>
<html>
<head>
<title>Ejemplo con while</title>
<meta charset="utf-8"/>
</head>
<body><?php
$numero = 15;
$pares = 0;
$impares = 0;

while ( $numero > 0) {
if ( $numero % 2 == 0 ) {
echo "El $numero es un n�mero PAR <br> ";
$pares++;
}
else {
echo "El $numero es un n�mero IMPAR <br>";
$impares++;
}

$numero--;
}

echo "En total he contado <strong>$pares n�meros pares</strong> y <strong>$impares impares</strong>";
?>
</body>
</html>
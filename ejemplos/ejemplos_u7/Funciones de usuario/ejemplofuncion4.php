<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Funciones</title>
</head>

<body><?php
function agregar(&$string) {// Paso por referencia del par�metro. Los cambios tambi�n se ver�n reflejados fuera de la funci�n.

$string .= ' y algo m�s.';
}

$str = 'Esto es una cadena, ';

agregar($str);//llamo a la funci�n agregar y paso como par�metro $str

echo $str; // Escribe 'Esto es una cadena, y algo m�s.'
?>
</body>
</html>
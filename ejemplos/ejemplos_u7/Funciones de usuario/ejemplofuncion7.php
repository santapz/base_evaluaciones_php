<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Funciones</title>
</head>

<body><?php
function cafe($temp,$tipo="con leche") {
return "Haciendo caf� $tipo $temp.<br/>";
}
echo cafe("caliente"); //Escribe: 'Haciendo caf� con leche caliente'
?>
</body>
</html>
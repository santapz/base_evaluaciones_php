<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Funciones</title>
</head>

<body><?php
function cafe($tipo="cappucino") {/*El valor por defecto 
del par�metro $tipo es cappucino*/
return "Haciendo una taza de $tipo.<br/>";
}
echo cafe();

/*Llamada a la funci�n sin par�metro. 
El par�metro tomar� su valor por defecto: cappucino*/ 
echo cafe("espresso");//El par�metro tomar� el valor espresso
?>
</body>
</html>
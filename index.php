<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="estilos.css" rel="stylesheet"/>
</head>

<body>
<section id="contenedor">
	<header>
    	<nav id="botonera_principal">
        	<ul>
            	<li><a href="index.php">Home</a></li><li><a href="catalogo.php">Catálogo</a></li><li><a href="noticias.php">Noticias</a></li><li><a href="clientes.php">Clientes</a></li><li><a href="contacto.php">Contáctenos</a></li>
            </ul>
        </nav>
        <div id="marca">
        	<h1>Programador Web con PHP y MySQL<br/>Nivel Intermedio</h1>
        </div>
    </header>
    <section id="contenido">
    <h2>Unidad IV - Introducción a PHP</h2>
    <div id="uni4_1">
        <h4> <?php echo 'Primera frase: titulo';?> </h4>
        <p> <?php echo 'Segunda frase: parrafo';?> </p>
        <p> <?php echo 'Tercer frase: otro parrafo';?> </p>
    </div>
    <div id="uni4_2">
        <ul>
            <li> <?php echo 'EVALUACIÓN INTEGRADORA';?> </li>
            <li> <?php echo 'PHP';?> </li>
            <li> <?php echo 'MySQL';?> </li>    
        </ul>
    </div>
    <div id="uni4_3">
        <?php
            $entero = 3;
            $cadena = 'palabra';
            $bool = TRUE;

            echo $entero."<br/>";
            echo $cadena."<br/>";
            echo $bool;
        ?>
    </div>
    <div id="uni4_4">
        <?php
            $n1 = 2;
            $n2 = 5;
            $n3 = -1;
            $operacion = $n1*$n2+$n3;

            echo "<p>Variables:</p>";
            echo "<p>".$n1."<br/>".$n2."<br/>".$n3."</p>";
            echo "<p>Operacion:</p>";
            echo "<p>".$n1."*".$n2.$n3."</p>";
            echo "<p>Resultado:</p>";
            echo $operacion;
        ?>
    </div>
    </section>

<footer>
<p>Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></p></footer>
</section>
</body>
</html>


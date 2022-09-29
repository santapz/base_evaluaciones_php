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
        	<h1>Programador web con PHP y MySQL</h1>
        </div>
    </header>
    <section id="contenido">
        <h2>Noticias - Unidad VI</h2>

        <?php 
            $noticias = array(
                array('img'=>'not1.jpg','titulo'=>'Escalofriante predicción: la Inteligencia artificial responde quién dominará el mundo el próximo siglo', 'parrafo'=>'Así las cosas, el portal GameStar se animó a preguntarle a la IA de Midjourney el futuro de la geopolítica mundial del próximo siglo. Sin embargo, los analistas no esperaban encontrarse con una solución sacada de las mejores películas post apocalípticas.'),
                array('img'=>'not2.jpg','titulo'=>'WhatsApp hoy: cómo subir notas de voz a tu estado', 'parrafo'=>'En las últimas horas se conoció una nueva herramienta que WhatsApp tiene en desarrollo para la plataforma. El servicio de mensajería de Meta planea sumar otro agregado a sus estados, una función muy utilizada. En el futuro, los usuarios podrán incluir una nota de voz en este apartado de la misma manera que lo hace en los chats.'),
                array('img'=>'not3.jpg','titulo'=>'Nvidia presentó sus dos nuevas placas de video más potentes: las GeForce RTX 4080 y RTX 4090', 'parrafo'=>'El líder indiscutido a la hora de placas de video para gaming es Nvidia. Con otros competidores tratando de alcanzarlos, y con la llegada de nuevos jugadores en el plano de placas gamer como Intel, GeForce refuerza su poderío con una nueva línea de productos que se hizo esperar, la gama 4000, que presentó hace unos días.'),
                array('img'=>'not4.jpg','titulo'=>'Intel le dice adiós a los Pentium y a los Celeron después de 30 años', 'parrafo'=>'Pentium II, nacida en 1997, fue una revolución también, aunque no tan grande cómo la primera. Pero los Pentium II tenían un problema: eran muy caros. Además de esto, paralelamente AMD lanzaba un procesador que le hacía cierta competencia con un precio relativamente menor, el AMD K6-2. Como respuesta en 1998 nació el Celeron, una versión «recortada» del Pentium II. En ese momento eran exactamente el mismo procesador, pero con la diferencia que el hermano barato tenía muchísima menos memoria caché y venía sin carcasa.')
            );

            for ($i=0; $i < count($noticias); $i++) { 
            ?>
                <div class="noticias"> 
                        <img src="imagenes/<?php echo $noticias[$i]['img']; ?>">
                        <h4><?php echo $noticias[$i]['titulo']; ?></h4>
                        <p><?php echo $noticias[$i]['parrafo']; ?></p> 
                </div>

        <?php }
        ?>  

        <!-- Para arreglar el float -->
        <div id="clear">
            <h5></h5>
        </div>

    </section>

<footer>
<p>Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></p></footer>
</section>
</body>
</html>
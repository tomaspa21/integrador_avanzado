<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<nav id="botonera_principal">
                <ul>
                    <li> <a href="index.php?ruta=inicio">Inicio</a></li>
                    <li> <a href="index.php?ruta=plantel">Plantel</a></li>
                    <li> <a href="index.php?ruta=promedios">Promedios</a></li>
                    <li> <a href="index.php?ruta=historia">Historia</a></li>
                    <li> <a href="index.php?ruta=salir"> Salir</a></li>
                </ul>
            </nav>
    <h1 class="tituloPagina">Club Social y Deportivo Hispano Americano</h1>
<section>
    <h3>  Alberdi 123 - Rio Gallegos Santa Cruz </h3>
</section>
<section>
<?php
$img= './img/hispano.jpeg';
?>
<img src="<?php echo $img ?>"> 
</section>
</body>
</html>
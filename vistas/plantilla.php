<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Hispano Americano</title>
</head>
<body>
    <div id="contenedor">
        <header>
        <div id="marca">
            <h1>Hispano Americano</h1>
        </div>
            <nav id="botonera_principal">
                <ul>
                    <li> <a href="index.php?ruta=inicio">Inicio</a></li>
                    <li> <a href="index.php?ruta=plantel">Plantel</a></li>
                    <li> <a href="index.php?ruta=promedios">Promedios</a></li>
                    <li> <a href="index.php?ruta=historia">Historia</a></li>
                    <li> <a href="index.php?ruta=salir"> Salir</a></li>
                </ul>
            </nav>           
        </header>
        <section id="contenido">
            <?php 
            if (isset($_GET["ruta"])){
                if(
                    $_GET["ruta"]== "inicio" ||
                    $_GET["ruta"] == "plantel" ||
                    $_GET["ruta"] == "promedios" ||
                    $_GET["ruta"] == "historia" ||
                    $_GET["ruta"] == "salir"
                ){
                    include "paginas/" . $_GET["ruta"] . ".php";
                } else{
                    include "paginas/error404.php";
                } 
            }   else{
                include "paginas/inicio.php";
            }
            ?>
        </section>
    </div>
</body>
</html>
!DOCTYPE html>
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
            <nav id="botonera_principal">
                <ul>
                    <li> <a href="index.php?ruta=inicio">Inicio</a></li>
                    <li> <a href="index.php?ruta=plantel">Plantel</a></li>
                    <li> <a href="index.php?ruta=promedios">Promedios</a></li>
                    <li> <a href="index.php?ruta=historia">Historia</a></li>
                    <li> <a href="index.php?ruta=salir"> Salir</a></li>
                </ul>
            </nav>
            <div id="marca">
                <h1>Hispano Americano</h1>
            </div>
        </header>

<section>
    <h1> Club Social y Deportivo Hipano Americano </h1>
     <?php    
     echo "<h2> Plantel de Basquet Profesional Temporada 2022 </h2>";
     $nombre_1= "Lucas Reyes";
     $localidad_1="Guaymallen, Mendoza";
     $camiseta_1=10;
     $puntos_1=12;
     $nombre_2= "Ezequiel Paz";
     $localidad_2="Oliva, Cordoba";
     $camiseta_2=8;
     $puntos_2=25;
     $nombre_3= "Johu Castillo";
     $localidad_3="Ecuador";
     $camiseta_3=5;
     $puntos_3=11;
     $nombre_4= "Juan Fernandez Chavez";
     $localidad_4="Venado Tuerto, Santa Fe";
     $camiseta_4=13;
     $puntos_4=7;
     $nombre_5= "Gonzalo Romero";
     $localidad_5="Catamarca";
     $camiseta_5=12;
     $puntos_5=22;
     ?>
</section>
<div>
<ul> 
<section>
<h2> <?php echo $nombre_1 ?> </h2>
<ul> 
    <li> Procedencia: <?php echo $localidad_1; ?> </li>
    <li> Camiseta: <?php echo $camiseta_1; ?> </li>
    <li> Puntos: <?php echo $puntos_1; ?> </li>    
</section>
</ul>
</div>
<div>
<ul>
<section>
<h2> <?php echo $nombre_2; ?> </h2>
<ul> 
    <li> Procedencia: <?php echo $localidad_2; ?> </li>
    <li> Camiseta: <?php echo $camiseta_2; ?> </li>
    <li> Puntos: <?php echo $puntos_2; ?> </li>
</section>
</ul>
</div>
<div>
<ul>
<section>
<h2> <?php echo $nombre_3; ?> </h2>
<ul> 
    <li> Procedencia: <?php echo $localidad_3; ?> </li>
    <li> Camiseta: <?php echo $camiseta_3; ?> </li>
    <li> Puntos: <?php echo $puntos_3; ?> </li>
    </section>
</ul>
</div>
<div>
<ul>
<section>    
<h2> <?php echo $nombre_4; ?> </h2>
<ul> 
    <li> Procedencia: <?php echo $localidad_4; ?> </li>
    <li> Camiseta: <?php echo $camiseta_4; ?> </li>
    <li> Puntos: <?php echo $puntos_4; ?> </li>
</section>   
</ul>
</div>
<ul>
<section>    
<h2> <?php echo $nombre_5; ?> </h2>
<ul> 
    <li> Procedencia: <?php echo $localidad_5; ?> </li>
    <li> Camiseta: <?php echo $camiseta_5; ?> </li>
    <li> Puntos: <?php echo $puntos_5; ?> </li>
    </section>
</ul>
</div>
</body>
</html>
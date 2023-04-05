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
<?php
$puntos_total = $puntos_1 + $puntos_2 + $puntos_3 + $puntos_4 + $puntos_5;
$puntos_promedio = ($puntos_1 + $puntos_2 + $puntos_3 + $puntos_4 + $puntos_5) / 5;
?>
<h3> Puntos-Promedio </h3>
    <ul> 
        <li> Puntos Total: <?php echo $puntos_total ?> </li>
        <li> Promedio de puntos: <?php echo $puntos_promedio ?> </li>
    </ul>
<h3> Cancha-Rival </h3>   
<?php
define('ESTADIOS' , array('Juan Bautista Rocha' , 'Tito Wilson' , 'Boxing Club' )) ;
echo "<br>"; 
echo ESTADIOS [0]; 
const FECHA = array ('Villa Mitre' , 'Pico F.C' , ' Ciclista de Junin' , 'Deportivo Viedma' ); 
echo "<br>";
echo FECHA [1];
echo "<br>";
?>    
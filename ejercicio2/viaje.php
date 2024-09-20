<?php

/* Enunciado: Diseña un formulario que pida al 
usuario la distancia a recorrer (en kilómetros) 
y la velocidad promedio esperada (en km/h). 
Al enviar el formulario, el programa debe calcular 
y mostrar el tiempo que tomará el viaje en horas. */

$tdistance = $_POST['tdistance'];
$average_speed = $_POST['average_speed'];

$end_time = $tdistance / $average_speed;
echo "Vas a tardar $end_time horas en llegar";
?>
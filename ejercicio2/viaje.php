<?php

/* Enunciado: Diseña un formulario que pida al 
usuario la distancia a recorrer (en kilómetros) 
y la velocidad promedio esperada (en km/h). 
Al enviar el formulario, el programa debe calcular 
y mostrar el tiempo que tomará el viaje en horas. */

//Mi solución
/* $tdistance = $_POST['tdistance'];
$average_speed = $_POST['average_speed'];

$end_time = $tdistance / $average_speed;
echo "Vas a tardar $end_time horas en llegar"; */

//otra solucion 
/*

*/
if (isset(($tdistance)) && isset($average_speed)){
    //verificamos si es un número
    if (is_numeric($tdistance) && is_numeric($average_speed)){
        $end_time = $tdistance / $average_speed;
        echo "Vas a tardar $end_time horas en llegar";
    }else{
        echo "No es un número";
    }
}
?>
<br>
<a href="viaje.html">Atrás</a>
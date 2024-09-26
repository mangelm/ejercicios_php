<?php

/* Enunciado: Crea un formulario en PHP que solicite al usuario su 
nombre y apellido por separado. Al enviar el formulario, el 
programa debe mostrar un mensaje que diga "¡Hola [nombre] [apellido]!". */

$name = $_POST['name'];
$surname = $_POST['surname'];

echo "¡Hola $name $surname!";

//otra solucion 
//echo "Hola " . htmlspecialchars( $nombre) . " " . htmlspecialchars($apellido);
?>


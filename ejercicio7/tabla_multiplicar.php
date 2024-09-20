<?php

/* 
 Crea un formulario que solicite al usuario un número entre 1 y 10.
  Al enviar el formulario, el programa debe mostrar la tabla de 
  multiplicar de ese número. */

$n = $_POST['n'];

for ($i=0; $i <=10 ; $i++) { 
    $resultado = $n * $i;

    echo "$n x $i = $resultado <br>";
}



?>


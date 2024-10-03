<?php

/* 
Enunciado: Diseña un formulario que pida al usuario un número N. 
Al enviar el formulario, el programa debe calcular y mostrar la 
suma de todos los números desde 1 hasta N. */

/* $n = $_POST['n'];

if ($n >= 1) {
    $suma = 0;
    for ($i=0; $i <= $n ; $i++) { 
        $suma += $i;
    }

    echo "El resultado de la suma de los números hasta $n es $suma";
}else{
    echo "El numero no puede ser menor a 1 o 0";
}; */
// Otra forma
if (isset($_POST['n'])) {
    $n = $_POST['n'];
    $resultado = 0;
    
    for ($i = 1; $i <= $n; $i++) { 
        $resultado += $i;
    }

    echo "<h2>$resultado</h2>";
}
?>


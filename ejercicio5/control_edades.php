<?php

/* 
Enunciado: Crea un formulario que solicite la edad del usuario. 
Al enviar el formulario, el programa debe mostrar:

"Infante" si la edad es menor de 12 años.
"Adolescente" si tiene entre 12 y 17 años.
"Adulto" si está entre 18 y 60 años.
"Anciano" si es mayor de 60. */

$old = $_POST['old'];

if ($old < 12) {
    echo "Infante";
} elseif ($old >= 12 && $old <= 17) {
    echo "Adolescente";
}
elseif ($old >= 18 || $old <= 60) {
    echo "Adulto";
}  
else {
    echo "Anciano";
}


?>


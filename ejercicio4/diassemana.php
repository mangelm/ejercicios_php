<?php

/* 
Diseña un formulario que pida al usuario un número del 1 al 7. 
Al enviar el formulario, el programa debe retornar el día de 
la semana correspondiente (ejemplo: 1 = Lunes, 2 = Martes, etc.). 
Si el número está fuera de ese rango, muestra un mensaje de error. */

//lista con su clave y valor asociados segun el dia de la semana
// $days = [
//     1 => "Lunes",
//     2 => "Martes",
//     3 => "Miércoles",
//     4 => "Jueves",
//     5 => "Viernes",
//     6 => "Sábado",
//     7 => "Domingo"
// ];

// si la clave dentro del array existe entonces la busca sino, te da el error.
// if (array_key_exists($day,$days)){
//     echo "Has puesto el número $day, eso significa que el dia es: $days[$day]";
// }
// else{
//     echo "Ese dia no esta en el rango, debe estar entre 1 y 7";
// };
$day = $_POST['day'];
//Otro metodo
if (isset($day)) {
    switch ($day) {
        case '1':
            echo "Lunes";
            break;
        case '2':
            echo "Martes";
            break;
        case '3':
            echo "Miércoles";
            break;
        case '4':
            echo "Jueves";
            break;
        case '5':
            echo "Viernes";
            break;
        case '6':
            echo "Sábado";
            break;
        case '7':
            echo "Domingo";
            break;    
    }
}



?>

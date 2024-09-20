<?php

/*  Crea un formulario en PHP que solicite 
al usuario tres números. Al enviar el formulario, 
el programa debe indicar cuál de los tres números es el 
mayor. */

$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$number3 = $_POST['number3'];

if ($number1 >= $number2 && $number1 >= $number3) {
    echo "El número $number1 es el mas grande";
}elseif ($number2 >= $number1 && $number2 >= $number3) {
    echo "El número $number2 es el mas grande";
}else{
    echo "El número $number3 es el mas grande";
}
?>


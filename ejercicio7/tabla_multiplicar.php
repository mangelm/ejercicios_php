<?php

/* 
Crea un formulario que solicite al usuario un número entre 1 y 10.
  Al enviar el formulario, el programa debe mostrar la tabla de 
  multiplicar de ese número. */

// $n = $_POST['n'];

// for ($i=0; $i <=10 ; $i++) { 
//     $resultado = $n * $i;

//     echo "$n x $i = $resultado <br>";
// }


//otra forma
if (isset($_POST['n'])) {
  $n = $_POST['n'];

  // Verificar si es un número entre 1 y 10
  if (is_numeric($n)) {
      echo "<h3>Tabla de multiplicar del $n</h3>";
      echo "<table border='1' cellpadding='5'>";
      for ($i = 1; $i <= 10; $i++) {
          $mult = $n * $i;
          echo "<tr>";
          echo "<td>$n x $i = $mult</td>";
          echo "</tr>";
      }
      echo "</table>";
  }
}

?>


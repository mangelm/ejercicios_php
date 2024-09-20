<?php
/* 
 Crea un formulario que permita al usuario ingresar varios 
 productos en una lista de compras. Al enviar el formulario, 
 el programa debe mostrar la lista completa de productos ingresados, 
 utilizando un array para almacenarlos. Permite que el usuario agregue 
 productos hasta que decida finalizar. */

session_start();
// es importante verificar que existe para que no pete
if (isset($_POST['product'])){
  // Si no tiene productos creamos la lista, pero vacia
  if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [];
  }

  //Añadimos el nuevo producto al array
  $product = trim($_POST['product']);
  $_SESSION['products'][] = $product;
}

//redidijimos a la pagina de inicio para que no entre en este php
header("Location: lista_compra_original.php");
exit();


?>


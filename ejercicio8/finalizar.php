<?php
session_start();

// Verifica si hay productos en la sesión
if (isset($_SESSION['products'])) {
    echo "<h1>Lista de Compras Finalizada</h1>";
    echo "<ul>";
    foreach ($_SESSION['products'] as $product) {
        echo "<li>" . $product . "</li>";
    }
    echo "</ul>";
    
    // Limpiar la sesión
    unset($_SESSION['products']);
} else {
    echo "<h1>No hay productos en la lista de compras.</h1>";
}

?>

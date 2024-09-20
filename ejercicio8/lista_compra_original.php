<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widthz=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Compras</h1>
    <form action="lista_compra.php" method="POST">
        <label for="product">Introduce un producto:</label>
        <input type="text" name="product" id="product">
        <input type="submit" value="Añadir Producto">
    </form>
    
    <h2>Productos Ingresados:</h2>
    <!-- Lo voy a guardar en la seccion para poder llevar los datos 
    de un archivo a otro -->
    <ul>
        <?php
        session_start();
        //comprobamos si existe y si no esta vacio
        if (isset($_SESSION['products']) && !empty($_SESSION['products'])) {
            foreach ($_SESSION['products'] as $new_product) {
                echo "<li>" . $new_product . "</li>";
            }
        } else {
            echo "<li>No hay productos en la lista.</li>";
        }
        
        ?>
    </ul>

    <!-- el formulario para la parte de finalizar -->
     <form action="finalizar.php">
        <input type="submit" value="Finalizar Compra">
     </form>
</body>
</html>
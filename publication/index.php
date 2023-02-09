<?php
session_start();
require("../databases/conexion.php");
$query = "SELECT * FROM publicacion";
$libro = mysqli_query($conexion, $query);

?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styles.css">
  <title>Tienda en línea</title>
</head>
<body>
  <header>
    <nav>
    <img class="logo" src="../img/logo.png">
    <h1>BookSwap</h1>
      <ul>
        <li><a href="../index.php">Inicio</a></li>
        <li><?php if (isset($_SESSION["USER"])) {
          ?>
          <?php
            echo $_SESSION["USER"];
            ?>
            <li><a href="../session/cerrar_sesion.php">Cerrar sesion</a></li>
            <?php }?>
      </li>
      </ul>
    </nav>
  </header>
  <main>
  
    <h1>Subir publicacion</h1>
    <section class="register-form">
    <form action="add_pub.php" method="post">
    <label for="book-id">ID del libro:</label>
    <input type="text" name="book-id">
    <br><br>   
    <label for="book-name">Nombre del libro:</label>
    <input type="text" name="book-name">
    <br><br>        
    <label for="book-price">Precio del libro:</label>
    <input type="number" name="book-price">
    <br><br>        
    <label for="book-description">Descripción del libro:</label>
    <input type="text" name="descripcion">
    <br>
    <button type="submit">Enviar</button>
  </form>
    </section>
</main>
  <footer>
    <p>&copy; 2023 Tienda en línea</p>
  </footer>
</body>
</html>
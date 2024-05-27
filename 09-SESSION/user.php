<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>

<body>
    <?php if (isset($_SESSION["UserRegister"])) : ?>

        <h1>Bienvenido <?php echo $_SESSION["UserRegister"]; ?> </h1>
        <a href="./cerrar.php">Cerrar Sesion</a>
        <a href="./index.php">Home</a>

        <?php "else" ?>  

        <h1>No has iniciado sesion</h1>
        <a href="./index.php">Iniciar Sesion</a>


    <?php endif  ?>

</body>

</html>
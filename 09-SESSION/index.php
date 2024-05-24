<?php

/* session_start();

$_SESSION["nombre"]="juan";
$_SESSION["pais"]="Colombia"; */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>

    <h1>Pagina de Inicio</h1>



    <form action="./registro.php" method="POST">
        <label for="Usuario">Usuario</label>
        <input type="text" placeholder="Usuario" name="Usuario">
        <br>
        <label for="Contraseña">Contraseña</label>
        <input type="text" placeholder="Contraseña" name="Contraseña">
        <br>
        <button type="submit" value="submit">Registrar</button>
    </form>


    <a href="./user.php">User</a>
    <a href="./cerrar.php">Cerrar</a>


</body>

</html>
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Datos enviados";

    $Usuario = $_POST["Usuario"];
    $Contraseña = $_POST["Contraseña"];

    if (empty($Usuario) or empty($Contraseña)) {
        echo "Por Favor Regístrese";
    } else {

        $_SESSION["userRegister"] = $Usuario;
        $_SESSION["PassRegister"] = $Contraseña; 
        header('Location: index.php');

        try {
            $conexion = new PDO("mysql:host=localhost;dbname=focaapp", "root", "");
            echo "Conexion Ok";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        $statement = $conexion->prepare("INSERT INTO `userapp`(`ID`, `Usuario`, `Contraseña`, `nombre`) VALUES (NULL, :Usuario, :Contraseña, '')");

        $statement->execute(array(':Usuario' => $Usuario, ':Contraseña' => $Contraseña));

        echo "Datos enviados";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>
</head>

<body>

    <h1>Registrate</h1>

    <form action="registro.php" method="POST">
        <label for="Usuario">Usuario</label>
        <input type="text" placeholder="Usuario" name="Usuario">
        <br>
        <label for="Contraseña">Contraseña</label>
        <input type="text" placeholder="Contraseña" name="Contraseña">
        <br>
        <button type="submit" value="submit">Registrase</button>
    </form>

    <?php if (isset($_SESSION["userRegister"])) :  ?>

        <p>Datos registrados ya puede iniciar sesion</p>
        <a href="./index.php">Iniciar Sesion</a>

        <p> <?php echo $_SESSION["userRegister"] . " - " .  $_SESSION["PassRegister"]; ?> </p>
    <?php endif ?>

</body>

</html>
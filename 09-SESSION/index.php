<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Usuario = $_POST["Usuario"];
    $Contraseña = $_POST["Contraseña"];

    $User_Register = isset($_SESSION["userRegister"]) ? $_SESSION["userRegister"] : null;
    $Pass_Register = isset($_SESSION["passRegister"]) ? $_SESSION["passRegister"] : null;

    try {
        $conexion = new PDO("mysql: host=localhost; dbname=focaapp", "root", "");
        echo "Conexion Ok";
    } catch (PDOException $e) {
        echo "Error;" . $e->getMessage();
    }

    $statement = $conexion->prepare("SELECT * FROM `userapp` WHERE usuario");

    $statement->execute(array(':Usuario' => $Usuario, ':Contraseña' => $Contraseña));

    $result = $statement->fetch();
    if ($result) {
        echo `true`;
        $_SESSION["userRegister"] = $Usuario;
        $_SESSION["PassRegister"] = $Contraseña;

        header(`Location: user.php`);
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>

    <h1>Iniciar Sesion</h1>



    <form action="index.php" method="POST">
        <label for="Usuario">Usuario</label>
        <input type="text" placeholder="Usuario" name="Usuario">
        <br>
        <label for="Contraseña">Contraseña</label>
        <input type="text" placeholder="Contraseña" name="Contraseña">
        <br>
        <button type="submit" value="submit">Iniciar Sesion</button>
    </form>


    <a href="./registro.php">Resgistrate</a>


</body>

</html>
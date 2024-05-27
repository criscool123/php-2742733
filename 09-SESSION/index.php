<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Usuario = $_POST["Usuario"];
    $Contraseña = $_POST["Contraseña"];

    $User_Register = isset($_SESSION["userRegister"]) ? $_SESSION ["userRegister"] : null;
    $Pass_Register = isset($_SESSION["passRegister"]) ? $_SESSION ["passRegister"] : null;

    if (empty($Usuario) or empty($Contraseña)) {
        echo "Por Favor Registrece";
    } else {

        echo $Usuario . "-" . $Contraseña;
        if ($Usuario == $User_Register && $Contraseña == $Pass_Register) {
            echo "Listo ya Iniciaste Sesion";
        }

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
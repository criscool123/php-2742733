<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Usuario = $_POST["Usuario"];
    $Contraseña = $_POST["Contraseña"];



    $User_Register = isset($_SESSION["userRegister"]) ? $_SESSION["userRegister"] : null;
    $Pass_Register = isset($_SESSION["passRegister"]) ? $_SESSION["passRegister"] : null;

    try {
        $conexion = new PDO("mysql: host=localhost; dbname=focaapp", 'root', '');
        echo "Conexión OK";
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
    $statement = $conexion->prepare("SELECT * FROM `userapp` WHERE Usuario = :user AND Contraseña = :pass");

    $statement->execute(array(':user' => $Usuario, ':pass' => $Contraseña));

    $result = $statement->fetch();

    if ($result) {
        echo "true";
        $_SESSION["userRegister"] = $Usuario;
        $_SESSION["PassRegister"] = $Contraseña;
        header("Location: user.php");
    } else {
        echo 'false';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css" />

    <style>
        .container {
            background-color: blue;
            height: 32rem;
            margin: 2rem;
            border-radius: 5rem;
        }
    </style>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</head>

<body>


    <div class="container md-4 col-3">
<h1>Iniciar Sesion</h1>



    <form action="index.php" method="POST">
        <label for="Usuario"></label>
        <input type="text" placeholder="Usuario" name="Usuario">
        <br>
        <label for="Contraseña"></label>
        <input type="text" placeholder="Contraseña" name="Contraseña">
        <br>
        <button type="submit" value="submit">Iniciar Sesion</button>
    </form>


    <a href="./registro.php">Registrate</a>
    </div>


    


</body>

</html>
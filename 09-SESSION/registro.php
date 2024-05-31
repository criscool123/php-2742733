<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  echo "Datos enviados";

  $Usuario = $_POST["Usuario"];
  $Contraseña = $_POST["Contraseña"];
  $Contraseña = $_POST["Contraseña"];
  $Nombre = $_POST["Nombre"];

  if (empty($Usuario) or empty($Contraseña) or empty($Nombre)) {
    echo "Por Favor Regístrese";
  } else {

    $_SESSION["userRegister"] = $Usuario;
    $_SESSION["PassRegister"] = $Contraseña;
    $_SESSION["PassRegister"] = $Contraseña;
    $_SESSION["nombreRegister"] = $Nombre;
    header('Location: index.php');

    try {
      $conexion = new PDO("mysql: host=localhost; dbname=focaapp", 'root', '');
      echo "Conexion Ok";
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }

    $statement = $conexion->prepare("INSERT INTO `userapp`(`Usuario`, `Contraseña`) VALUES (NULL, :Usuario, :Contraseña)");

    $statement->execute(array(':Usuario' => $Usuario, ':Contraseña' => $Contraseña));
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>registro</title>
  <style>
    .container {
      background-color: blue;
      height: 32rem;
      margin: 2rem;
      border-radius: 5rem;
    }
  </style>
  <link rel="stylesheet" href="style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</head>

<body>

  <div class="container md-4 col-3">


    <p>Datos registrados ya puede iniciar sesion</p>
    <a href="./index.php">Iniciar Sesion</a>

    <h1>Registrate</h1>

    <form action="registro.php" method="POST">

      <label for="Nombre"></label>
      <input type="text" placeholder="Nombre" name="Nombre">
      <br>

      <label for="Usuario"></label>
      <input type="text" placeholder="Usuario" name="Usuario">
      <br>
      <label for="Contraseña"></label>
      <input type="text" placeholder="Contraseña" name="Contraseña">
      <br>
      <label for="Contraseña"></label>
      <input type="text" placeholder="Confirmar Contraseña" name="Contraseña">
      <br>
      <button type="submit" value="submit">Registrase</button>
    </form>





    <?php if (isset($_SESSION["userRegister"])) :  ?>



      <p> <?php echo $_SESSION["nombreRegister"] . "- " . $_SESSION["userRegister"] . " - " . $_SESSION["PassRegister"]; ?> </p>
    <?php endif ?>






  </div>






</body>

</html>
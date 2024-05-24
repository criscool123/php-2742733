<?php
if($_POST["user"]){

session_start();
$_SESSION["nombre"] = $_POST["usuario"];
$_SESSION["contraseña"] = $_POST["contraseña"];

echo "Puede inciar Sesion";
}

 else { "tiene que completar";
    header("Location: index.php");
}

?>
<?php

require("conexion.php");

if(isset($_GET["id"])){
    $ID = $_GET["id"];

    $statement = $conexion->prepare("DELETE FROM `cursos` WHERE id = $ID");
    $statement->execute();

    $_SESSION["mensaje"] = "Curso eliminado correctamente";
    $_SESSION["color"] = "danger";

    header("Location: user.php");
}

?>
<?php

require("conexion.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Curso Agregado";
    $estudiantes = $_POST["estudiantes"];
    $imagen = $_POST["imagen"];
    $descripcion = $_POST["descripcion"];
    $cursos = $_POST["cursos"];
    $statement = $conexion->prepare("INSERT INTO `cursos`( `imagen`, `curso`, `descripcion`, `estudiantes`)
     VALUES (?,?,?,?)");
    $statement->execute(array($imagen , $cursos, $descripcion, $estudiantes));

    header("Location: user.php");
}

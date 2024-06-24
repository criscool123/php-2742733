<?php

require("conexion.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Curso Agregado";
    $estudiantes = $_POST["estudiantes"];

    $imagen = $_FILES["imagen"]["tmp_name"];
    $nombreImagen = $_FILES["imagen"]["name"];
    $tipoImagen = pathinfo($nombreImagen, PATHINFO_EXTENSION);
    $sizeImagen = $_FILES["imagen"]["size"];
    $directorio = "images/";

    $descripcion = $_POST["descripcion"];
    $cursos = $_POST["cursos"];

    if ($tipoImagen == "jpg" or $tipoImagen == "jpeg" or $tipoImagen == "png") {
        echo "valido";
        $statement = $conexion->prepare("INSERT INTO cursos(imagen, curso, descripcion, estudiantes) VALUES (?, ?, ?, ?)");
        $statement->execute(array('', $cursos, $descripcion, $estudiantes));
        $idRegistro = $conexion->lastInsertId();

        $ruta = $directorio . $idRegistro . "." . $tipoImagen;

        $statement = $conexion->prepare("UPDATE cursos SET imagen = ? WHERE id = ?");
        $statement->execute([$ruta, $idRegistro]);

        if (move_uploaded_file($imagen, $ruta)) {
            $_SESSION["mensaje"] = "curso agregado exitosamente";
            $_SESSION["color"] = "success";

            header("Location: user.php");
        } else {
            $_SESSION["mensaje"] = "El archivo de la imagen no esta admitido";
            $_SESSION["color"] = "danger";

            header("Location: user.php");
        }

        /*  echo "Archivo admitido"; */
    } /* else {
        echo "Archivo no admitido";
    }
 */
    /*     echo "El archivo que subiste se llama: " . $nombreImagen . "<br>";
    echo "Y el formato de tu imagen es: " .  $tipoImagen; */


 /*    
    $statement = $conexion->prepare("INSERT INTO `cursos`( `imagen`, `curso`, `descripcion`, `estudiantes`)
     VALUES (?,?,?,?)");
    $statement->execute(array($imagen, $cursos, $descripcion, $estudiantes));

    $_SESSION["mensaje"] = "Tarea agregar exitosamente";
    $_SESSION["color"] = "success"; */

    header("Location: user.php"); 
}

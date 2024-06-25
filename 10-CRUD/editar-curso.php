<?php

require("conexion.php");

if (isset($_GET["id"])) {
    $ID = $_GET["id"];


    $statement = $conexion->prepare("SELECT * FROM `cursos` WHERE id = $ID");
    $statement->execute();
    $result = $statement->fetch();
    $titulo = $result["curso"];
    $descripcion = $result["descripcion"];
    $estudiantes = $result["estudiantes"];
    echo "titulo de la tarea" . $titulo . "<br>";
    echo "descripcion de la tarea" . $descripcion . "<br>";
}


if (isset($_POST["actualizar_curso"])) {
    echo " formulario de la actualizacion enviados";
    $ID = $_GET["id"];
    $tituloActualizado = $_POST["titulo_curso"];
    $describicionActualizada = $_POST["descripcion"];
    $estudiantesActualizado = $_POST["estudiantes"];


    $imagen = $_FILES["imagen"]["tmp_name"];
    $nombreImagen = $_FILES["imagen"]["name"];
    $tipoImagen = pathinfo($nombreImagen, PATHINFO_EXTENSION);
    $sizeImagen = $_FILES["imagen"]["size"];
    $directorio = "images/";

    if ($tipoImagen == "jpg" or $tipoImagen == "jpeg" or $tipoImagen == "png") {

        $ruta = $directorio . $ID . "." . $tipoImagen;

        $statement = $conexion->prepare("UPDATE `cursos` SET  imagen= ?, curso= ?, descripcion= ? ,estudiantes= ? WHERE ID = ?");


        $statement->execute(array($ruta, $tituloActualizado, $describicionActualizada, $estudiantesActualizado, $ID));


        if (move_uploaded_file($imagen, $ruta)) {
            $_SESSION["mensaje"] = "curso actualizado exitosamente";
            $_SESSION["color"] = "success";

            header("Location: user.php");
        }

        header("Location: user.php");
    } else {
        $_SESSION["mensaje"] = "Formato no admitido";
        $_SESSION["color"] = "danger";

        header("Location: user.php");
    }
}

?>

<?php
require("header.php");
?>
<div class="container">
    <div class="row">
        <div class="col">
            <form action="editar-curso.php?id=<?php echo $ID ?>" method="POST" enctype="multipart/form-data">
                <label for="titulo">Titulo del curso</label>
                <input class="form-control" type="text" name="titulo_curso" value="<?php echo $titulo ?> ">

                <label for="imagen">imagen del curso</label>
                <input class="form-control" type="file" name="imagen" value="<?php echo $imagen ?> ">

                <label for="descripcion">Descripcion</label>
                <input class="form-control" type="text" name="descripcion" value="<?php echo $descripcion ?> ">

                <label for="estudiantes">Estudiantes</label>
                <input class="form-control" type="text" name="estudiantes" value="<?php echo $estudiantes ?> ">

                <input class="btn btn-sucess" type="submit" name="actualizar_curso" value="Actualizar">

            </form>
        </div>
    </div>

</div>
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
    echo "h1 formulario de la actualizacion enviados";
    $ID = $_GET["id"];
    $tituloActualizado = $_POST["titulo_curso"];
    $describicionActualizada = $_POST["descripcion"];
    $estudiantesActualizado = $_POST["estudiantes"];
    $statement = $conexion->prepare("UPDATE `cursos` SET `curso`= ? ,`descripcion`= ? ,`estudiantes`= ? WHERE id = ?");

    $statement->execute(array( $tituloActualizado ,  $describicionActualizada,  $estudiantesActualizado, $ID));
    header("Location: user.php");
}
?>

<?php
require("header.php");
?>
<div class="container">
    <div class="row">
        <div class="col">
            <form action="editar-curso.php?id=<?php echo $ID ?>"  method="POST">
                <label for="titulo">Titulo del curso</label>
                <input class="form-control" type="text" name="titulo_curso" value="<?php echo $titulo ?> ">

                <label for="descripcion">Descripcion</label>
                <input class="form-control" type="text" name="descripcion" value="<?php echo $descripcion ?> ">

                <label for="estudiantes">Estudiantes</label>
                <input class="form-control" type="text" name="estudiantes" value="<?php echo $estudiantes ?> ">

                <input class="btn btn-sucess" type="submit" name="actualizar_curso" value="Actualizar">

            </form>
        </div>
    </div>

</div>
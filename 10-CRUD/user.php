<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Datos enviados";

    $correo = $_POST["correo"];
    $Contraseña1 = $_POST["Contraseña1"];
    $telefono = $_POST["Telefono"];
    $Nombre = $_POST["Nombre"];

    if (empty($correo) or empty($Contraseña1) or empty($telefono) or empty($Nombre)) {
        echo "Por Favor Regístrese";
    } else {

        /* $_SESSION["userRegister"] = $Usuario;
    $_SESSION["PassRegister"] = $Contraseña;
    $_SESSION["PassRegister"] = $Contraseña;
    $_SESSION["nombreRegister"] = $Nombre;
    header('Location: index.php'); */

        try {
            $conexion = new PDO("mysql: host=localhost; dbname=focaapp", 'root', '');
            echo "Conexion Ok";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        $statement = $conexion->prepare("INSERT INTO `userapp`(`ID`, `correo`, `Contraseña`, `nombre`) VALUES (NULL,:correo,:pass,:user)");

        $statement->execute(array(':correo' => $correo, ':pass' => $Contraseña1, ":user" => $Nombre));
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <style>
        .container {
            background-color: whitesmoke;
            height: 40rem;
            width: 30rem;
            margin: 2rem;
            border-radius: 1rem;
            justify-content: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-image: url(./pic04.jpg);
            background-size: 70rem;
        }

        .enviar {
            justify-content: center;
            border-radius: 2rem;
            background-color: purple;
            color: white;
            background-image: url(./pic05.jpg);
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 10px;
        }

        .tr {
            background-color: gray;
        }

        .cuadro-2{
            background-color: gray;
            height: 5rem;
            border-radius: 2rem;
        }

        .usua{
            justify-content: center;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }
    </style>

    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</head>

<body background="./formas-papel-psicodelico-espacio-copia_23-2149378308 (1).jpg" alt>

    <div class="container md-4 col-10">

    
    <div class="cuadro-2 col-12">
            <div class="dos col-12 justify-content-center">
              <h1 class="usua">Usuarios Registrados</h1>
            </div>
        </div>

        <form class="row-4 col-8">
            <div class="col-md-6">
                <label for="validationDefault01" class="form-label">Estudiantes</label>
                <input type="text" class="form-control" id="validationDefault01" value="" required>
            </div>

            <div class="row-4 col-6">
                <label for="validationDefault02" class="form-label">Imagen</label>
                <div class="input-group">

                    <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" value="" required>
                </div>
            </div>


            <div class="col-md-6">
                <label for="validationDefaultUsername" class="form-label">Descripcion</label>
                <input type="text" class="form-control" id="validationDefault01" value=""required>
            </div>


            <div class="col-md-6">
                <label for="validationDefault03" class="form-label">Cursos</label>
                <input type="text" class="form-control" id="validationDefault03" value="" required>
            </div>


            <div class="btn col-2 align-items-center">
                <button class="btn btn-primary align-items-center" type="submit">Aplicarse</button>
            </div>
        </form>

        <br>

        <table class="table table-bordered border-primary">
            <thead>
                <tr class="tr">
                  
                    <th scope="col">ID</th>
                      <th scope="col">Estudiantes</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Descripicion</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>


            </tbody>
        </table>

        <!--  <h1>Registrate</h1>



        <form action="registro.php" method="POST">

            <label for="Nombre"></label>
            <input type="text" placeholder="Nombre" name="Nombre">
            <br>

            <label for="Usuario"></label>
            <input type="email" placeholder="Usuario" name="correo">
            <br>

            <label for="Telefono"></label>
            <input type="text" placeholder="Telefono" name="telefono">
            <br>

            <label for="Contraseña"></label>
            <input type="text" placeholder="Contraseña" name="Contraseña1">
            <br>

            <button class="enviar" type="submit" value="submit">Registrase</button>


        </form> -->

        <?php if (isset($_SESSION["userRegister"])) :  ?>



            <p> <?php echo $_SESSION["nombreRegister"] . "- " . $_SESSION["userRegister"] . " - " . $_SESSION["PassRegister"]; ?> </p>
        <?php endif ?>






    </div>






</body>

</html>
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  echo "Curso A gregado";
} 

require("conexion.php");
        try {
            $conexion = new PDO("mysql: host=localhost; dbname=focaapp", 'root', '');
            echo "Conexion Ok";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        $statement = $conexion->prepare("INSERT INTO `cursos`(`ID`, `correo`, `Contraseña`, `nombre`) VALUES (NULL,:correo,:pass,:user)");

  
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

        <form action="agregar_curso.php" method="POST">
            <div class="col-md-6">
                <label for="validationDefault01" class="form-label">Estudiantes</label>
                <input type="text" name="estudiantes" id="estudiantes" value="" required>
            </div>

            <div class="row-4 col-6">
                <label for="validationDefault02" class="form-label">Imagen</label>
                <div class="input-group">

                    <input type="text" name="imagen" id="imagen" value="" required>
                </div>
            </div>


            <div class="col-md-6">
                <label for="validationDefaultUsername" class="form-label">Descripcion</label>
                <input type="text" name="descripcion" id="descripcion" value=""required>
            </div>


            <div class="col-md-6">
                <label for="validationDefault03" class="form-label">Cursos</label>
                <input type="text" name="cursos" id="cursos" value="" required>
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


    </div>






</body>

</html>
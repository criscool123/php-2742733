<?php
require("conexion.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>


    <style>
        .row>* {
            flex-shrink: 0;
            width: 30%;
            max-width: 100%;
            padding-right: calc(var(--bs-gutter-x)* .5);
            padding-left: calc(var(--bs-gutter-x)* .5);
            margin-top: var(--bs-gutter-y);
        }

        body {
            background-image: url(./formas-papel-psicodelico-espacio-copia_23-2149378308\ \(1\).jpg);

        }

        .cuadro-1 {
            height: 8rem;
            margin-top: 40px;
            margin-left: 20rem;
        }

        .card {
            border-radius: 2rem;

        }

        .cuadro-2 {
            height: 5rem;
            justify-content: center;
            margin-left: 10rem;
        }

        .info {
            text-align: center;
        }

        .cuadro-3 {

            height: 18rem;
            margin-top: 20px;
        }

        .caja {
            width: 15rem;
        }

        .animate__animated {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .card-img-top {
            width: 214px;
            height: 153px;
        }

        .card-title {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .img-1 {
            width: 1rem;
        }

        .no-line {
            text-decoration: none;
        }
    </style>

</head>

<body background="./formas-papel-psicodelico-espacio-copia_23-2149378308 (1).jpg" alt>

    <div class="container-md justify-content-center">

        <div class="cuadro-1 col-6 justify-content-center">
            <section class="col-8 justify-content-center">
                <h1 class="animate__animated animate__bounce">Cursos de Medellin</h1>
            </section>
        </div>

        <div class="cuadro-2 col-8 justify-content-center">
            <div class="dos col-12 justify-content-center">
                <p class="info">Mas de 500 Cupos para inscribirte a una de las carreras que te ofrece las<br>Universidades de Antioquia y con recursos para que puedas aprender</p>
            </div>
        </div>

        <div class="cuadro-3 row gy-3 justify-content-center">

            <?php
            $statement = $conexion->prepare("SELECT * FROM cursos");
            $statement->execute();
            $result = $statement->fetchAll();

            /*   print_r($result); */

            foreach ($result as $item) { ?>

                <a href="curse.php?id=<?php echo $item["ID"] ?>">
                    <div class="caja">


                        <div class="card">

                            <img src="<?php echo $item["imagen"] ?>" class="card-img-top" alt="2rem">

                            <div class="card-body">
                                <h5 class="card-title"><?php echo $item["curso"] ?></h5>
                                <p class="card-text"><?php echo $item["descripcion"] ?></p>
                                <div class=" estu row gy-2">
                                    <section class="col-1 align-items-center">
                                        <img class="img-1" src="./images.png" alt="">
                                    </section>

                                    <section class="col-8 align-items-center">
                                        <p><?php echo $item["estudiantes"] ?></p>
                                    </section>

                                </div>
                            </div>
                        </div>
                    </div>
                </a>


            <?php } ?>



        </div>
    </div>

    <?php require("footer.php"); ?>

</body>

</html>
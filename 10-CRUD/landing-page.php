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
     
     body{
        background-image: url(./top-view-different-paper-sheets.jpg);

     }

        .cuadro-1 {
            height: 8rem;
            margin-top: 40px;
        }

        .card {
            border-radius: 2rem;

        }

        .cuadro-2 {
            height: 5rem;
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
    </style>

</head>

<body background="./top-view-different-paper-sheets.jpg " alt>

    <div class="container-md justify-content-center">

        <div class="cuadro-1 row gy-2 justify-content-center">
            <section class="col-8 justify-content-center">
                <h1 class="animate__animated animate__bounce">Cursos de Medellin</h1>
            </section>
        </div>

        <div class="cuadro-2 row gy-2">
            <div class="dos col-12 justify-content-center">
                <p class="info">Mas de 500 Cupos para inscribirte a una de las carreras que te ofrece las<br>Universidades de Antioquia y con recursos para que puedas aprender</p>
            </div>
        </div>

        <div class="cuadro-3 row gy-3 justify-content-center">
            <div class="caja">
                <div class="card">
                    <img src="./istockphoto-1390975349-612x612.jpg" class="card-img-top" alt="2rem">
                    <div class="card-body">
                        <h5 class="card-title">Curso de Ingles</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class=" estu row gy-2">
                            <section class="col-1 align-items-center">
                                <img class="img-1" src="./images.png" alt="">
                            </section>


                            <section class="col-8 align-items-center">
                                <p>1 Estudiantes</p>
                            </section>

                        </div>
                    </div>
                </div>
            </div>

            <div class="caja">
                <div class="card">
                    <img src="./descarga.jfif" class="card-img-top" alt="2rem">
                    <div class="card-body">
                        <h5 class="card-title">Cursos de Tecnologias</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                        <div class=" estu row gy-2">
                            <section class="col-1 align-items-center">
                                <img class="img-1" src="./images.png" alt="">
                            </section>


                            <section class="col-8 align-items-center">
                                <p>1 Estudiantes</p>
                            </section>

                        </div>

                    </div>
                </div>
            </div>

            <div class="caja">
                <div class="card">
                    <img src="./descarga (1).jfif" class="card-img-top" alt="214px * 153px">
                    <div class="card-body">
                        <h5 class="card-title">Cursos de Marketing</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class=" estu row gy-2">
                            <section class="col-1 align-items-center">
                                <img class="img-1" src="./images.png" alt="">
                            </section>


                            <section class="col-8 align-items-center">
                                <p>1 Estudiantes</p>
                            </section>

                        </div>
                    </div>
                </div>
            </div>

            <div class="caja">
                <div class="card">
                    <img src="./descarga (2).jfif" class="card-img-top" alt="2rem">
                    <div class="card-body">
                        <h5 class="card-title">Cursos de Diseños</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                        <div class=" estu row gy-2">
                            <section class="col-1 align-items-center">
                                <img class="img-1" src="./images.png" alt="">
                            </section>


                            <section class="col-8 align-items-center">
                                <p>1 Estudiantes</p>
                            </section>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
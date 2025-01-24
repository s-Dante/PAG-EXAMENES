<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=devicewidth, initial-scale=1.0">
        <meta name="description" content="Calendario de exámenes de la carrera LMAD de la FCFM, UANL">
        <meta name="keywords" content="FCFM, UANL, LMAD, Exámenes, Calendario">
        <meta name="author" content="LMAD">
        <link rel="icon" type="image/png" href="img/favicon.png">
        <title>LMAD Calendario de exámenes</title>
        <!-- <link rel="stylesheet" href="generalStyle.css">
        <link rel="stylesheet" href="headerStyle.css">
        <link rel="stylesheet" href="bodyStyle.css"> -->

        <link rel="stylesheet" href="Views/style.css">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Markazi+Text:wght@450" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kodchasan:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">


        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Markazi+Text:wght@450" />

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="container">
            <header class="row align-content-center d-flex flex-wrap my-4 px-0">
                <div class="col-3">
                    <a href="../dashboard.view.php">
                        <img src="../img/Logo-LMAD-big.png" 
                        srcset="../img/Logo-LMAD-small.png 550w, 
                        ../img/Logo-LMAD-medium.png 800w, 
                        ../img/Logo-LMAD-big.png 1000w"
                        sizes="(max-width: 550px) 80px, 
                        (max-width: 900px) 100px, 
                        (max-width: 1200px) 100vw"
                        alt="Logotipo LMAD" class="img-der">
                    </a>
                </div>

                <div class="col-3"></div>

                <div class="col-6 text-center pt-4">
                    <h3>CALENDARIO DE EXÁMENES</h3>
                </div>
            </header>
        </div>

        <div class="row">
            <div class="w-100 p-0 d-flex flex-wrap" id="rectangulo"></div>
        </div>

        <div class="b-example-divider"></div>
        <div class="b-example-divider"></div>

        <div class="container d-flex justify-content-center align-content-center min-vh-100">
            <main class="row border-rounded p-3">
                <div class="container d-flex justify-content-center align-content-center min-vh-100">
                    <div class="row border-rounded p-3">
                        <div class="col-md-6 left-box">
                            <div class="row align-item-center">
                                <div class="header-text mb4">
                                    <p>Inicio de Sesion</p>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-6 rounded-4 justify-content-center align-item-center flex-column d-flex right-box">
                            <div class="featured-image">
                                <img src="../img/bookIMG.png" class="img-fluid" alt="Imagen de libro y cafe" style="width: 1200px;">
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>


        <!-- <div class="container">
            <main class="row d-block">
                <div class="col-6">
                    <form action="login" method="post">
                        <label for="Clave de usuario:"></label>
                        <input type="text" id="usuario" name="usuario" placeholder="">

                        <label for="Contraseña:"></label>
                        <input type="password" name="password" id="password" placeholder="">
                    </form>
                </div>

                <div class="container">
                    <div class="row align-content-end">
                        <div class="col-6"></div>
                        <div class="col-3 me-1">
                            <img src="../img/bookIMG.png" alt="Imagen de dlibros y café" class="img-invert">
                        </div>
                    </div>
                </div>
            </main>
        </div> -->

        <footer></footer>

    </body>

</html>
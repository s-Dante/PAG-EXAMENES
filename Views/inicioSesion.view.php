<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=devicewidth, initial-scale=1.0">
        <meta name="description" content="Calendario de exámenes de la carrera LMAD de la FCFM, UANL">
        <meta name="keywords" content="FCFM, UANL, LMAD, Exámenes, Calendario">
        <meta name="author" content="LMAD">
        <link rel="icon" type="image/png" href="../img/favicon.png">
        <title>LMAD Calendario de exámenes</title>
        <!-- <link rel="stylesheet" href="generalStyle.css">
        <link rel="stylesheet" href="headerStyle.css">
        <link rel="stylesheet" href="bodyStyle.css"> -->

        <link rel="stylesheet" href="../Views/style.css">

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
                    <a href="/">
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

        <div class="row ms-5" style="max-width:97%; overflow-x:hidden;">
            <div class="p-0 d-flex flex-wrap" id="rectangulo"></div>
        </div>


        <div class="container d-flex justify-content-center align-items-center min-vh-100">
            <div class="row rounded-4 p-3 bg-transparent">
                <!-- Columna izquierda (Formulario de login) -->
                <div class="col-12 col-md-6 left-box"> <!-- Cambiado col-md-6 a col-12 en móviles -->
                    <div class="row align-items-center ms-sm-4 ms-1">
                        <div class="titulo-inicio mb-5 mt-5 ps-4">
                            <!-- H1 más pequeño en dispositivos móviles -->
                            <h1 class="fs-1 fs-md-3" style="font-weight: 50px;">INICIO DE SESIÓN</h1>
                        </div>
                        <div class="align-content-center justify-content-center d-flex flex-wrap">
                            <div class="input-group mb-3 p-2 me-4">
                                <input type="text" class="form-control form-control-lg fs-6 custom-input" placeholder="Clave de usuario">
                            </div>
                            <div class="input-group mb-3 p-2 me-4">
                                <input type="password" id="password-input" class="form-control form-control-lg fs-6 custom-input" placeholder="Contraseña">
                            </div>
                            <div class="input-group mb-5 p-2 me-0 justify-content-center">
                                <button class="boton custom-button" style="width: 110px;">Entrar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Columna derecha (Imagen) -->
                <div class="col-12 col-md-6 d-flex justify-content-center align-items-center flex-column right-box">
                    <div class="features-image mb-3">
                        <img id="features-image" src="../img/Logo-LMAD.png" alt="Imagen de un bisonte" class="img-fluid" style="max-width: 100%; height: auto;">
                    </div>
                </div>
            </div>
        </div>


        <script>
            // Cambio
            document.getElementById('password-input').addEventListener('focus', function() {
                document.getElementById('features-image').src = '../img/FCFM-LOGO.png';
            });
        
            // devolver
            document.getElementById('password-input').addEventListener('blur', function() {
                document.getElementById('features-image').src = '../img/Logo-LMAD.png';
            });
        </script>

        <footer></footer>

    </body>

</html>
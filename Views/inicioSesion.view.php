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
            <header class="row align-content-center d-flex flex-wrap my-4 px-0 justify-content-around">
                <div class="col-3 align-content-center">
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

                <div class="col-3 ocultar"></div>

                <div class="col-6 text-end pt-4">
                    <h3>CALENDARIO DE EXÁMENES</h3>
                </div>
            </header>
        </div>

        <div class="row ms-5" style="max-width:97%; overflow-x:hidden;">
            <div class="p-0 d-flex flex-wrap" id="rectangulo"></div>
        </div>


        <div class="container d-flex justify-content-center align-items-center min-vh-100 all-login">
            <div class="row rounded-4 p-3 bg-transparent">
                <!-- Columna izquierda (Formulario de login) -->
                <div class="col-12 col-md-6 align-content-center left-box"> <!-- Cambiado col-md-6 a col-12 en móviles -->
                    <div class="row align-items-center ms-sm-4 ms-1">
                        <div class="titulo-inicio mb-5 mt-5 ps-sm-4 ps-4">
                            <!-- H1 más pequeño en dispositivos móviles -->
                            <h1 class="fs-1 fs-md-3 ps-3" style="font-weight: 50px;">INICIO DE SESIÓN</h1>
                        </div>
                        <div class="align-content-center justify-content-center d-flex flex-wrap">
                            <div class="input-group mb-3 p-2 me-4">
                                <input type="text" class="form-control form-control-lg fs-6 custom-input" style="color: cornsilk;" placeholder="Clave de usuario">
                            </div>
                            <div class="input-group mb-3 p-2 me-4" style="color: white;">
                                <input type="password" id="password-input" class="form-control form-control-lg fs-6 custom-input" style="color: cornsilk;" placeholder="Contraseña">
                            </div>
                            <div class="input-group mb-5 p-2 me-0 justify-content-center">
                                <button class="boton custom-button rounded-3" style="width: 545px; margin-right: 22px; background-color: #0DE5FF; color:black;"><strong>Entrar</strong></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Columna derecha (Imagen) -->
                <div class="col-12 col-md-6 d-flex justify-content-center align-items-center flex-column right-box">
                    <div class="features-image mb-3">
                        <img id="features-image" src="../img/bisonte-saludo.png" alt="Imagen de un bisonte" class="img-fluid" style="max-width: 100%; height: auto;">
                    </div>
                </div>
            </div>
        </div>

        <style>
            @media (max-width: 576px) {
                .titulo-inicio h1 {
                    font-size: 2rem; /* Ajustar tamaño de título en móviles */
                    width: 300px;
                    text-wrap: nowrap;
                }
                .input-group {
                    margin-bottom: 1rem; /* Reducir el margen entre inputs en pantallas pequeñas */
                    width: 300px;
                }
                .custom-button {
                    font-size: 1.3rem; /* Ajustar tamaño del botón */
                    width: 220px;
                    margin-right: 10px;
                }
                .right-box {
                    display: none; /* Ocultar imagen en pantallas muy pequeñas si es necesario */
                    width: 300px;
                    margin-left: 33px;
                }

                .ocultar {
                    display: none;
                }
            }

            @media (max-width: 344px) {
                .all-login {
                    width: 200px;
                }
            }
        </style>

        <script>
            // Cambio
            document.getElementById('password-input').addEventListener('focus', function() {
                document.getElementById('features-image').src = '../img/bisonte-detective.png';
            });
        
            // devolver
            document.getElementById('password-input').addEventListener('blur', function() {
                document.getElementById('features-image').src = '../img/bisonte-saludo.png';
            });
        </script>

        <footer></footer>

    </body>

</html>
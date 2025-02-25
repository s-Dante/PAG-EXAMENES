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

        <link rel="stylesheet" href="../Views/style.css">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Markazi+Text:wght@450" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kodchasan:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

        <!-- Sweetalert -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>


        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Markazi+Text:wght@450" />

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>

    <body>
    <?php
    if (isset($_SESSION['mensaje'])) {
        $mensaje = $_SESSION['mensaje'];
        $alertType = $mensaje['type'] == 'success' ? '¡Éxito!' : 'Error';
        $rol = $_SESSION['user']['Rol'];

        // Check if the message is for a successful registration
        if ($mensaje['type'] == 'success'&& $rol == 'Maestro') {
            echo "<script>
                swal({
                    title: '$alertType',
                    text: '{$mensaje['text']}',
                    type: '{$mensaje['type']}',
                    showConfirmButton: true
                }, function() {
                    // Redirigir al dashboard
                    window.location.href = '/maestro';
                });
            </script>";
        } else {
            echo "<script>
                swal({
                    title: '$alertType',
                    text: '{$mensaje['text']}',
                    type: '{$mensaje['type']}',
                    showConfirmButton: true
                }, function() {
                    // Redirigir a la página de signUp después de cerrar la alerta
                    window.location.href = '/inicioSesion';
                });
            </script>";
        }
    
        unset($_SESSION['mensaje']); // Elimina el mensaje después de mostrarlo
    }
    ?>
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
                    <h3><strong>CALENDARIO DE EXÁMENES</strong></h3>
                </div>
            </header>
        </div>

        <div class="row ms-5" style="max-width:97%; overflow-x:hidden;">
            <div class="p-0 d-flex flex-wrap" id="rectangulo"></div>
        </div>


        <div class="container d-flex justify-content-center align-items-center min-vh-100 all-login">
            <div class="row rounded-4 p-3 bg-transparent">
                <!-- Columna izquierda (Formulario de login) -->
                <form action="/inicioSesion" method="POST" class="col-12 col-md-6 align-content-center left-box">
                    <div class="row align-items-center ms-sm-4 ms-1">
                        <div class="titulo-inicio mb-5 ps-sm-4 ps-4">
                            <h1 class="fs-md-3 ps-1"><strong>INICIO DE SESIÓN</strong></h1>
                        </div>
                        <div class="align-content-center justify-content-center d-flex flex-wrap">
                            <div class="input-group mb-3 mt-5 p-2 me-4">
                                <label for="claveUsuario" class="mb-3 fs-4" style="font-family: 'Montserrat'; color: cornsilk;">Clave de usuario:</label>
                                <input type="text" id="claveUsuario" name="claveUsuario" class="form-control form-control-lg fs-6 custom-input" style="color: cornsilk;" placeholder="Clave de usuario" required>
                            </div>
                            <div class="input-group mb-3 p-2 me-4">
                                <label for="password" class="mb-3 fs-4" style="font-family: 'Montserrat'; color: cornsilk;">Contraseña:</label>
                                <input type="password" id="password" name="password" class="form-control form-control-lg fs-6 custom-input" style="color: cornsilk;" placeholder="Contraseña" required>
                            </div>
                            <div class="input-group mb-5 p-2 me-0 justify-content-center">
                                <button type="submit" class="boton custom-button rounded-3" style="width: 545px; margin-right: 22px; background-color: #0DE5FF; color:black;"><strong>Entrar</strong></button>
                            </div>
                        </div>
                    </div>
                </form>


                <!-- Columna derecha (Imagen) -->
                <div class="col-12 col-md-6 d-flex justify-content-center align-items-center flex-column right-box">
                    <div class="features-image mb-3">
                        <img id="features-image" src="../img/bisonte-saludo.png" alt="Imagen de un bisonte" class="img-fluid" style="max-width: 100%; height: auto;">
                    </div>
                </div>
            </div>
        </div>

        <style> 

            @media (width: 330px) and (width:500px){
                .titulo-inicio h1 {
                    font-size: 1rem; /* Ajustar tamaño de título en móviles */
                    width: 300px;
                    text-wrap: nowrap;
                }
                .input-group {
                    margin-bottom: 0.5rem; /* Reducir el margen entre inputs en pantallas pequeñas */
                    width: 300px;
                }
                .custom-button {
                    font-size: 0.6rem; /* Ajustar tamaño del botón */
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

            
        </style>

        <script>
            // Cambio
            document.getElementById('password').addEventListener('focus', function() {
                document.getElementById('features-image').src = '../img/bisonte-detective.png';
            });
        
            // devolver
            document.getElementById('password').addEventListener('blur', function() {
                document.getElementById('features-image').src = '../img/bisonte-saludo.png';
            });
        </script>

        <footer></footer>

    </body>

</html>
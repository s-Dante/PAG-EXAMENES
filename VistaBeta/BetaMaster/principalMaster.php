<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=devicewidth, initial-scale=1.0">
    <meta name="description" content="Calendario de exámenes de la carrera LMAD de la FCFM, UANL">
    <meta name="keywords" content="FCFM, UANL, LMAD, Exámenes, Calendario">
    <meta name="author" content="LMAD">
    <link rel="icon" type="image/png" href="/img/favicon.png">
    <title>LMAD Calendario de exámenes</title>

    <link rel="stylesheet" href="/Views/style.css">

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
                    <img src="/img/Logo-LMAD-big.png" 
                    srcset="/img/Logo-LMAD-small.png 550w, 
                    /img/Logo-LMAD-medium.png 800w, 
                    /img/Logo-LMAD-big.png 1000w"
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


    <div class="container">
        <div class="b-example-divider"></div>
        <div class="b-example-divider"></div>

        <!-- Título y Mensaje -->
        <div class="row">
            <div class="col-12 text-center" id="tema">
                <h1><strong>USUARIO MAESTRO</strong></h1>
            </div>
        </div>

        <div class="b-example-divider"></div>
        <div class="b-example-divider"></div>
    </div>

    <div class="container-ex">
        <div class="ex-cargados">
            <div class="carga">
                <img src="/img/bisonte-detective.png" alt="" style="width: 100px; height:auto;">
            </div>
            <div class="carga">
                <h2>22</h2><br>
                <h4>EXÁMENES CARGADOS</h4>
            </div>
        </div>
    </div>
</body>
</html>
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
                <img src="/img/examsIcon.png" alt="" style="width: 160px; height:auto;">
            </div>
            <div class="carga" style="text-align: center;">
                <h2 style="font-size: 75px; font-family: 'Kodchasan';"><b>22</b></h2><br>
                <h4 style="text-align: start; font-family: 'Kodchasan' !important;">EXÁMENES CARGADOS</h4>
            </div>
        </div>
    </div>

    <div class="b-example-divider"></div>
    <div class="b-example-divider"></div>
    <div class="b-example-divider"></div>
    <div class="b-example-divider"></div>

    <div class="admin-info" style="text-align: center;">
        <h2>ADMINISTRACIÓN DE INFORMACIÓN</h2>

        <div class="b-example-divider"></div>
        
        <div class="check" style="color: cornsilk;">
            <label class="custom-checkbox">
                <input type="checkbox" />
                <span class="checkmark"></span>
                Mostrar filtro de carrera
            </label>

            <div class="b-example-divider"></div>

            <div class="form-group" id="select" style="justify-self: center; align-self: center;">
                <label for="filtroCarrera" style="font-size: 17px; display:block;">Seleccione la carrera:</label>
                
                <select name="filtroCarrera" id="filtroCarrera" class="form-select">
                    <option value="Seleccionar" disabled hidden selected>Seleccioar</option>
                    <option value="Licenciatura en Multimedia y Animacion Digital">Licenciatura en Multimedia y Animacion Digital</option>
                    <option value="Licenciatura en Matematicas">Licenciatura en Matematicas</option>
                    <option value="Licenciatura en Fisica">Licenciatura en Fisica</option>
                    <option value="Licenciatura en Actuaria">Licenciatura en Actuaria</option>
                    <option value="Licenciatura en Ciencias Computacionales">Licenciatura en Ciencias Computacionales</option>
                    <option value="Licenciatura en Seguridad e Tecnologías de la Información">Licenciatura en Seguridad e Tecnologías de la Información</option>
                </select>
            </div>
        </div>
    </div>

    <div class="b-example-divider"></div>

    <div class="p-0 d-flex flex-wrap" id="rect"></div>

    <div class="b-example-divider"></div>
    <div class="b-example-divider"></div>

    <h5 style="text-align: center;">FECHAS DE PARCIALES</h5>

    <div class="b-example-divider"></div>
    
    <div class="selectorFecha" style="color: cornsilk !important; justify-self: center;">
        <p style="color: cornsilk; display:inline;">Primer Parcial</p>

        <span style="margin-right:8px;">Desde el día</span>
        <label for="inicioPrimero"></label>
        <input type="date" name="inicioPrimero" id="iniPrimero">

        <span style="margin-left: 20px; margin-right: 8px;">hasta el día</span>
        <label for="finPrimero"></label>
        <input type="date" name="finPrimero" id="finPrimero">
    </div>

    <div class="b-example-divider"></div>
    <div class="b-example-divider"></div>

    <div class="selectorFecha" style="color: cornsilk !important;">
        <p style="color: cornsilk; display:inline;">Primer Parcial</p>

        <span style="margin-right:8px;">Desde el día</span>
        <label for="inicioPrimero"></label>
        <input type="date" name="inicioPrimero" id="iniPrimero">

        <span style="margin-left: 20px; margin-right: 8px;">hasta el día</span>
        <label for="finPrimero"></label>
        <input type="date" name="finPrimero" id="finPrimero">
    </div>

    <div class="b-example-divider"></div>
    <div class="b-example-divider"></div>
    <div class="b-example-divider"></div>
    
    <h5 style="text-align: center;">ACTUALIZACIÓN DE INFORMACIÓN</h5>

    <div class="b-example-divider"></div>
    <div class="b-example-divider"></div>

    <div style="justify-self: center; font-family:'Kodchasan';">
        <button style="border-radius: 22px; color:cornsilk; background-image: linear-gradient(90deg,rgb(12, 138, 152),rgb(33, 49, 109) 95%); width:275px; height:30px; display:inline; justify-self:center; margin-right: 10px">Borrar informacion actual</button>
        <button style="border-radius: 22px; color:cornsilk; background-image: linear-gradient(90deg,rgb(116, 11, 161),rgb(33, 49, 109) 95%); width:275px; height:30px; display:inline; justify-self:center; margin-left: 10px">Subir informacion nueva</button>
    </div>

    <div class="b-example-divider"></div>
    <div class="b-example-divider"></div>
    <div class="b-example-divider"></div>
    <div class="b-example-divider"></div>

    <h3 style="text-align: center;"><b>UNIDADES DE APRENDIZAJE ACTUALES</b></h3>

    <div class="b-example-divider"></div>

    <div style="justify-self: center;">
        <input type="text" name="materiaBuscar" id="materiaBuscar" placeholder="buscar UA..." style="width: 585px; height: 30px; border-radius: 10px; background-color: #1F2540; border: 5px solid; border-color: #1F2540">
    </div>


    <div class="b-example-divider"></div>
    <div class="b-example-divider"></div>

</body>
</html>
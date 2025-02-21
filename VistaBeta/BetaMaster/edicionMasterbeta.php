<!DOCTYPE html>
<html lang="en">
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


    <div class="container text-center">
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

        <h2>EDICIÓN DE UNIDAD DE APRENDIZAJE</h2>

        <div class="b-example-divider"></div>
        <div class="b-example-divider"></div>
    </div>

    <div class="b-example-divider"></div>

    <div class="form-group" id="select" style="justify-self: center; align-self: center;">
        <label for="filtroCarrera" style="font-size: 17px;">Carrera:</label>      
        <select name="filtroCarrera" id="filtroCarrera" class="form-select">
            <option value="Seleccionar" disabled hidden selected>Seleccioar</option>
            <option value="Licenciatura en Multimedia y Animacion Digital">Licenciatura en Multimedia y Animacion Digital</option>
            <option value="Licenciatura en Matemáticas">Licenciatura en Matemáticas</option>
            <option value="Licenciatura en Física">Licenciatura en Física</option>
            <option value="Licenciatura en Actuaría">Licenciatura en Actuaráa</option>
            <option value="Licenciatura en Ciencias Computacionales">Licenciatura en Ciencias Computacionales</option>
            <option value="Licenciatura en Seguridad en Tecnologías de la Información">Licenciatura en Seguridad en Tecnologías de la Información</option>
        </select>
    </div>

    <div class="form-group" id="select" style="justify-self: center; align-self: center;">
        <label for="filtroUA" style="font-size: 17px;">Unidades de Aprendizaje:</label>      
        <select name="filtroUA" id="filtroUA" class="form-select">
            <option value="Seleccionar" disabled hidden selected>Seleccioar</option>
            <option value="Licenciatura en Multimedia y Animacion Digital">Licenciatura en Multimedia y Animacion Digital</option>
            <option value="Licenciatura en Matemáticas">Licenciatura en Matemáticas</option>
            <option value="Licenciatura en Física">Licenciatura en Física</option>
            <option value="Licenciatura en Actuaría">Licenciatura en Actuaráa</option>
            <option value="Licenciatura en Ciencias Computacionales">Licenciatura en Ciencias Computacionales</option>
            <option value="Licenciatura en Seguridad en Tecnologías de la Información">Licenciatura en Seguridad en Tecnologías de la Información</option>
        </select>
    </div>

    <div class="form-group" id="select" style="justify-self: center; align-self: center; justify-content:space-between;">
        <label for="filtroGpo" style="font-size: 17px;">Grupo:</label>      
        <select name="filtroGpo" id="filtroGpo" class="form-select">
            <option value="Seleccionar" disabled hidden selected>Seleccioar</option>
            <option value="Licenciatura en Multimedia y Animacion Digital">Licenciatura en Multimedia y Animacion Digital</option>
            <option value="Licenciatura en Matemáticas">Licenciatura en Matemáticas</option>
            <option value="Licenciatura en Física">Licenciatura en Física</option>
            <option value="Licenciatura en Actuaría">Licenciatura en Actuaráa</option>
            <option value="Licenciatura en Ciencias Computacionales">Licenciatura en Ciencias Computacionales</option>
            <option value="Licenciatura en Seguridad en Tecnologías de la Información">Licenciatura en Seguridad en Tecnologías de la Información</option>
        </select>
    </div>

    <div class="form-group" id="select" style="justify-self: center; align-self: center;">
        <label for="giltroSemestre" style="font-size: 17px;">Semestre:</label>      
        <select name="giltroSemestre" id="giltroSemestre" class="form-select">
            <option value="Seleccionar" disabled hidden selected>Seleccioar</option>
            <option value="Licenciatura en Multimedia y Animacion Digital">Licenciatura en Multimedia y Animacion Digital</option>
            <option value="Licenciatura en Matemáticas">Licenciatura en Matemáticas</option>
            <option value="Licenciatura en Física">Licenciatura en Física</option>
            <option value="Licenciatura en Actuaría">Licenciatura en Actuaráa</option>
            <option value="Licenciatura en Ciencias Computacionales">Licenciatura en Ciencias Computacionales</option>
            <option value="Licenciatura en Seguridad en Tecnologías de la Información">Licenciatura en Seguridad en Tecnologías de la Información</option>
        </select>
    </div>

    <div class="b-example-divider"></div>
    <div class="b-example-divider"></div>

    <div class="p-0 d-flex flex-wrap" id="rect"></div>

    <div class="b-example-divider"></div>
    <div class="b-example-divider"></div>

    <div class="selectorFecha" style="color: cornsilk !important; justify-self: center; align-items: center; font-size: 20px;">
        <span style="color: cornsilk; display:inline;" class="parcial">Primer Parcial</span>

        <div style="display: inline-block; width: 2px; height: 50px; background: linear-gradient(0deg, #0DE5FF 0%, #33C2FF 20%, #A05CFF 80%, #C53AFF 100%); margin: 0 15px; transform: translateY(35%);"></div>

        <span style="margin-right:8px;">Día:</span>
        <label for="inicioPrimero"></label>
        <input type="date" name="inicioPrimero" id="iniPrimero" class="date-picker">

        <span style="margin-left: 25px; margin-right: 8px;">Hora:</span>
        <label for="finPrimero"></label>
        <input type="time" name="finPrimero" id="finPrimero" class="date-picker">
    </div>

    <div class="b-example-divider"></div>
    <div class="b-example-divider"></div>

    <div class="selectorFecha" style="color: cornsilk !important; justify-self: center; align-items: center; font-size: 20px; padding-right: 28px;">
        <span style="color: cornsilk; display:inline;" class="parcial">Segundo Parcial</span>

        <div style="display: inline-block; width: 2px; height: 50px; background: linear-gradient(0deg, #0DE5FF 0%, #33C2FF 20%, #A05CFF 80%, #C53AFF 100%); margin: 0 15px; transform: translateY(35%);"></div>

        <span style="margin-right:8px;">Día</span>
        <label for="inicioPrimero"></label>
        <input type="date" name="inicioPrimero" id="iniPrimero" class="date-picker">

        <span style="margin-left: 25px; margin-right: 8px;">Hora</span>
        <label for="finPrimero"></label>
        <input type="time" name="finPrimero" id="finPrimero" class="date-picker">
    </div>

    <div class="b-example-divider"></div>
    <div class="b-example-divider"></div>
    <div class="b-example-divider"></div>
    <div class="b-example-divider"></div>

    <h5 style="text-align: center;"><strong>ACTUALIZACIÓN DE INFORMACIÓN</strong></h5>

    <div class="b-example-divider"></div>
    <div class="b-example-divider"></div>

    <div style="justify-self: center; font-family:'Kodchasan';">
        <button class="botonesMaster" style="border-radius: 22px; color:cornsilk; background-image: linear-gradient(90deg,rgb(12, 138, 152),rgb(33, 49, 109) 95%); width:150px; height:30px; display:inline; justify-self:center; margin-right: 10px">Guardar</button>
        <button class="botonesMaster" style="border-radius: 22px; color:cornsilk; background-image: linear-gradient(90deg,rgb(116, 11, 161),rgb(33, 49, 109) 95%); width:150px; height:30px; display:inline; justify-self:center; margin-left: 10px">Cancelar</button>
    </div>

    <style>
        .botonesMaster:hover{
            transition: 100ms ease-in;
            transform: translateY(-2px) scale(1.05);
            cursor: pointer;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
        }
        .parcial{
            text-transform: uppercase;
        }

        .date-picker{
            background-color: #1F2540 !important;
            padding: 5px;
            border-radius: 10px;
            border: none;
            border-bottom:2px solid  #0DE5FF;
            color: cornsilk;
        }
        /* Estilo para cambiar el icono del calendario en Chrome y Safari */
        input[type="date"]::-webkit-calendar-picker-indicator {
            background-color: transparent; /* Cambia el color de fondo del icono */
            border-radius: 50%; /* Hace el icono redondo */
            padding: 5px; /* Ajusta el espacio interno */
            cursor: pointer; /* Hace que el cursor sea un puntero al pasar sobre el icono */
            filter: invert(1) sepia(100%) saturate(100%) hue-rotate(180deg);

            color-scheme: cornsilk;
        }

        input[type="date"]::-webkit-datetime-edit-text {
            padding: 0 0.3rem;
            color-scheme: dark;
        }
        
        input[type="time"]::-webkit-calendar-picker-indicator {
            background-color: transparent; /* Cambia el color de fondo del icono */
            border-radius: 50%; /* Hace el icono redondo */
            padding: 5px; /* Ajusta el espacio interno */
            cursor: pointer; /* Hace que el cursor sea un puntero al pasar sobre el icono */
            filter: invert(1) sepia(100%) saturate(100%) hue-rotate(180deg);

            color-scheme: cornsilk;
        }

        input[type="time"]::-webkit-datetime-edit-text {
            padding: 0 0.3rem;
            color-scheme: dark;
        }
        
    </style>
</body>
</html>
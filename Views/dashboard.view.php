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

        <!--
        <link rel="stylesheet" href="generalStyle.css">
        <link rel="stylesheet" href="headerStyle.css">
        <link rel="stylesheet" href="bodyStyle.css">
        -->

        <link rel="stylesheet" href="Views/style.css">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Markazi+Text:wght@450" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kodchasan:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

        <!-- FullCalendar CSS -->
        <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.2/main.min.css" rel="stylesheet">

        <!-- FullCalendar JS -->
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.2/main.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.3/locales/es.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.8/locales-all.min.js"></script>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>

    <body>

        <div class="container text-center">
            <header class="d-flex flex-wrap my-4 px-0 align-content-center justify-content-center">
                <div class="col-4">
                    <a href="https://www.fcfm.uanl.mx/" target="_blank" rel="noopener noreferrer">
                        <img src="img/FCFM-LOGO-big.png" 
                        srcset="img/FCFM-LOGO-small.png 550w, 
                            img/FCFM-LOGO-medium.png 800w, 
                            img/FCFM-LOGO-big.png 1000w"
                        sizes="(max-width: 550px) 80px, 
                            (max-width: 900px) 100px, 
                            (max-width: 1200px) 100vw"
                        alt="img-Izq" class="img-izq">
                    </a>
                </div>

                <div class="col-4">
                    <img src="img/Logo-LMAD-big.png" 
                    srcset="img/Logo-LMAD-small.png 550w, 
                        img/Logo-LMAD-medium.png 800w, 
                        img/Logo-LMAD-big.png 1000w"
                    sizes="(max-width: 550px) 80px, 
                        (max-width: 900px) 100px, 
                        (max-width: 1200px) 100vw"
                    alt="img-Der" class="img-der">
                </div>

                <div class="col-4 text-center pt-3" style="display:none;">
                    <a href="Views/inicioSesion.view.php">
                        <button class="boton">Adminsitrador</button>
                    </a>
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
                    <h1>CALENDARIO DE EXÁMENES</h1>
                </div>
            </div>

            <div class="b-example-divider"></div>
            <div class="b-example-divider"></div>

            <div class="container d-flex justify-content-center align-items-center">
                <div class="mensaje-borde d-flex align-items-center">
                    <div class="icono d-flex justify-content-center align-items-center me-3">
                        <img src="img/idea 1.png" alt="icono de Idea">
                    </div>
                    <div class="mensaje">
                        <h6>Las fechas asignadas para el tercer parcial serán proporcionadas por la Facultad.</h6>
                    </div>
                </div>
            </div>
            
            
        
            <div class="b-example-divider"></div>
            <div class="b-example-divider"></div>

            <!-- Instrucción -->
            <div class="row">
                <div class="col-12 text-center" id="instruccion">
                    <h4>Para poder visualizar la UA deseada, llene lo siguiente:</h4>
                </div>
            </div>
        
            <div class="b-example-divider"></div>
            <div class="b-example-divider"></div>
            
            <!-- Sección de Selección -->
            <div class="container">
                <div class="row justify-content-evenly" id="seleccion">
                    <div class="col-4 justify-content-center align-content-center" id="select">
                        <form action="selecciones" method="post">
                            <div class="form-group">
                                <label for="semestre" class="me-2">Semestre:</label>
                                <select name="semestre" id="semestre" class="form-select">
                                    <option value="Todos">Todos</option>
                                    <option value="3">Tercero</option>
                                    <option value="4">Cuarto</option>
                                    <option value="5">Quinto</option>
                                    <option value="6">Sexto</option>
                                    <option value="7">Séptimo</option>
                                    <option value="8">Octavo</option>
                                    <option value="9">Noveno</option>
                                </select>
                            </div>
            
                            <div class="form-group mt-3 ms-5">
                                <label for="ua" class="me-2">UA's:</label>
                                <select name="ua" id="ua" class="form-select">
                                    <option value="">Selecciona un semestre</option>
                                </select>
                            </div>
            
                            <div class="form-group ms-4">
                                <label for="parcial" class="me-2">Parcial:</label>
                                <select name="parcial" id="parcial" class="form-select">
                                    <option value="">Todos</option>
                                    <option value="1">1°</option>
                                    <option value="2">2°</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    
                    <div class="col-4 column" id="calendar"></div>
                </div>
            </div>
    
            
            
            <div class="b-example-divider"></div>
            <div class="b-example-divider"></div>
            <div class="b-example-divider"></div>
            
            <!-- Resultados -->
            <div class="row" id="results">
                <div class="col-12 text-center" id="Results">
                    <h2>Unidades de Aprendizaje</h2>
                </div>
            </div>
        
            <div class="b-example-divider"></div>
            
            <!-- Detalles del Examen -->
            <div class="row justify-content-center">
                <div class="col-sm-8 col-md-6 col-10 bg-custom-gradient rounded-top-4 text-center" style="box-shadow: 0px 0px 15px rgb(0, 0, 0, 0.7);">
                    <div id="exam-details"></div>
                    <div class="b-example-divider"></div>

                    <div id="pagination-controls" class="text-center mt-4">
                        <button id="prevBtn" class="btn-prev" disabled><bold><</bold></button>
                        <button id="nextBtn" class="btn-next" disabled><bold>></bold></button>
                    </div>


                    <div class="b-example-divider"></div>
                </div>
            </div>
        </div>
        
        <footer></footer>

        <!-- Scrpts -->
        <script src="Views/scripts.js"></script>
    </body>

</html>

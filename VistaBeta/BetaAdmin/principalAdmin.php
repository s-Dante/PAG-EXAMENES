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
                <h1><strong>USUARIO ADMINISTRADOR</strong></h1>
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
                <h2 style="font-size: 75px; font-family: 'Kodchasan';"><b><?=$examenesCantidad?></b></h2><br>
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
    </div>

    <div class="b-example-divider"></div>
    <div class="b-example-divider"></div>

    <h4 style="text-align: center;">FECHAS DE PARCIALES</h4>

    <div class="b-example-divider"></div>
    
    <div class="selectorFecha" style="color: cornsilk !important; justify-self: center; align-items: center; font-size: 20px;">
        <span style="color: cornsilk; display:inline;" class="parcial">Primer Parcial</span>

        <div style="display: inline-block; width: 2px; height: 50px; background: linear-gradient(0deg, #0DE5FF 0%, #33C2FF 20%, #A05CFF 80%, #C53AFF 100%); margin: 0 15px; transform: translateY(35%);"></div>

        <span style="margin-right:8px;">Desde el día</span>
        <label for="inicioPrimero"></label>
        <input type="date" name="inicioPrimero" id="iniPrimero" class="date-picker">

        <span style="margin-left: 25px; margin-right: 8px;">hasta el día</span>
        <label for="finPrimero"></label>
        <input type="date" name="finPrimero" id="finPrimero" class="date-picker">
    </div>

    <div class="b-example-divider"></div>
    <div class="b-example-divider"></div>

    <div class="selectorFecha" style="color: cornsilk !important; justify-self: center; align-items: center; font-size: 20px; padding-right: 28px;">
        <span style="color: cornsilk; display:inline;" class="parcial">Segundo Parcial</span>

        <div style="display: inline-block; width: 2px; height: 50px; background: linear-gradient(0deg, #0DE5FF 0%, #33C2FF 20%, #A05CFF 80%, #C53AFF 100%); margin: 0 15px; transform: translateY(35%);"></div>

        <span style="margin-right:8px;">Desde el día</span>
        <label for="inicioPrimero"></label>
        <input type="date" name="inicioPrimero" id="iniPrimero" class="date-picker">

        <span style="margin-left: 25px; margin-right: 8px;">hasta el día</span>
        <label for="finPrimero"></label>
        <input type="date" name="finPrimero" id="finPrimero" class="date-picker">
    </div>

    <div class="b-example-divider"></div>
    <div class="b-example-divider"></div>
    <div class="b-example-divider"></div>
    
    <h5 style="text-align: center;">ACTUALIZACIÓN DE INFORMACIÓN</h5>

    <div class="b-example-divider"></div>
    <div class="b-example-divider"></div>
    
    <div style="justify-self: center; font-family:'Kodchasan';">
        <button id="btnDelete" class="botonesMaster" 
            style="border-radius: 22px; color:cornsilk; background-image: linear-gradient(90deg,rgb(12, 138, 152),rgb(33, 49, 109) 95%); width:275px; height:30px;  display:inline; justify-self:center; margin-right: 10px">
            Borrar información actual
        </button>
    
        <button id="btnUpload" class="botonesMaster" 
            style="border-radius: 22px; color:cornsilk; background-image: linear-gradient(90deg,rgb(116, 11, 161),rgb(33, 49, 109) 95%); width:275px; height:30px;  display:inline; justify-self:center; margin-left: 10px">
            Subir información nueva
        </button>
    
        <!-- Input oculto para seleccionar archivo -->
        <input type="file" id="fileInput" accept=".csv" style="display: none;">
    
        <!-- Mostrar nombre del archivo seleccionado -->
        <p id="fileName" style="text-align:center; margin-top:10px;"></p>
    </div>

    <div class="b-example-divider"></div>
    <div class="b-example-divider"></div>
    <div class="b-example-divider"></div>
    <div class="b-example-divider"></div>

    <h3 style="text-align: center;"><b>UNIDADES DE APRENDIZAJE ACTUALES</b></h3>

    <div class="b-example-divider"></div>

   

    <div style="justify-self: center; position: relative;">
        <input type="text" name="materiaBuscar" id="materiaBuscar" placeholder="buscar UA..." 
            style="width: 585px; height: 40px; border-radius: 10px; background-color: #1F2540; border: none; border-bottom: 2px solid #0DE5FF;; padding-left: 10px; padding-right: 30px; color: cornsilk;">
        <img src="/img/lupa.png" alt="lupa" 
            id="lupaIcon" style="position: absolute; right: 15px; top: 50%; transform: translateY(-50%); height: 20px; cursor: pointer; filter: invert(1);">
    </div>

    <div id="materiasContainer" class="mt-4"></div>
    <div id="paginationContainer" class="text-center mt-3"></div>

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
        
        /*
        ::-webkit-datetime-edit
        ::-webkit-datetime-edit-fields-wrapper
        ::-webkit-datetime-edit-text

        ::-webkit-datetime-edit-year-field
        ::-webkit-datetime-edit-month-field
        ::-webkit-datetime-edit-week-field
        ::-webkit-datetime-edit-day-field
        ::-webkit-datetime-edit-hour-field
        ::-webkit-datetime-edit-minute-field
        ::-webkit-datetime-edit-second-field
        ::-webkit-datetime-edit-millisecond-field
        ::-webkit-datetime-edit-ampm-field
        */
    </style>

    <script>
        // Eliminar el ícono de la lupa al hacer clic en el input
        document.getElementById('materiaBuscar').addEventListener('click', function() {
            document.getElementById('lupaIcon').style.display = 'none';
        });

        // Mostrar el ícono de la lupa cuando se deje de escribir (cuando el input esté vacío)
        document.getElementById('materiaBuscar').addEventListener('input', function() {
            // Si el campo de texto está vacío, mostrar el ícono de la lupa
            if (this.value === '') {
                document.getElementById('lupaIcon').style.display = 'block';
            }
        });

        // Mostrar el ícono cuando el campo pierda el foco (cuando se deja de escribir)
        document.getElementById('materiaBuscar').addEventListener('blur', function() {
            if (this.value === '') {
                document.getElementById('lupaIcon').style.display = 'block';
            }
        });

        document.getElementById('btnUpload').addEventListener('click', function() {
        document.getElementById('fileInput').click();
        });

        document.getElementById('fileInput').addEventListener('change', function(event) {
            let file = event.target.files[0];
            if (file) {
                document.getElementById('fileName').textContent = "Archivo seleccionado: " + file.name;
                uploadCSV(file);
            }
        });

        document.getElementById('btnDelete').addEventListener('click', function() {
            if (confirm("⚠️ ¿Estás seguro de que deseas borrar todos los exámenes? Esta acción no se puede deshacer.")) {
                fetch('/deleteExams', {
                    method: 'POST',
                })
                .then(response => response.text())
                .then(data => alert(data))
                .catch(error => console.error("Error:", error));
            }
        });


        function uploadCSV(file) {
            let formData = new FormData();
            formData.append("csvFile", file);
        
            fetch("/uploadCSV", {
                method: "POST",
                body: formData
            })
            .then(response => response.text())
            .then(data => alert(data))
            .catch(error => console.error("Error:", error));
        }

        let currentPage = 1;

    function fetchMaterias(page = 1) {
        const query = document.getElementById("materiaBuscar").value;
    
        fetch(`/getMateriasAgrupadas?q=${encodeURIComponent(query)}&page=${page}`)
            .then(res => res.json())
            .then(data => {
                renderMaterias(data);
                currentPage = page;
            });
    }
    
    function renderMaterias(materias) {
        const container = document.getElementById("materiasContainer");
        container.innerHTML = "";

        if (materias.length === 0) {
            container.innerHTML = "<p style='text-align:center; color:cornsilk;'>No se encontraron materias.</p>";
            return;
        }

        materias.forEach(item => {
            const formattedParcial = item.Parciales.includes('1') && item.Parciales.includes('2') 
                ? '1P & 2P' 
                : (item.Parciales.includes('1') ? '1P' : '2P');

            // Construcción de texto de fechas por parcial
            let fechasHTML = "";
            if (item.Fecha1P) {
                fechasHTML += `<span class="text-secondary-custom">1P:</span> <strong>${item.Fecha1P}</strong><br>`;
            }
            if (item.Fecha2P) {
                fechasHTML += `<span class="text-secondary-custom">2P:</span> <strong>${item.Fecha2P}</strong>`;
            }

            const html = `
                <div class="b-example-divider"></div>   
                <div class="b-example-divider"></div>
                    
                <div class="card-custom mx-sm-5 mx-2">
                    <div class="info-examen">
                        <h4 class="mb-2 text-start">${item.Materia}</h4>
                        <p class="mb-1 text-start">
                            <span class="text-secondary-custom">Gpo:</span>
                            <span class="gpo"><strong class="truncate-text">${item.Grupo}</strong></span>
                        </p>
                        <p class="mb-1 text-start">
                            <span class="text-secondary-custom">Plan:</span>
                            <span class="plan"><strong class="truncate-text">${item.Plan}</strong></span>
                        </p>
                        <p class="mb-1 text-start">
                            <span class="text-secondary-custom">Carrera:</span>
                            <strong>${item.Carrera}</strong>
                        </p>
                        <p class="mb-1 text-start">
                            ${fechasHTML}
                            <br><span class="time-text">${item.Hora} hrs</span>
                        </p>
                    </div>
                    <div class="num-parcial text-center">
                        <div class="badge-custom">${formattedParcial}</div>
                        <button class="btn btn-sm btn-warning mt-2" onclick="window.location.href='/editarUnidad?materia=${encodeURIComponent(item.Materia)}&grupo=${encodeURIComponent(item.Grupo)}&plan=${encodeURIComponent(item.Plan)}&carrera=${encodeURIComponent(item.Carrera)}'">Editar</button>
                    </div>
                </div>
            `;


            container.innerHTML += html;
        });

        renderPaginationControls();
    }

    
    function renderPaginationControls() {
        const pagContainer = document.getElementById("paginationContainer");
        pagContainer.innerHTML = `
            <button onclick="fetchMaterias(${currentPage - 1})" ${currentPage === 1 ? 'disabled' : ''}>Anterior</button>
            <span style="margin: 0 10px; color: cornsilk;">Página ${currentPage}</span>
            <button onclick="fetchMaterias(${currentPage + 1})">Siguiente</button>
        `;
    }
    
    document.getElementById("materiaBuscar").addEventListener("input", () => fetchMaterias(1));
    window.addEventListener("DOMContentLoaded", () => fetchMaterias());
    </script>
</body>
</html>
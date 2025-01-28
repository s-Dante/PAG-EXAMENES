
// Script para mostrar unidades por semestre

// const unidadesPorSemestre = {
//     "Todos": [
//         //Primero
//         "Liderazgo, emprendimiento e innovación", "Responsabilidad social y desarrollo sustentable", 
//         "Metodología de la programación", "Álgebra", "Cálculo diferencial", "Geometría analítica",

//         //Segundo
//         "Cultura de paz y derechos humanos", "Ética, transparencia y cultura de la legalidad", 
//         "Igualdad de género, diversidad sexual e inclusión", "Tópicos de álgebra", "Cálculo integral",
//         "Mecánica traslacional y rotacional", "Programación básica", 
         
//         //Tercero
//         "Programación estructurada", "Relaciones espaciales para videojuegos", "Producción multimedia", "Fundamentos del dibujo artístico", 
//         "Metodologías ágiles de trabajo", "Proyección de negocios tecnológicos y animaciones", "Modelado arquitectónico",

//         //Cuarto
//         "Programación avanzada", "Transformaciones gráficas para videojuegos", "Fundamentos de los videojuegos", 
//         "Tecnologías multimedia", "Fotografía digital", "Modelo de administración de datos", "Fundamentos de la animación", 
//         "Modelado orgánico", "Interfaz de programación de aplicaciones", "Cultura de la paz (Plan 420)", 
//         "Estructura de datos (Plan 420)", "Lógica digital (Plan 420)", "Propiedad intelectual (Plan 420)", 
//         "Programación orientada a objetos (Plan 420)", "Sistemas operativos (Plan 420)", "Lenguaje ensamblador (Plan 420)",

//         //Quinto
//         "Modelos de administración de datos", "Gráficas computacionales I", "Diseño de hápticos", "Cinematografía", 
//         "Administración de alto volumen de datos", "Animación básica", "Preproducción de vídeo", "Preproducción 2D",

//         //Sexto
//         "Redes computacionales", "Programación web I", "Guionismo", "Gráficas computacionales II", 
//         "Escenarios de videojuegos", "Modelado en alto poligonaje", "Interface y experiencia de usuario en web", 
//         "Ilustración digital", "Efectos Visuales I", 
        
//         //Septimo
//         "Programación web de capa intermedia", "Programación orientada a internet", 
//         "Optimización de videojuegos", "Gráficas computacionales en web", "Base de datos multimedia", "Administración de proyectos", 
//         "Actuación y dirección para animación", "Animación tradicional de humanos y de animales", "Efectos visuales II",
        
//         //Octavo
//         "Diseño de videojuegos en línea", "Mercadotecnia", "Procesamiento de imágenes", "Programación web II", "Realidad virtual", 
//         "Administración de servidores", "Animación tradicional de escenarios", "Esqueletos de personajes", "Iluminación y audio",

//         //Noveno
//         "Proyección personal y de productos", "Ingeniería de software", "Postproducción"
//     ],
//     "Primero": ["Todas", "Liderazgo, emprendimiento e innovación", "Responsabilidad social y desarrollo sustentable", "Metodología de la programación", "Álgebra", "Cálculo diferencial", "Geometría analítica"],
//     "Segundo": ["Todas", "Cultura de paz y derechos humanos", "Ética, transparencia y cultura de la legalidad", "Igualdad de género, diversidad sexual e inclusión", "Tópicos de álgebra", "Cálculo integral", "Mecánica traslacional y rotacional", "Programación básica"],
//     "Tercero": ["Todas", "Programación estructurada", "Relaciones espaciales para videojuegos", "Producción multimedia", "Fundamentos del dibujo artístico", "Metodologías ágiles de trabajo", "Proyección de negocios tecnológicos y animaciones", "Modelado arquitectónico"],
//     "Cuarto": ["Todas", "Programación avanzada", "Transformaciones gráficas para videojuegos", "Fundamentos de los videojuegos", "Tecnologías multimedia", "Fotografía digital", "Modelo de administración de datos", "Fundamentos de la animación", "Modelado orgánico", "Interfaz de programación de aplicaciones", "Cultura de la paz (Plan 420)", "Estructura de datos (Plan 420)", "Lógica digital (Plan 420)", "Propiedad intelectual (Plan 420)", "Programación orientada a objetos (Plan 420)", "Sistemas operativos (Plan 420)", "Lenguaje ensamblador (Plan 420)"],
//     "Quinto": ["Todas", "Liderazgo, emprendimiento e innovación", "Modelos de administración de datos", "Gráficas computacionales I", "Fotografía digital", "Diseño de hápticos", "Cinematografía", "Administración de alto volumen de datos", "Animación básica", "Preproducción de vídeo", "Preproducción 2D"],
//     "Sexto": ["Todas", "Redes computacionales", "Programación web I", "Guionismo", "Gráficas computacionales II", "Escenarios de videojuegos", "Modelado en alto poligonaje", "Interface y experiencia de usuario en web", "Ilustración digital", "Efectos Visuales I"],
//     "Septimo": ["Todas", "Programación web de capa intermedia", "Programación orientada a internet", "Optimización de videojuegos", "Gráficas computacionales en web", "Base de datos multimedia", "Administración de proyectos", "Actuación y dirección para animación", "Animación tradicional de humanos y de animales", "Efectos visuales II"],
//     "Octavo": ["Todas", "Diseño de videojuegos en línea", "Mercadotecnia", "Procesamiento de imágenes", "Programación web II", "Realidad virtual", "Administración de servidores", "Animación tradicional de escenarios", "Esqueletos de personajes", "Iluminación y audio"],
//     "Noveno": ["Todas", "Proyección personal y de productos", "Ingeniería de software", "Postproducción"]
// };

// Manejador del cambio en el semestre
// Lógica para cargar las materias según el semestre seleccionado
document.getElementById('semestre').addEventListener('change', function () {
    const semestre = this.value;
    const uaSelect = document.getElementById('ua');

    // Limpiar opciones previas
    uaSelect.innerHTML = '';

    if (semestre === 'Todos' || semestre === '') {
        // Mostrar solo "Selecciona un semestre" si no es válido
        const defaultOption = document.createElement('option');
        defaultOption.value = '';
        defaultOption.textContent = 'Selecciona un semestre';
        uaSelect.appendChild(defaultOption);
        return;
    }

    // Llamada al backend para obtener materias
    fetch(`/getMaterias?semestre=${semestre}`)
        .then(response => response.json())
        .then(materias => {
            // Agregar opción extra "Todas"
            const allOption = document.createElement('option');
            allOption.value = 'Todas';
            allOption.textContent = 'Todas';
            uaSelect.appendChild(allOption);

            // Agregar materias obtenidas del backend
            if (materias.length > 0) {
                materias.forEach(materia => {
                    const option = document.createElement('option');
                    option.value = materia;
                    option.textContent = materia;
                    uaSelect.appendChild(option);
                });
            } else {
                const option = document.createElement('option');
                option.value = '';
                option.textContent = 'No hay materias disponibles';
                uaSelect.appendChild(option);
            }
        })
        .catch(error => {
            console.error('Error al cargar las materias:', error);
        });
});

// Disparar evento de cambio inicial para cargar las opciones al cargar la página
document.getElementById('semestre').dispatchEvent(new Event('change'));

// Eventos que disparan la actualización del calendario y de los exámenes
document.getElementById('parcial').addEventListener('change', cargarExamenes);
document.getElementById('ua').addEventListener('change', cargarExamenes);
document.getElementById('semestre').addEventListener('change', cargarExamenes);

function cargarExamenes() {
    const ua = document.getElementById('ua').value;
    const semestre = document.getElementById('semestre').value;
    const parcial = document.getElementById('parcial').value;

    // Llamada al backend para obtener exámenes según filtros
    fetch(`/getExams?semestre=${encodeURIComponent(semestre)}&materia=${encodeURIComponent(ua)}&parcial=${encodeURIComponent(parcial)}`)
        .then(response => response.json())
        .then(exams => {
            const examDetails = document.getElementById('exam-details');
            examDetails.innerHTML = ''; // Limpiar contenido previo

            if (exams.length > 0) {
                // Agrupar exámenes por fecha
                const groupedExams = exams.reduce((acc, exam) => {
                    if (!acc[exam.Fecha]) acc[exam.Fecha] = [];
                    acc[exam.Fecha].push(exam);
                    return acc;
                }, {});

                // Inicializar el calendario con los exámenes agrupados
                initializeCalendar(groupedExams);

                // Mostrar detalles de los exámenes actuales en la sección de detalles
                exams.forEach(exam => {
                    const title = exam.Materia;
                    const group = exam.Grupo ?? 'No asignado';
                    const hora = exam.Hora;
                    const parcialText = exam.Parcial === '1' ? '1P' : (exam.Parcial === '2' ? '2P' : exam.Parcial);
                    const selectedDate = exam.Fecha;

                    examDetails.innerHTML += `
                        <div class="b-example-divider"></div>
                        <div class="card-custom mx-sm-5 mx-2">
                            <div class="info-examen">
                                <h4 class="mb-2 text-start">${title}</h4>
                                <p class="mb-1 text-start">
                                    <span class="text-secondary-custom">Gpo:</span>
                                    <span class="gpo"><strong>${group}</strong></span>
                                </p>
                                <p class="mb-1">
                                    <span class="text-secondary-custom text-start fecha" style="margin-right: 10px">
                                        <strong>${selectedDate}</strong>
                                    </span>
                                    <span class="time-text">${hora} hrs</span>
                                </p>
                            </div>
                            <div class="num-parcial">
                                <div class="badge-custom text-center"><strong>${parcialText}</strong></div>
                            </div>
                        </div>
                    `;
                });
            } else {
                examDetails.innerHTML = '<p class="text-center">No hay exámenes disponibles.</p>';
            }
        })
        .catch(error => {
            console.error('Error al cargar los exámenes:', error);
        });
}

// Inicializar el calendario
function initializeCalendar(groupedExams) {
    const calendar = new FullCalendar.Calendar(document.getElementById('calendar'), {
        locale: 'es',
        firstDay: 1,
        contentHeight: '250px',
        aspectRatio: 1,
        headerToolbar: {
            start: 'prev',
            center: 'title',
            end: 'next'
        },
        events: Object.keys(groupedExams).map(date => ({
            title: `Exámenes del ${date}`,
            start: date,
            extendedProps: {
                exams: groupedExams[date] // Almacena los exámenes de ese día
            }
        })),
        dateClick: function (info) {
            const selectedDate = info.dateStr;
            const examsOnSameDate = groupedExams[selectedDate]; // Obtener los exámenes de ese día

            let detailsHTML = '';
            if (examsOnSameDate) {
                examsOnSameDate.forEach(exam => {
                    const { group, hora, parcial = 'N/A', semestre = 'N/A', details = 'Sin detalles' } = exam;
                    const title = exam.Materia || 'Sin título';

                    const formattedParcial = parcial === '1°' ? '1P' : (parcial === '2°' ? '2P' : parcial);

                    detailsHTML += `
                        <div class="b-example-divider"></div>
                        <div class="card-custom mx-sm-5 mx-2">
                            <div class="info-examen">
                                <h4 class="mb-2 text-start">${title}</h4>
                                <p class="mb-1 text-start">
                                    <span class="text-secondary-custom">Gpo:</span>
                                    <span class="gpo"><strong>${group || 'No asignado'}</strong></span>
                                </p>
                                <p class="mb-1">
                                    <span class="text-secondary-custom text-start fecha" style="margin-right: 10px">
                                        <strong>${selectedDate}</strong>
                                    </span>
                                    <span class="time-text">${hora} hrs</span>
                                </p>
                            </div>
                            <div class="num-parcial">
                                <div class="badge-custom text-center"><strong>${formattedParcial}</strong></div>
                            </div>
                        </div>
                    `;
                });
            } else {
                detailsHTML = '<p>No hay exámenes programados para este día.</p>';
            }

            document.getElementById('exam-details').innerHTML = detailsHTML;
        }
    });

    calendar.render();
}

/* 
// Datos del calendario Materia, Gpo, Fecha, Hora, Parcial
const examData = [
    { date: '2025-01-15', semestre: 'Primero', ua: 'Álgebra', parcial: '1°', details: 'Examen de Matemáticas - 1° Parcial', group: '001', hora: '18:00' },
    { date: '2025-01-15', semestre: 'Primero', ua: 'Matemáticas', parcial: '1°', details: 'Repetición del examen - Matemáticas', group: '001', hora: '19:00' },
    { date: '2025-01-15', semestre: 'Primero', ua: 'Matemáticas', parcial: '1°', details: 'Repetición del examen - Matemáticas', group: '001', hora: '19:00' },
    { date: '2025-01-15', semestre: 'Primero', ua: 'Matemáticas', parcial: '1°', details: 'Repetición del examen - Matemáticas', group: '001', hora: '19:00' },
    { date: '2025-01-16', semestre: 'Segundo', ua: 'Física', parcial: '1°', details: 'Examen de Física - 1° Parcial', group: '002', hora: '17:00' },
    { date: '2025-01-18', semestre: 'Tercero', ua: 'Química', parcial: '2°', details: 'Examen de Química - 2° Parcial', group: '003', hora: '16:00' },
    { date: '2025-01-20', semestre: 'Primero', ua: 'Matemáticas', parcial: '2°', details: 'Examen de Matemáticas - 2° Parcial', group: '001', hora: '18:00' }
];

// Agrupar los exámenes por fecha
const groupedExams = examData.reduce((acc, exam) => {
    if (!acc[exam.date]) {
        acc[exam.date] = [];
    }
    acc[exam.date].push(exam);
    return acc;
}, {});

// Inicializar el calendario
const calendar = new FullCalendar.Calendar(document.getElementById('calendar'), {
    locale: 'es',
    firstDay: 1,
    contentHeight: '250px',
    aspectRatio: 1,
    headerToolbar: {
        start: 'prev',
        center: 'title',
        end: 'next'
    },

    views: {
        dayGridMonth: {
            titleFormat: {year: 'numeric', month: 'long'},
            day: 'short'
        }
    },
    events: Object.keys(groupedExams).map(date => ({
        title: `Exámenes del ${date}`,
        start: date,
        extendedProps: {
            exams: groupedExams[date] // Almacena los exámenes de ese día
        }
    })),   
    dateClick: function(info) {
        const selectedDate = info.dateStr;
        const examsOnSameDate = groupedExams[selectedDate]; // Obtener los exámenes de ese día
    
        let detailsHTML = '';
        if (examsOnSameDate) {
            examsOnSameDate.forEach(exam => {
                const { group, hora, parcial = 'N/A', semestre = 'N/A', details = 'Sin detalles' } = exam;
                const title = exam.ua || 'Sin título';
    
                const formattedParcial = parcial === '1°' ? '1P' : (parcial === '2°' ? '2P' : parcial);

                detailsHTML += `
                    <div class="b-example-divider"></div>

                    <div class="card-custom mx-sm-5 mx-2">
                        <div class:"info-examen">
                            <h4 class="mb-2 text-start">${title}</h4>
                            <p class="mb-1 text-start">
                                <span class="text-secondary-custom">Gpo:</span>
                                <span class:"gpo"><strong>${group || 'No asignado'}</strong></span>
                            </p>
                            <p class="mb-1">
                                <span class="text-secondary-custom text-start fecha" style="margin-right: 10px"> <strong>${selectedDate}</strong></span>
                                <span class="time-text">${hora} hrs</span>
                            </p>
                        </div>
                        <div class="num-parcial">
                            <div class="badge-custom text-center"><strong>${formattedParcial}</strong></div>
                        </div>
                    </div>
                `;
            });
        } else {
            detailsHTML = `
            <div class="b-example-divider"></div>
            <div class="b-example-divider"></div>

            <p>No hay exámenes programados para este día.</p>`;
        }
    
        document.getElementById('exam-details').innerHTML = detailsHTML;
    }
});

calendar.render();



//Pintar los dias con examenes
function applyDayColors(groupedFilteredData) {
    // Primero, limpiamos los colores previos de los días
    document.querySelectorAll('.fc-day').forEach(day => {
        day.style.backgroundColor = ''; // Limpiar el color
    });

    // Ahora recorremos las fechas con exámenes y cambiamos el color
    Object.keys(groupedFilteredData).forEach(date => {
        const dayCell = document.querySelector(`.fc-day[data-date="${date}"]`);
        if (dayCell) {
            dayCell.style.backgroundColor = '#c43affb1';  // Establece el color de fondo del día

            // Si quieres añadir más personalización, puedes agregar clases o más estilos.
            dayCell.classList.add('has-exam'); // Clase personalizada para el día con examen
        }
    });
}
 */



// // Agregar eventos de cambio a los filtros
// document.getElementById('semestre').addEventListener('change', filterEvents);
// document.getElementById('ua').addEventListener('change', filterEvents);
// document.getElementById('parcial').addEventListener('change', filterEvents);

// Inicializar los filtros
// filterEvents();

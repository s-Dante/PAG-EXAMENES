// Script para mostrar unidades por semestre
const unidadesPorSemestre = {
    "Todos": [
        //Primero
        "Liderazgo, emprendimiento e innovación", "Responsabilidad social y desarrollo sustentable", 
        "Metodología de la programación", "Álgebra", "Cálculo diferencial", "Geometría analítica",

        //Segundo
        "Cultura de paz y derechos humanos", "Ética, transparencia y cultura de la legalidad", 
        "Igualdad de género, diversidad sexual e inclusión", "Tópicos de álgebra", "Cálculo integral",
        "Mecánica traslacional y rotacional", "Programación básica", 
         
        //Tercero
        "Programación estructurada", "Relaciones espaciales para videojuegos", "Producción multimedia", "Fundamentos del dibujo artístico", 
        "Metodologías ágiles de trabajo", "Proyección de negocios tecnológicos y animaciones", "Modelado arquitectónico",

        //Cuarto
        "Programación avanzada", "Transformaciones gráficas para videojuegos", "Fundamentos de los videojuegos", 
        "Tecnologías multimedia", "Fotografía digital", "Modelo de administración de datos", "Fundamentos de la animación", 
        "Modelado orgánico", "Interfaz de programación de aplicaciones", "Cultura de la paz (Plan 420)", 
        "Estructura de datos (Plan 420)", "Lógica digital (Plan 420)", "Propiedad intelectual (Plan 420)", 
        "Programación orientada a objetos (Plan 420)", "Sistemas operativos (Plan 420)", "Lenguaje ensamblador (Plan 420)",

        //Quinto
        "Modelos de administración de datos", "Gráficas computacionales I", "Diseño de hápticos", "Cinematografía", 
        "Administración de alto volumen de datos", "Animación básica", "Preproducción de vídeo", "Preproducción 2D",

        //Sexto
        "Redes computacionales", "Programación web I", "Guionismo", "Gráficas computacionales II", 
        "Escenarios de videojuegos", "Modelado en alto poligonaje", "Interface y experiencia de usuario en web", 
        "Ilustración digital", "Efectos Visuales I", 
        
        //Septimo
        "Programación web de capa intermedia", "Programación orientada a internet", 
        "Optimización de videojuegos", "Gráficas computacionales en web", "Base de datos multimedia", "Administración de proyectos", 
        "Actuación y dirección para animación", "Animación tradicional de humanos y de animales", "Efectos visuales II",
        
        //Octavo
        "Diseño de videojuegos en línea", "Mercadotecnia", "Procesamiento de imágenes", "Programación web II", "Realidad virtual", 
        "Administración de servidores", "Animación tradicional de escenarios", "Esqueletos de personajes", "Iluminación y audio",

        //Noveno
        "Proyección personal y de productos", "Ingeniería de software", "Postproducción"
    ],
    "Primero": ["Todas", "Liderazgo, emprendimiento e innovación", "Responsabilidad social y desarrollo sustentable", "Metodología de la programación", "Álgebra", "Cálculo diferencial", "Geometría analítica"],
    "Segundo": ["Todas", "Cultura de paz y derechos humanos", "Ética, transparencia y cultura de la legalidad", "Igualdad de género, diversidad sexual e inclusión", "Tópicos de álgebra", "Cálculo integral", "Mecánica traslacional y rotacional", "Programación básica"],
    "Tercero": ["Todas", "Programación estructurada", "Relaciones espaciales para videojuegos", "Producción multimedia", "Fundamentos del dibujo artístico", "Metodologías ágiles de trabajo", "Proyección de negocios tecnológicos y animaciones", "Modelado arquitectónico"],
    "Cuarto": ["Todas", "Programación avanzada", "Transformaciones gráficas para videojuegos", "Fundamentos de los videojuegos", "Tecnologías multimedia", "Fotografía digital", "Modelo de administración de datos", "Fundamentos de la animación", "Modelado orgánico", "Interfaz de programación de aplicaciones", "Cultura de la paz (Plan 420)", "Estructura de datos (Plan 420)", "Lógica digital (Plan 420)", "Propiedad intelectual (Plan 420)", "Programación orientada a objetos (Plan 420)", "Sistemas operativos (Plan 420)", "Lenguaje ensamblador (Plan 420)"],
    "Quinto": ["Todas", "Liderazgo, emprendimiento e innovación", "Modelos de administración de datos", "Gráficas computacionales I", "Fotografía digital", "Diseño de hápticos", "Cinematografía", "Administración de alto volumen de datos", "Animación básica", "Preproducción de vídeo", "Preproducción 2D"],
    "Sexto": ["Todas", "Redes computacionales", "Programación web I", "Guionismo", "Gráficas computacionales II", "Escenarios de videojuegos", "Modelado en alto poligonaje", "Interface y experiencia de usuario en web", "Ilustración digital", "Efectos Visuales I"],
    "Septimo": ["Todas", "Programación web de capa intermedia", "Programación orientada a internet", "Optimización de videojuegos", "Gráficas computacionales en web", "Base de datos multimedia", "Administración de proyectos", "Actuación y dirección para animación", "Animación tradicional de humanos y de animales", "Efectos visuales II"],
    "Octavo": ["Todas", "Diseño de videojuegos en línea", "Mercadotecnia", "Procesamiento de imágenes", "Programación web II", "Realidad virtual", "Administración de servidores", "Animación tradicional de escenarios", "Esqueletos de personajes", "Iluminación y audio"],
    "Noveno": ["Todas", "Proyección personal y de productos", "Ingeniería de software", "Postproducción"]
};

// Manejador del cambio en el semestre
document.getElementById('semestre').addEventListener('change', function() {
    const semestreSeleccionado = this.value;
    const uaSelect = document.getElementById('ua');

    uaSelect.innerHTML = "";

    if (semestreSeleccionado === "Todos") {
        const option = document.createElement("option");
        option.value = "Todas";
        option.textContent = "Todas las materias";
        uaSelect.appendChild(option);
    } else {
        const unidades = unidadesPorSemestre[semestreSeleccionado];
        unidades.forEach(function(ua) {
            const option = document.createElement("option");
            option.value = ua;
            option.textContent = ua;
            uaSelect.appendChild(option);
        });
    }
});

document.getElementById('semestre').dispatchEvent(new Event('change'));



// Datos del calendario Materia, Gpo, Fecha, Hora, Parcial
const examData = [
    { date: '2025-01-15', semestre: 'Primero', ua: 'Álgebra', parcial: '1°', details: 'Examen de Matemáticas - 1° Parcial', group: '001', hora: '18:00' },
    { date: '2025-01-15', semestre: 'Primero', ua: 'Matemáticas', parcial: '1°', details: 'Repetición del examen - Matemáticas', group: '001', hora: '19:00' },
    { date: '2025-01-16', semestre: 'Segundo', ua: 'Física', parcial: '1°', details: 'Examen de Física - 1° Parcial', group: '002', hora: '17:00' },
    { date: '2025-01-18', semestre: 'Tercero', ua: 'Química', parcial: '2°', details: 'Examen de Química - 2° Parcial', group: '003', hora: '16:00' },
    { date: '2025-01-20', semestre: 'Primero', ua: 'Matemáticas', parcial: '2°', details: 'Examen de Matemáticas - 2° Parcial', group: '001', hora: '18:00' }
];

// Inicializar el calendario
const calendar = new FullCalendar.Calendar(document.getElementById('calendar'), {
    locale: 'es',
    firstDay: 1,
    contentHeight: '50rem',
    aspectRatio: 0.5,
    headerToolbar: {
        start: 'prev',
        center: 'title',
        end: 'next'
    },
    views: {
        dayGridMonth: {
            titleFormat: {year: 'numeric', month: 'long'},
            day: 'short,uppercase'
        }
    },
    //initialView: 'dayGridMonth',
    events: examData.map(exam => ({
        title: exam.ua || 'Sin título',
        start: exam.date,
        extendedProps: {
            semestre: exam.semestre || 'N/A',
            parcial: exam.parcial || 'N/A',
            details: exam.details || 'Sin detalles',
            hora: exam.hora,
            group: exam.group
        }
    })),
    eventClick: function(info) {
        const selectedDate = info.event.startStr;
        const eventsOnSameDate = calendar.getEvents().filter(event => event.startStr === selectedDate);
    
        let detailsHTML = '';
        eventsOnSameDate.forEach(event => {
            const { group, hora, parcial = 'N/A', semestre = 'N/A', details = 'Sin detalles' } = event.extendedProps;
            const title = event.title || 'Sin título';
    
            detailsHTML += `
                <div class="b-example-divider"></div>

                <div class="card-custom mx-5">
                    <div>
                        <h5 class="mb-2">${title}</h5>
                        <p class="mb-0 text-secondary-custom"><strong>Gpo:</strong> ${group || 'No asignado'}</p>
                        <p class="mb-0">
                            <span class="text-secondary-custom">${selectedDate} / </span>
                            <span class="time-text">${hora} hrs</span>
                        </p>
                    </div>
                    <div>
                        <div class="badge-custom">${parcial}</div>
                    </div>
                </div>
            `;
        });
    
        document.getElementById('exam-details').innerHTML = detailsHTML;
    }
    
});

calendar.render();

// Filtrar los eventos según los valores seleccionados en los filtros
function filterEvents() {
    const semestre = document.getElementById('semestre').value;
    const ua = document.getElementById('ua').value;
    const parcial = document.getElementById('parcial').value;

    const filteredData = examData.filter(exam => {
        return (semestre === 'Todos' || exam.semestre === semestre) &&
            (ua === 'Todas' || exam.ua === ua) &&
            (parcial === '' || exam.parcial === parcial);
    });

    calendar.removeAllEvents();
    calendar.addEventSource(filteredData.map(exam => ({
        title: exam.ua,
        start: exam.date,
        extendedProps: { semestre: exam.semestre, parcial: exam.parcial, details: exam.details, hora: exam.hora, group: exam.group }
    })));
}

// Agregar eventos de cambio a los filtros
document.getElementById('semestre').addEventListener('change', filterEvents);
document.getElementById('ua').addEventListener('change', filterEvents);
document.getElementById('parcial').addEventListener('change', filterEvents);

// Inicializar los filtros
filterEvents();

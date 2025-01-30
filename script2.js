// Variables globales
let calendarInstance = null;
let currentPage = 0;
const examsPerPage = 5;

// Carga inicial
document.addEventListener('DOMContentLoaded', function () {
    cargarExamenes();
    document.getElementById('semestre').dispatchEvent(new Event('change'));
});

// Manejo de semestre (igual que antes)
document.getElementById('semestre').addEventListener('change', function () {
    // ... (mismo código original para manejar semestres)
});

// Eventos de filtro con debounce
document.getElementById('parcial').addEventListener('change', debounce(cargarExamenes, 300));
document.getElementById('ua').addEventListener('change', debounce(cargarExamenes, 300));
document.getElementById('semestre').addEventListener('change', debounce(cargarExamenes, 300));

// Función principal para cargar exámenes
function cargarExamenes() {
    const ua = document.getElementById('ua').value;
    const semestre = document.getElementById('semestre').value;
    const parcial = document.getElementById('parcial').value;

    fetch(`/getExams?semestre=${encodeURIComponent(semestre)}&materia=${encodeURIComponent(ua)}&parcial=${encodeURIComponent(parcial)}`)
        .then(response => response.json())
        .then(exams => {
            const groupedExams = groupExamsByDate(exams);
            updateCalendar(groupedExams);
            updateExamList(exams); // Mostrar lista paginada por defecto
            document.getElementById('pagination-controls').style.display = 'block'; // Mostrar paginación
            sessionStorage.setItem('currentExams', JSON.stringify(exams));
        })
        .catch(console.error);
}

// Función para manejar clic en fecha del calendario
function handleDateClick(info) {
    const selectedDate = info.dateStr;
    const exams = calendarInstance.getEvents().filter(event => 
        event.startStr === selectedDate
    ).flatMap(event => event.extendedProps.exams);

    const examDetails = document.getElementById('exam-details');
    examDetails.innerHTML = exams.length > 0 
        ? exams.map(exam => createExamCard(exam, selectedDate)).join('')
        : createNoExamsTemplate();

    document.getElementById('pagination-controls').style.display = 'none'; // Ocultar paginación
}

// Función para crear tarjetas de examen (similar a versión anterior)
function createExamCard(exam, date) {
    const formattedParcial = exam.parcial === '1' ? '1P' : exam.parcial === '2' ? '2P' : exam.parcial;
    
    return `
        <div class="card-custom">
            <div class="info-examen">
                <h4>${exam.Materia}</h4>
                <p>Grupo: ${exam.group}</p>
                <p>Fecha: ${date} - ${exam.hora} hrs</p>
            </div>
            <div class="num-parcial">
                <div class="badge-custom">${formattedParcial}</div>
            </div>
        </div>
    `;
}

// Actualizar calendario (versión optimizada)
function updateCalendar(groupedExams) {
    const calendarElement = document.getElementById('calendar');
    
    if (!calendarInstance) {
        // Configuración inicial del calendario
        calendarInstance = new FullCalendar.Calendar(calendarElement, {
            locale: 'es',
            firstDay: 1,
            initialView: 'dayGridMonth',
            headerToolbar: {
                start: 'prev',
                center: 'title',
                end: 'next'
            },
            events: Object.keys(groupedExams).map(date => ({
                id: date, // Identificador único para cada evento
                title: `Exámenes (${groupedExams[date].length})`,
                start: date,
                extendedProps: { exams: groupedExams[date] }
            })),
            dateClick: handleDateClick
        });
        calendarInstance.render();
    } else {
        // Actualización optimizada
        const newEvents = Object.keys(groupedExams).map(date => ({
            id: date,
            title: `Exámenes (${groupedExams[date].length})`,
            start: date,
            extendedProps: { exams: groupedExams[date] }
        }));
        
        // Eliminar solo eventos obsoletos
        calendarInstance.getEvents().forEach(event => {
            if (!newEvents.find(e => e.id === event.id)) {
                event.remove();
            }
        });
        
        // Agregar nuevos eventos
        newEvents.forEach(event => {
            if (!calendarInstance.getEventById(event.id)) {
                calendarInstance.addEvent(event);
            }
        });
    }
    applyDayColors(groupedExams);
}

// Función para aplicar estilos al calendario
function applyDayColors(groupedExams) {
    if (!calendarInstance) return;
    
    calendarInstance.getView().el.querySelectorAll('.fc-daygrid-day').forEach(day => {
        const date = day.getAttribute('data-date');
        day.style.backgroundColor = groupedExams[date] ? '#c43aff20' : '';
    });
}


function paginateExams(exams, examsPerPage) {
    const pages = [];
    for (let i = 0; i < exams.length; i += examsPerPage) {
        pages.push(exams.slice(i, i + examsPerPage));
    }
    return pages;
}

// Función para mostrar una página específica de exámenes
function showPage(pages, pageIndex) {
    const examDetails = document.getElementById('exam-details');
    examDetails.innerHTML = ''; // Limpiar contenido previo

    pages[pageIndex].forEach(exam => {
        const title = exam.Materia;
        const group = exam.Grupo ?? 'No asignado';
        const hora = exam.Hora;
        const parcialText = exam.Parcial === '1' ? '1P' : (exam.Parcial === '2' ? '2P' : exam.Parcial);
        const selectedDate = exam.Fecha;

        examDetails.innerHTML += `
            <div class="b-example-divider"></div>
            <div class="b-example-divider"></div>

            <div class="card-custom mx-sm-5 mx-2">
                <div class="info-examen">
                    <h4 class="mb-2 text-start truncate-text">${title}</h4>
                    <p class="mb-1 text-start">
                        <span class="text-secondary-custom">Gpo:</span>
                        <span class="gpo"><strong class="truncate-text">${group}</strong></span>
                    </p>
                    <p class="mb-1">
                        <span class="text-secondary-custom text-start fecha" style="margin-right: 10px">
                            <strong>${selectedDate}</strong>
                        </span>
                        <span class="time-text">${hora} hrs</span>
                    </p>
                </div>
                <div class="num-parcial">
                    <div class="badge-custom text-center">${parcialText}</div>
                </div>
            </div>
        `;
    });
}

function updatePaginationButtons(totalPages) {
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    // Deshabilitar o habilitar los botones según la página actual
    prevBtn.disabled = currentPage === 0;
    nextBtn.disabled = currentPage === totalPages - 1;
}

function groupExamsByDate(exams) {
    return exams.reduce((acc, exam) => {
        try {
            // Normaliza la fecha a formato YYYY-MM-DD
            const date = exam.Fecha 
                ? new Date(exam.Fecha).toISOString().split('T')[0] 
                : 'Fecha inválida';

            // Crea un array por fecha si no existe
            if (!acc[date]) acc[date] = [];

            // Añade el examen al grupo correspondiente
            acc[date].push({
                Materia: exam.Materia || 'Sin título',
                group: exam.Grupo || 'No asignado',
                hora: exam.Hora || 'Sin hora',
                parcial: exam.Parcial || 'N/A'
            });

            return acc;
        } catch (error) {
            console.error('Error procesando fecha:', exam.Fecha);
            return acc; // Devuelve el acumulador sin cambios
        }
    }, {}); // Objeto inicial vacío
}

function debounce(func, timeout = 300) {
    let timer;
    return (...args) => {
        clearTimeout(timer); // Cancela el temporizador anterior
        timer = setTimeout(() => {
            func.apply(this, args); // Ejecuta la función después del timeout
        }, timeout);
    };
}


// Añade esta función faltante
function createNoExamsTemplate() {
    return `
        <div class="b-example-divider"></div>
        <div class="b-example-divider"></div>
        <p class="text-center">No hay exámenes disponibles.</p>
        <div class="b-example-divider"></div>
        <div class="b-example-divider"></div>
        <img src="img/Logo-LMAD.png" alt="logotipo de LMAD">
        <div class="b-example-divider"></div>
        <div class="b-example-divider"></div>
    `;
}

// Modifica la función updateExamList para incluir parámetros
function updateExamList(exams) {
    const pages = paginateExams(exams, examsPerPage);
    currentPage = 0; // Resetear a la primera página
    showPage(pages, currentPage);
    updatePaginationButtons(pages.length);
}

// Añade el manejo de paginación al final del documento
document.getElementById('prevBtn').addEventListener('click', () => {
    if (currentPage > 0) {
        currentPage--;
        const exams = JSON.parse(sessionStorage.getItem('currentExams')) || [];
        const pages = paginateExams(exams, examsPerPage);
        showPage(pages, currentPage);
        updatePaginationButtons(pages.length);
    }
});

document.getElementById('nextBtn').addEventListener('click', () => {
    const exams = JSON.parse(sessionStorage.getItem('currentExams')) || [];
    const pages = paginateExams(exams, examsPerPage);
    if (currentPage < pages.length - 1) {
        currentPage++;
        showPage(pages, currentPage);
        updatePaginationButtons(pages.length);
    }
});

// Resto de funciones auxiliares se mantienen igual:
// - groupExamsByDate
// -- paginateExams
// -- showPage
// -- updatePaginationButtons
// - debounce
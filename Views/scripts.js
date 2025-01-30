//Carga de datos iniciales
document.addEventListener('DOMContentLoaded', function () {
    // Inicializar el calendario con los exámenes por defecto (si existen)
    cargarExamenes(); // Llamamos a cargarExamenes para cargar los exámenes iniciales

    // Disparar evento de cambio inicial para cargar las opciones al cargar la página
    document.getElementById('semestre').dispatchEvent(new Event('change'));
    document.getElementById('parcial').dispatchEvent(new Event('change'));
    document.getElementById('ua').dispatchEvent(new Event('change'));
});

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

// Eventos que disparan la actualización del calendario y de los exámenes
document.getElementById('parcial').addEventListener('change', cargarExamenes);
document.getElementById('ua').addEventListener('change', cargarExamenes);
document.getElementById('semestre').addEventListener('change', cargarExamenes);

// Función para aplicar colores a los días con exámenes
function applyDayColors(groupedExams) {
    // Verifica que `groupedExams` tiene datos
    console.log("Fechas con exámenes:", Object.keys(groupedExams));

    // Limpiar colores anteriores de todas las celdas
    document.querySelectorAll('.fc-daygrid-day').forEach(day => {
        day.style.backgroundColor = '';
        day.classList.remove('has-exam');
    });

    // Aplicar colores a las fechas con exámenes
    Object.keys(groupedExams).forEach(date => {
        const dayCell = document.querySelector(`.fc-daygrid-day[data-date="${date}"]`);
        if (dayCell) {
            console.log(`Pintando día: ${date}`);
            dayCell.style.backgroundColor = '#c43affb1'; // Color de fondo para días con exámenes
            dayCell.classList.add('has-exam'); // Clase opcional para más personalización
        } else {
            console.warn(`No se encontró la celda para la fecha: ${date}`);
        }
    });
}


// Función para inicializar el calendario con los exámenes
function initializeCalendar(groupedExams) {
    const calendarElement = document.getElementById('calendar');
    const calendar = new FullCalendar.Calendar(calendarElement, {
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
            const selectedDate = info.dateStr; // Fecha seleccionada en formato YYYY-MM-DD
            const examsOnSameDate = groupedExams[selectedDate]; // Obtener exámenes de esa fecha
        
            let detailsHTML = ''; // HTML que contendrá la información
        
            if (examsOnSameDate && examsOnSameDate.length > 0) {
                examsOnSameDate.forEach(exam => {
                    // Extraer y validar propiedades del examen
                    const { 
                        Materia = 'Sin título', 
                        group = 'No asignado', 
                        hora = 'Sin hora', 
                        parcial = 'N/A', 
                        semestre = 'N/A', 
                        details = 'Sin detalles' 
                    } = exam;
        
                    // Formatear parcial si aplica
                    const formattedParcial = parcial === '1' ? '1P' : (parcial === '2' ? '2P' : parcial);
        
                    // Construcción del HTML corregida
                    detailsHTML += `
                        <div class="b-example-divider"></div>
                        <div class="b-example-divider"></div>
        
                        <div class="card-custom mx-sm-5 mx-2">
                            <div class="info-examen">
                                <h4 class="mb-2 text-start truncate-text">${Materia}</h4>
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
                                <div class="badge-custom text-center">${formattedParcial}</div>
                            </div>
                        </div>
                    `;
                });
            } else {
                // Si no hay exámenes programados para la fecha seleccionada
                detailsHTML = `
                    <div class="b-example-divider"></div>
                    <div class="b-example-divider"></div>
        
                    <p class="text-center">No hay exámenes disponibles.</p>
        
                    <div class="b-example-divider"></div>
                    <div class="b-example-divider"></div>
        
                    <img src="img/Logo-LMAD.png" alt="logotipo de LMAD" class="img-lmad">
        
                    <div class="b-example-divider"></div>
                    <div class="b-example-divider"></div>
                `;
            }
        
            // Asegurar que se actualiza el contenido del contenedor
            const examDetails = document.getElementById('exam-details');
            examDetails.innerHTML = detailsHTML;
        }
        
        
    });

    // Escuchar el evento `datesSet` para aplicar los colores después del renderizado
    calendar.on('datesSet', function () {
        console.log('Calendario renderizado. Aplicando colores...');
        applyDayColors(groupedExams);
    });

    calendar.render();

}

// Variables globales
let currentPage = 0;
const examsPerPage = 5;  // Número de exámenes por página
let pages = []; // Almacenará los exámenes paginados

// Función para cargar exámenes y actualizar el calendario con paginación
function cargarExamenes() {
    const ua = document.getElementById('ua').value;
    const semestre = document.getElementById('semestre').value;
    const parcial = document.getElementById('parcial').value;

    // Reiniciar la paginación cuando se cambian los filtros
    currentPage = 0;

    // Llamada al backend para obtener exámenes según filtros
    fetch(`/getExams?semestre=${encodeURIComponent(semestre)}&materia=${encodeURIComponent(ua)}&parcial=${encodeURIComponent(parcial)}`)
        .then(response => response.json())
        .then(exams => {
            const examDetails = document.getElementById('exam-details');
            examDetails.innerHTML = ''; // Limpiar contenido previo

            if (exams.length > 0) {
                // Agrupar exámenes por fecha
                const groupedExams = exams.reduce((acc, exam) => {
                    const date = new Date(exam.Fecha).toISOString().split('T')[0]; // Normaliza la fecha a YYYY-MM-DD
                    if (!acc[date]) acc[date] = [];
                    acc[date].push({
                        Materia: exam.Materia || 'Sin título',
                        group: exam.Grupo || 'No asignado',
                        hora: exam.Hora || 'Sin hora',
                        parcial: exam.Parcial || 'N/A',
                        semestre: exam.Semestre || 'N/A',
                        details: exam.details || 'Sin detalles'
                    });
                    return acc;
                }, {});

                // Inicializar el calendario con los exámenes agrupados
                initializeCalendar(groupedExams);

                // Paginamos los exámenes
                pages = paginateExams(exams, examsPerPage);
                showPage(currentPage); // Mostrar la página inicial

                // Agregar botones de navegación
                updatePaginationButtons();
            } else {
                examDetails.innerHTML = `
                    <div class="b-example-divider"></div>
                        <div class="b-example-divider"></div>

                        <p class="text-center">No hay exámenes disponibles.</p>

                        <div class="b-example-divider"></div>
                        <div class="b-example-divider"></div>

                        <img src="img/Logo-LMAD.png" alt="logotipo de LMAD">

                        <div class="b-example-divider"></div>
                        <div class="b-example-divider"></div>
                `;
                pages = []; // Vaciar las páginas
                updatePaginationButtons();
            }
        })
        .catch(error => {
            console.error('Error al cargar los exámenes:', error);
        });
}

// Función para dividir los exámenes en páginas
function paginateExams(exams, examsPerPage) {
    const pages = [];
    for (let i = 0; i < exams.length; i += examsPerPage) {
        pages.push(exams.slice(i, i + examsPerPage));
    }
    return pages;
}
// Función para mostrar una página específica de exámenes
function showPage(pageIndex) {
    const examDetails = document.getElementById('exam-details');
    examDetails.innerHTML = ''; // Limpiar contenido previo

    if (pages.length > 0 && pages[pageIndex]) {
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
}

// Actualiza los botones de paginación según la página actual
function updatePaginationButtons() {
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    // Verificar si los botones existen antes de manipularlos
    if (!prevBtn || !nextBtn) return;

    // Deshabilitar o habilitar los botones según la página actual
    prevBtn.disabled = currentPage === 0;
    nextBtn.disabled = currentPage === pages.length - 1;

    // Remover eventos previos para evitar acumulación
    prevBtn.removeEventListener('click', goToPreviousPage);
    nextBtn.removeEventListener('click', goToNextPage);

    // Agregar eventos nuevamente
    prevBtn.addEventListener('click', goToPreviousPage);
    nextBtn.addEventListener('click', goToNextPage);
}

// Función para ir a la página anterior
function goToPreviousPage() {
    if (currentPage > 0) {
        currentPage--;
        showPage(currentPage);
        updatePaginationButtons();
    }
}

// Función para ir a la página siguiente
function goToNextPage() {
    if (currentPage < pages.length - 1) {
        currentPage++;
        showPage(currentPage);
        updatePaginationButtons();
    }
}
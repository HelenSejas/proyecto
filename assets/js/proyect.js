function doSearch()
{
	const tableReg = document.getElementById('datos');

	const searchText = document.getElementById('searchTerm').value.toLowerCase();

	let total = 0;


	// Recorremos todas las filas con contenido de la tabla

	for (let i = 1; i < tableReg.rows.length; i++) {

		// Si el td tiene la clase "noSearch" no se busca en su cntenido

		if (tableReg.rows[i].classList.contains("noSearch")) {

			continue;

		}


		let found = false;

		const cellsOfRow = tableReg.rows[i].getElementsByTagName('td');

		// Recorremos todas las celdas

		for (let j = 0; j < cellsOfRow.length && !found; j++) {

			const compareWith = cellsOfRow[j].innerHTML.toLowerCase();

			// Buscamos el texto en el contenido de la celda

			if (searchText.length == 0 || compareWith.indexOf(searchText) > -1) {

				found = true;

			total++;

			}
		}

		if (found) {

			tableReg.rows[i].style.display = '';

		} else {

			// si no ha encontrado ninguna coincidencia, esconde la

			// fila de la tabla

			tableReg.rows[i].style.display = 'none';

		}

	}



	// mostramos las coincidencias

	const lastTR=tableReg.rows[tableReg.rows.length-1];

	const td=lastTR.querySelector("td");

	lastTR.classList.remove("hide", "red");

	if (searchText == "") {

		lastTR.classList.add("hide");

	} else if (total) {

		td.innerHTML="Se ha encontrado "+total+" coincidencia"+((total>1)?"s":"");

	} else {

		lastTR.classList.add("red");

		td.innerHTML="No se han encontrado coincidencias";

	}

}






88888888888888888888888888888888888
aqui entra el codigo para clonar 

// Variables
const carrito = document.getElementById('carrito');//es el lugar donde se almacenaran los clones
const estudiante = document.getElementById('lista-estudiantes');//es el div que contiene todas las preguntas
const listaEstudiante = document.querySelector('#lista-carrito tbody');
const vaciarCarritoBtn = document.getElementById('vaciar-carrito'); 


// Listeners
cargarEventListeners();

function cargarEventListeners() {
     // Dispara cuando se presiona "Agregar Carrito"
     estudiantes.addEventListener('click', comprarEstudiante);

     // Cuando se elimina un estudiante del carrito
     carrito.addEventListener('click', eliminarEstudiante);

     // Al Vaciar el carrito
     vaciarCarritoBtn.addEventListener('click', vaciarCarrito);

     // Al cargar el documento, mostrar LocalStorage
    document.addEventListener('DOMContentLoaded', leerLocalStorage);

}




// Funciones
// Función que añade el estudiante al carrito
function comprarEstudiante(e) {
     e.preventDefault();
     // Delegation para agregar-carrito
     if(e.target.classList.contains('agregar-carrito')) {
          const estudiante = e.target.parentElement.parentElement;
          // Enviamos el estudiante seleccionado para tomar sus datos
          leerDatosEstudiante(estudiante);
     }
}
// Lee los datos del estudiante
function leerDatosEstudiante(estudiante) {
     const infoestudiante = {
          imagen: estudiante.querySelector('th').textContent,
          nombres: estudiante.querySelector('td').textContent,
          primerApellido: estudiante.querySelector('.primerApellido').textContent,
          idP: estudiante.querySelector('.IdEstudiante').textContent,
          id: estudiante.querySelector('a').getAttribute('data-id')
     }
     insertarCarrito(infoestudiante);
}

// Muestra el curso seleccionado en el Carrito
function insertarCarrito(estudiante) {
     const row = document.createElement('tr');
     row.innerHTML = `
          <td>  
               <th>"${estudiante.imagen}" </th>
          </td>
          <td>${estudiante.nombre}</td>
          <td>${estudiante.ApellidoPaterno}</td>
           <td>${estudiante.ApellidoMaterno}</td>
          <td>${estudiante.Curso}</td>
          <td>${estudiante.idP}</td>
          <td>
               <a href="#" class="borrar-estudiante btn btn-primary" data-id="${estudiante.id}">X</a>
          </td>
     `;
     listaEstudiantes.appendChild(row);
     guardarEstudianteLocalStorage(estudiante);
}
// Elimina el estudiante del carrito en el DOM
function eliminarEstudiante(e) {
     e.preventDefault();

     let estudiante,
        idEstudiante;
     if(e.target.classList.contains('borrar-estudiante') ) {
          e.target.parentElement.parentElement.remove();
          estudiante = e.target.parentElement.parentElement;
         idEstudiante = estudiante.querySelector('a').getAttribute('data-id');

     }
     eliminarCursoLocalStorage(idEstudiante);
}
// Elimina los Estudiante del carrito en el DOM
function vaciarCarrito() {
     // forma lenta
     // listaestudiante.innerHTML = '';
     // forma rapida (recomendada)
     while(listaEstudiante.firstChild) {
          listaEstudiante.removeChild(listaEstudiante.firstChild);
     }
     

     // Vaciar Local Storage
     vaciarLocalStorage();

     return false;
}

// Almacena cursos en el carrito a Local Storage

function guardarEstudianteLocalStorage(estudiante) {
    let estudiantes;
     // Toma el valor de un arreglo con datos de LS o vacio
    estudiantes = obtenerestudiantesLocalStorage();

    // el curso seleccionado se agrega al arreglo
    estudiantes.push(estudiante);

     localStorage.setItem('estudiantes', JSON.stringify(estudiantes) );
}


// Comprueba que haya elementos en Local Storage
function obtenerEstudianteLocalStorage() {
     let estudiantesLS;

     // comprobamos si hay algo en localStorage
     if(localStorage.getItem('estudiantes') === null) {
          estudiantesLS = [];
     } else {
          estudiantesLS = JSON.parse( localStorage.getItem('estudantes') );
     }
     return estudantesLS;

}

// Imprime los estudiante de Local Storage en el carrito

function leerLocalStorage() {
    let estudiantesLS;

    estudiantesLS = obtenerEstudiantesLocalStorage();

    estudiantesLS.forEach(function(estudiante){
        // constrir el template
        const row = document.createElement('tr');
        row.innerHTML = `
		<td>  
		<th>"${estudiante.imagen}" </th>
   </td>
   <td>${estudiante.nombre}</td>
   <td>${estudiante.ApellidoPaterno}</td>
   <td>${estudiante.ApellidoMaterno}</td>
   <td>${estudiante.Curso}</td>
   <td>${estudiante.idP}</td>
   <td>
		<a href="#" class="borrar-estudiante btn btn-primary " data-id="${estudiante.id}">X</a>
   </td>
        `;
        listaEstudiante.appendChild(row);

    });
}
// Elimina el Estudiante por el ID en Local Storage

function eliminarEstudianteLocalStorage(estudiante) {
    let estudiantesLS;
    // Obtenemos el arreglo de cursos
    estudiantesLS = obtenerEstudianteLocalStorage();
    // Iteramos comparando el ID del estudiante borrado con los del LS
    estudiantesLS.forEach(function(estudiantesLS, index) {
        if(estudiantesLS.id === estudiante) {
            estudiantesLS.splice(index, 1);
        }
    });
    // Añadimos el arreglo actual a storage
    localStorage.setItem('estudiantes', JSON.stringify(estudiantesLS) );
}

// Elimina todos los estudiantes de Local Storage

function vaciarLocalStorage() {
    localStorage.clear();
}
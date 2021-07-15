
var tabla = [
    {nombre: "Real Madrid",puntos: 33},
    {nombre: "Barcelona",puntos: 32},
    {nombre: "Villareal",puntos: 30},
    {nombre: "Union Deportiva",puntos: 28}
];

window.onload = cargarEventos;

function cargarEventos(){
    document.getElementById("mostrar-tabla").addEventListener("click", mostrarTabla, false);
    document.getElementById("nuevo-equipo").addEventListener("submit", nuevoEquipo, false);
}

function mostrarTabla(){
    var cuerpoTabla = document.getElementById("equipos-tabla");
    var tablaLlena = "";

    for (var i= 0; i < tabla.length; i++) {
        tablaLlena += cuerpoTabla.innerHTML = "<tr><td>" + tabla[i].nombre + "</td><td>" + tabla[i].puntos + "</td></tr>";
    }

    cuerpoTabla.innerHTML = tablaLlena;
}

function nuevoEquipo(event){
    event.preventDefault();

    var equipo = document.getElementById("nombre").value;
    var puntos =  document.getElementById("puntos").value;
    
    var nuevoEquipo = {nombre: equipo, puntos: puntos};
    tabla.push(nuevoEquipo);
}
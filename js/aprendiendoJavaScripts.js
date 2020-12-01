


function asistenciaClases(){
    alert("estoy en la funcion");
    let cantidad = parseInt(document.getElementById("numAlumnos").value);
    console.log(cantidad);

    document.getElementById("cuadroAsistencia").innerHTML= `
    <p>El numero de alumnos es: ${cantidad}<p></br>
    <p>Escriba el nombre de los alumnos</p>`;

    for (let i = 0; i < cantidad; i++) {
        document.getElementById("cuadroAsistencia").innerHTML +=`
        <input type="text" name="alumno${i}" id="alumno${i}">`;
    }

    document.getElementById("cuadroAsistencia").innerHTML += `
    <input type="submit" name="enviar" id="enviar" onClick="nombrarAlumnos(${cantidad})">`;

    
}

//Intentar solucionar esta parte del problema....................................

function nombrarAlumnos(cantidad){
    let alumnosTotales = [];
    
    for(let i =0;i<cantidad;i++){
        alumnosTotales[i]=[document.getElementById("alumno" + i).value,0];
    }

    const asistencia = (nombre,p) =>{
        let presencia = prompt("Esta presente: " + nombre);
        if(presencia.toLowerCase() == "p"){
            alumnosTotales[p][1] += 1;
        }
    }
    
    for (let i = 0; i < 5; i++) {
        for(alumno in alumnosTotales){
            asistencia(alumnosTotales[alumno][0],alumno);
        }
    }


    for(alumno in alumnosTotales){
        let resultado = `${alumnosTotales[alumno][0]}:</br>
        Presencia:<b>${alumnosTotales[alumno][1]}</b>
        Ausencia:<b>${5-alumnosTotales[alumno][1]}</b>
        `;

        if(alumnosTotales[alumno][1] < 4){
            resultado += "<b>SUSPENDISTE POOR INASISTENCIA</b></br>";
        }else{
            resultado += "</br></br>";
        }

    }

}


//Sistema de seleccion de llave...................................................

const contenedor = document.querySelector(".flex-container");


function crearLlave(nombre,modelo,precio){
    img="<img src='images/llave.png' class='llave-img'>"
    nombre = `<h2>${nombre}</h2>`;
    modelo = `<h3>${modelo}</h3>`;
    precio = `<p><b>${precio}</b></p>`;
    return [img,nombre,modelo,precio];
}

let documentFragment = document.createDocumentFragment();

for (let i = 1; i <=20; i++) {
    let precioRandom = Math.round(Math.random()*10+30);
    let modeloRandom = Math.round(Math.random()*1000);
    let llave = crearLlave(`llave${i}`,`modelo${modeloRandom}`,precioRandom);
    
    let div = document.createElement("DIV");
    div.classList.add(`item-${i}`,'flex-item');
    div.innerHTML=llave[0] + llave[1] + llave[2] + llave[3];
    documentFragment.appendChild(div);
}
contenedor.appendChild(documentFragment);
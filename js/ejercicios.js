
function posicionesCarrera(){
    let a ={
        A:0,
        B:0,
        C:0,
        D:0,
        resultado:function(){
    
            if(a.C >     a.B && a.D >    a.B && a.D >   a.C && a.A >  a.D){
                return true;
            }else{
                return false;
            }
    
        },
        intervalo:setInterval(function(){
            
            a.A = Math.ceil(Math.random()*4);
            a.B = Math.ceil(Math.random()*4);
            a.C = Math.ceil(Math.random()*4);
            a.D = Math.ceil(Math.random()*4);
    
            
            if(a.resultado()){
                clearInterval(a.intervalo);
                console.log(`Atleta A: ${a.A},Atleta B: ${a.B},Atleta C: ${a.C},Atleta D: ${a.D}`);
            }
        },10),
    
    }
}


function suma(a,b,...c){
    let resultado = a + b;

    c.forEach(function(n){
        resultado+=n;
    })
}



 primeraPersona = false;

function maquinaFiesta(edad,hora){
    
    if(edad >= 18){
        if( hora <= 7 && hora >= 2 && primeraPersona == false){
            primeraPersona = true;
            document.write("No pagas maquinola!!");
        }else{
            document.write("Puedes pasar, pero tienes que pagar");
        }
    }else{
        document.write("Lo siento, tienes que tener 18 agnos...");
    }
}



document.write("<br> DEBERIA PAGAR:");
maquinaFiesta(21,11);
document.write("<br> NO DEBERIA PASAR: ");
maquinaFiesta(17,3);
document.write("<br> NO DEBERIA PAGAR, ES EL PRIMERO EN PASAR A LAS 2:");
maquinaFiesta(18,3);
document.write("<br> DEBERIA PAGAR POR NO SER LA PRIMERA PERSONA A LAS 2:");
maquinaFiesta(18,3);


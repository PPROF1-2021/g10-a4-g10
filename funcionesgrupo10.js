function checkLengthnombre(){
    var nombre = document.getElementById("validationCustom01");
    if(nombre.value.length < 3){
        alert("El campo debe tener más de 2 caracteres");
    }   
}

function checkLengthapellido(){
    var apellido = document.getElementById("validationCustom02");
    if(apellido.value.length < 3){
        alert("El campo debe tener más de 2 caracteres");
    }   
}

function checkLengthusuario(){
    var usuario = document.getElementById("validationCustom06");
    if(usuario.value.length > 10){
        alert("El campo solo puede tener hasta 10 caracteres");
    }   
}

function calcularFecha(fecha, dias){
    var d = document.getElementById("demo")
    fecha.setDate(fecha.getDate() + dias);
    return fecha;
  }

  var d = new Date();
console.log(calcularFecha(d, +10));



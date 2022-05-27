var valida3Formulario = function() {
    var validacion = true;
    //valido el nombre
    valor = document.getElementById("nombre").value;

    if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
        alert("Tienes que escribir el nombre");
        validacion = false;

    }

    //valido el primer apellido
    valor = document.getElementById("apellido1").value;
    if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
        alert("Tienes que escribir el primer apellido");
        validacion = false;

    }

    //valido el segundo apellido
    valor = document.getElementById("apellido2").value;
    if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
        alert("Tienes que escribir el segundo apellido");
        validacion = false;
    }

    // validar telefono
    valor = document.getElementById("telf").value;

    if (valor == null || valor.length != 9 || /^\s+$/.test(valor)) {
        alert("Tienes que escribir tu numero de telefono");

        validacion = false;


    }


    // validar correo electronico
    valor = document.getElementById("email").value;

    if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
        alert("Escribe tu correo electronico");
        validacion = false;

    }

    // validar el departamento
    valor = document.getElementById("dept").value;
    if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
        alert("Tienes que escribir el departamento");
        validacion = false;

    }
    if (!validacion) {
        return false;
    }
}
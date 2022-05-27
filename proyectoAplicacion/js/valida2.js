var valida2Formulario = function() {
    var validacion = true;

    // validar DNI
    validaDNI = document.getElementById("dni").value;
    var letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];

    validaDNI = document.getElementById("dni").value;
    if (validaDNI == null || validaDNI.length == 0 || /^\s+$/.test(validaDNI)) {
        alert('[ERROR] "DNI" tienes que escribir tu dni')
        validacion = false
    } else if (!(/^\d{8}[A-Z]$/.test(validaDNI))) {
        alert('[ERROR] "DNI" Tu DNI es correcto');
        validacion = false;
    } else if (validaDNI.charAt(8) != letras[(validaDNI.substring(0, 8)) % 23]) {
        alert('[ERROR] "DNI" es incorrecto');
        validacion = false;
    }


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

    //valido el pwd
    valor = document.getElementById("clase").value;

    if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
        alert("Tienes que escribir la clasee");
        validacion = false;
    }
    if (!validacion) {
        return false;
    }
}
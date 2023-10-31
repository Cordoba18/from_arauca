
const message_error = document.querySelector('.message_error');
const form = document.querySelector('#form');


form.addEventListener('submit', function(e) {


const myCheckbox = document.querySelector('#myCheckbox');

    const name = document.querySelector('#name').value;
    const phone = document.querySelector('#phone').value;
    const city = document.querySelector('#city').value;
    const nit = document.querySelector('#nit').value;
    const neighborhood = document.querySelector('#neighborhood').value;


    if (name == "" || phone == "" || city == "" || nit == "" || neighborhood=="") {
        message_error.textContent = "HAY CAMPOS VACIOS"
    e.preventDefault();
    }else if (!esTexto(name)) {
        message_error.textContent = "CARACTERES NO PERMITIDOS EN NOMBRE"
        e.preventDefault();
    }else if (name.length > 30) {
        message_error.textContent = "PON TU NOMBRE MAS CORTO"
        e.preventDefault();
    }else if (!tieneNumero(nit)) {
        message_error.textContent = "CARACTERES NO PERMITIDOS EN EL NIT"
        e.preventDefault();
    }else if (nit.length < 8 || nit.length > 11) {
        message_error.textContent = "EL NIT DEBE TENER DE 8 A 11 CARACTERES"
        e.preventDefault();
    }else if (!tieneNumero(city)) {
        message_error.textContent = "CIUDAD NO VALIDA"
        e.preventDefault();
    } else if (!tieneNumero(phone)) {
        message_error.textContent = "CARACTERES NO PERMITIDOS EN EL TÈLEFONO"
        e.preventDefault();
    }else if (phone.length < 6 || phone.length > 10) {
        message_error.textContent = "EL TÈLEFONO DEBE TENER DE 6 A 10 CARACTERES"
        e.preventDefault();
    }else if (!myCheckbox.checked) {
        message_error.textContent = "ACEPTA LOS TERMINOS Y CONDICIONES";
        e.preventDefault();
    } else {
    return true;
    }
})






//metodo para encontrar numeros en un texto
function tieneNumero(texto) {
    for (let i = 0; i < texto.length; i++) {
        if (!isNaN(texto[i])) {

            return true;

        }
    }
    return false;
}
//mvalidar el largo permitido de la contraseña


function esTexto(texto) {
    // Expresión regular que verifica si la entrada contiene solo letras y espacios
    var regex = /^[A-Za-z\s]+$/;
    return regex.test(texto);
}

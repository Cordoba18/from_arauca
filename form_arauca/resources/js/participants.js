let container_participants =  document.querySelector('.container_participants');

let info_participants = container_participants.innerHTML;
let container_code = document.querySelector('.container_code');
container_participants.innerHTML = "";

let code = 4213;

let btn_validar = document.querySelector('#btn_validar');

btn_validar.addEventListener('click', function(e) {

    e.preventDefault();
    let code_validation = document.querySelector('#code_validation').value;
    if (code_validation == code) {
        container_code.style.opacity = 0;
        setTimeout(() => {
            container_code.remove();
            container_participants.innerHTML = info_participants;
            container_participants.removeAttribute('hidden');
            container_participants.classList.add('activate');
        }, 1000);
    }else{
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Codigo incorrecto',
          })
    }
})

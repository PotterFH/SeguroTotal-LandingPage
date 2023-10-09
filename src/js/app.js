document.addEventListener('DOMContentLoaded', function () {
    iniciarApp();
});

function iniciarApp() {
    navegacionFija();
    scrollNav();
    disabledButtons();
}

function navegacionFija() {
    const barra = document.querySelector('.header');
    const sobreFestival = document.querySelector('.overlay');
    const body = document.querySelector('body');


    window.addEventListener('scroll', function () {
        if (sobreFestival.getBoundingClientRect().bottom < 0) {
            barra.classList.add('fijo');
            body.classList.add('body-scroll');
        } else {
            barra.classList.remove('fijo');
            body.classList.remove('body-scroll');
        }
    });
}


function scrollNav() {
    const enlaces = document.querySelectorAll('.navegacion-principal a');

    enlaces.forEach(enlace => {
        enlace.addEventListener('click', function (e) {
            e.preventDefault();

            const seccionScroll = e.target.attributes.href.value;
            const seccion = document.querySelector(seccionScroll);
            seccion.scrollIntoView({ behavior: "smooth" });
        });
    });
}

function mostrarImagen(id) {
    const imagen = document.createElement('picture');
    imagen.innerHTML = `
        <source srcset="build/img/grande/${id}.avif" type="image/avif">
        <source srcset="build/img/grande/${id}.webp" type="image/webp">
        <img loading="lazy" width="200" height="300" src="build/img/grande/${id}.jpg" alt="imagen galeria">
    `;

    // Crea el Overlay con la imagen
    const overlay = document.createElement('DIV');
    overlay.appendChild(imagen);
    overlay.classList.add('overlay');
    overlay.onclick = function () {
        const body = document.querySelector('body');
        body.classList.remove('fijar-body');
        overlay.remove();
    }

    // Boton para cerrar el Modal
    const cerrarModal = document.createElement('P');
    cerrarModal.textContent = 'X';
    cerrarModal.classList.add('btn-cerrar');
    cerrarModal.onclick = function () {
        const body = document.querySelector('body');
        body.classList.remove('fijar-body');
        overlay.remove();
    }
    overlay.appendChild(cerrarModal);

    // Añadirlo al HTML
    const body = document.querySelector('body');
    body.appendChild(overlay);
    body.classList.add('fijar-body');
}

function disabledButtons() {
    const btn = document.getElementById('btn-enviar-correo');
    btn.disabled = true;
}

function validarEmail() {
    const email = document.getElementById('emailInput').value;

    const btn = document.getElementById('btn-enviar-correo');
    var regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    if (regex.test(email)) {
        btn.disabled = false;
        btn.classList.remove('boton')
        btn.classList.add('boton-si')
    } else {
        btn.disabled = true;
        btn.classList.remove('boton-si')
        btn.classList.add('boton')
    }
    console.log(email)
}

function enviarCorreo() { 
    const email = document.getElementById('emailInput').value;
    const nombre = document.getElementById('nombreInput').value;

    console.log(email)
    console.log(nombre)

    const formData = new FormData();
    formData.append('nombre', nombre)
    formData.append('email', email)

    fetch('../../Email.php', {
        method: 'POST',
        body: formData
    }).then(respo => respo.json())
        .then(async data => {
            switch (data) {
                case 'success':
                    console.log('El email se envio')
                case 'error':
                    console.log('ocurrio un error')
            }
        })
        .catch(err => {
            console.log('error')
        })
}


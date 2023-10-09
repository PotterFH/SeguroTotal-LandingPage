<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SeguroTotal</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="build/css/app.css">
</head>

<body>

    <header class="header">
        <div class="contenedor contenido-header">
            <h1>Seguro<span>Total</span></h1>

            <nav class="navegacion-principal">
                <a href="#lineup">¿A quién quieres proteger?</a>
                <a href="#galeria">Beneficios</a>
                <a href="#boletos">¿Por qué nosotros?</a>
                <a href="#contacto">Contactanos</a>
            </nav>
        </div>
    </header>

    <div class="video">
        <div class="overlay">
            <div class="contenedor contenido-video">
                <h2>Tramita el seguro de vida más fácil con <span>Seguro</span>Total</h2>
            </div>
        </div>
        <video autoplay muted loop>
            <source src="video/video.mp4" type="video/mp4">
            <source src="video/video.ogg" type="video/ogg">
            <source src="video/video.webm" type="video/webm">
        </video>
    </div>
    <section id="lineup" class="lineup">
        <h3>¿A quién quieres proteger?</h3>
        <div class="escenarios-contenedor contenedor">
            <div class="escenario bg-grey">
                <img src="src/img/grande/person.jpg" alt="">
                <h3 class="nombre-escenario">A mí</h3>
                <p>Protegue al protagonista de tu propia historia. Conoce el seguro que te ayudara a que nada te detenga
                </p>
            </div> <!--.escenario-->
            <div class="escenario bg-grey">
                <img src="src/img/grande/family.jpg" alt="">
                <h3 class="nombre-escenario">A mis seres queridos</h3>
                <p>Lo más importante es cuidar a los que más amas si sucede algo inesperado. Tener un seguro es la mejor
                    opción</p>
            </div> <!--.escenario-->
            <div class="escenario bg-grey">
                <img src="src/img/grande/worker.jpg" alt="">
                <h3 class="nombre-escenario">A mis empleados</h3>
                <p>Sin importar si eres una PyME o una gran organización, puedes proteger al equipo que te ayuda a
                    lograr el exito de tu empresa
                </p>
            </div> <!--.escenario-->
            <div class="escenario bg-grey">
                <img src="src/img/grande/pet.jpg" alt="">
                <h3 class="nombre-escenario">A tu mascota</h3>
                <p>Por que una mascota es un importante miembro de la familia, protegelo
                </p>
            </div> <!--.escenario-->
        </div> <!--.escenarios-contenedor -->

    </section>

    <section id="galeria" class="galeria contenedor">
        <h3>Beneficios</h3>

        <div class="galeria-imagenes">
            <div class="escenario contenedor">
                <div class="alinear-img">
                    <img src="src/img/grande/dolar.png" alt="" class="img-beneficios">
                </div>
                <h3 class="nombre-escenario">Indemnizacion</h3>
                <p>indemnizacion por fallecimiento del asegurado
                </p>
            </div> <!--.escenario-->
            <div class="escenario contenedor">
                <div class="alinear-img">
                    <img src="src/img/grande/signo-de-dolar.png" alt="" class="img-beneficios">
                </div>
                <h3 class="nombre-escenario">Doble indemnizacion</h3>
                <p>en caso de fallecimiento accidental</p>
            </div> <!--.escenario-->
            <div class="escenario contenedor">
                <div class="alinear-img">
                    <img src="src/img/grande/bolsa-de-dinero.png" alt="" class="img-beneficios">
                </div>
                <h3 class="nombre-escenario">Hasta el triple de la suma asegurada</h3>
                <p>en caso de muerte accidental colectiva.</p>
            </div> <!--.escenario-->
        </div>
    </section>
    <section id="boletos" class="galeria contenedor">
        <h3>¿Por qué nosotros?</h3>
        <div class="galeria-imagenes">
            <div class="escenario contenedor bg-grey">
                <div class="alinear-img">
                    <img src="src/img/grande/confiar.png" alt="" class="img-beneficios">
                </div>
                <h3 class="nombre-escenario">Socio de confianza</h3>
                <p>Más de 150 años en 40 países, y más de 80 años en México logrando las metas de nuestros asegurados.
                </p>
            </div> <!--.escenario-->
            <div class="escenario contenedor bg-grey">
                <div class="alinear-img">
                    <img src="src/img/grande/piel-con-piel.png" alt="" class="img-beneficios">
                </div>
                <h3 class="nombre-escenario">Siempre cerca de ti </h3>
                <p>Más de 3,000 agentes expertos en ayudar a cumplir los sueños de los mexicanos.</p>
            </div> <!--.escenario-->
            <div class="escenario contenedor bg-grey">

                <div class="alinear-img">
                    <img src="src/img/grande/edad.png" alt="" class="img-beneficios">
                </div>
                <h3 class="nombre-escenario">Seguros para cada etapa </h3>
                <p>Productos hechos por personas para personas, especializados en Vida y Gastos Médicos para proteger
                    tus pasos en cualquier etapa de tu vida.</p>
            </div> <!--.escenario-->
        </div>
    </section>

    <section id="contacto" class="contacto contenedor">
        <div class="contenedor">
            <h3>Contacto</h3>

            <form class="form-contenedor contenedor bg-grey">
                <div class="campo">
                    <label class="campo__label" for="nombre">Nombre</label>
                    <input class="campo__field" type="text" placeholder="Tu Nombre" id="nombreInput">
                </div>
                <div class="campo">
                    <label class="campo__label" for="email">E-mail</label>
                    <input class="campo__field" type="email" placeholder="Tu E-mail" id="emailInput" oninput="validarEmail();">
                </div>
                <div class="campo">
                    <input type="button" value="Enviar" class="boton" id="btn-enviar-correo" onclick="enviarCorreo();">
                </div>
            </form> <!--.escenario-->
            
    </section>
    <script src="build/js/app.js"></script>
</body>

</html>
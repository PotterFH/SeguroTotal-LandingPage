function iniciarApp(){navegacionFija(),scrollNav(),disabledButtons()}function navegacionFija(){const e=document.querySelector(".header"),o=document.querySelector(".overlay"),t=document.querySelector("body");window.addEventListener("scroll",(function(){o.getBoundingClientRect().bottom<0?(e.classList.add("fijo"),t.classList.add("body-scroll")):(e.classList.remove("fijo"),t.classList.remove("body-scroll"))}))}function scrollNav(){document.querySelectorAll(".navegacion-principal a").forEach(e=>{e.addEventListener("click",(function(e){e.preventDefault();const o=e.target.attributes.href.value;document.querySelector(o).scrollIntoView({behavior:"smooth"})}))})}function mostrarImagen(e){const o=document.createElement("picture");o.innerHTML=`\n        <source srcset="build/img/grande/${e}.avif" type="image/avif">\n        <source srcset="build/img/grande/${e}.webp" type="image/webp">\n        <img loading="lazy" width="200" height="300" src="build/img/grande/${e}.jpg" alt="imagen galeria">\n    `;const t=document.createElement("DIV");t.appendChild(o),t.classList.add("overlay"),t.onclick=function(){document.querySelector("body").classList.remove("fijar-body"),t.remove()};const n=document.createElement("P");n.textContent="X",n.classList.add("btn-cerrar"),n.onclick=function(){document.querySelector("body").classList.remove("fijar-body"),t.remove()},t.appendChild(n);const c=document.querySelector("body");c.appendChild(t),c.classList.add("fijar-body")}function disabledButtons(){document.getElementById("btn-enviar-correo").disabled=!0}function validarEmail(){const e=document.getElementById("emailInput").value,o=document.getElementById("btn-enviar-correo");/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(e)?(console.log("El email es valido"),o.disabled=!1,o.classList.remove("boton"),o.classList.add("boton-si")):(console.log("El email no es valido"),o.disabled=!0,o.classList.remove("boton-si"),o.classList.add("boton")),console.log(e)}function enviarCorreo(){console.log("Enviar correo");const e=document.getElementById("emailInput").value,o=document.getElementById("nombreInput").value;console.log(e),console.log(o)}document.addEventListener("DOMContentLoaded",(function(){iniciarApp()}));
//# sourceMappingURL=app.js.map
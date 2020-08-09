// Herramientas
c=console.log


// Activando funciones bootstrapp
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

// Mi script
let whts=document.getElementById("whatsapp");
function elwhats() {
    if(screen.width<500){  
        whts.setAttribute("href","//wa.me/5215555087310?text=_¡Hola!_ Estoy buscando el depa de mis sueños")
    }else{
        whts.setAttribute("href","https://web.whatsapp.com/send?phone=+5215621429436&amp;text=_¡Hola!_ Estoy interesado en la propiedad")
    }
}
window.addEventListener("load",elwhats)
window.addEventListener("rezise",elwhats)
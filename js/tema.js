// Herramientas
c=console.log

c(window)
// Activando funciones bootstrapp
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

// Mi script
function keyShort(){
    if (e.ctrlKey && e.shiftKey && e.which === 83) {
        alert("Presionaste Control + Shift + s");
        e.preventDefault();
    }
}

let whts=document.getElementById("whatsapp");
function elwhats() {
    if(screen.width<500){  
        whts.setAttribute("href","//wa.me/5215621429436?text=_¡Hola!_ Estoy buscando el depa de mis sueños")
    }else{
        whts.setAttribute("href","https://web.whatsapp.com/send?phone=+5215621429436&amp;text=_¡Hola!_ Estoy interesado en la propiedad")
    }
}


window.addEventListener("keydown",keyShort)
window.addEventListener("load",elwhats)
window.addEventListener("rezise",elwhats)